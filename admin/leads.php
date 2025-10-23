<?php
// admin/leads.php
declare(strict_types=1);

require_once __DIR__ . '/_auth.php';
require_login();
require_once __DIR__ . '/../api/db.php';

$pdo = db();

// --- Search & pagination ---
$q       = trim($_GET['q'] ?? '');
$page    = max(1, (int)($_GET['page'] ?? 1));
$perPage = (int)($_GET['per'] ?? 20);
$perPage = max(1, min(100, $perPage)); // clamp 1..100
$offset  = ($page - 1) * $perPage;

$where  = '';
$params = [];

if ($q !== '') {
  $where = "WHERE (
      first_name   LIKE :q OR
      last_name    LIKE :q OR
      email        LIKE :q OR
      phone        LIKE :q OR
      application  LIKE :q OR
      product      LIKE :q OR
      source_page  LIKE :q OR
      state_pref   LIKE :q
    )";
  $params[':q'] = "%{$q}%";
}

// --- Total count ---
$countSql = "SELECT COUNT(*) AS c FROM leads {$where}";
$stc = $pdo->prepare($countSql);
$stc->execute($params);
$total = (int)$stc->fetchColumn();
$pages = max(1, (int)ceil($total / $perPage));

// --- Fetch rows ---
// IMPORTANT: inline LIMIT/OFFSET integers (do NOT bind when emulation is off)
$sql = "SELECT * FROM leads {$where} ORDER BY id DESC
        LIMIT {$perPage} OFFSET {$offset}";
$st = $pdo->prepare($sql);

// bind only the :q param if present
foreach ($params as $k => $v) {
  $st->bindValue($k, $v, PDO::PARAM_STR);
}
$st->execute();
$rows = $st->fetchAll() ?: [];

// Helper for building pagination URLs while preserving filters
function url_with(array $extra): string {
  $qs = array_merge($_GET, $extra);
  return '?' . http_build_query($qs);
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Leads — Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
  <div class="max-w-7xl mx-auto px-6 py-8">
    <div class="flex items-center justify-between gap-4 flex-wrap">
      <h1 class="text-2xl font-bold">Leads</h1>
      <div class="flex items-center gap-3">
        <!-- Point this to your actual export endpoint -->
        <a href="/admin/export-csv.php<?= $q!=='' ? ('?'.http_build_query(['q'=>$q])) : '' ?>"
           class="px-4 py-2 rounded-lg bg-green-600 text-white">Export CSV</a>
        <a href="/admin/logout.php" class="px-4 py-2 rounded-lg bg-gray-900 text-white">Logout</a>
      </div>
    </div>

    <form method="get" class="mt-5 flex items-center gap-2 flex-wrap">
      <input type="text" name="q" value="<?=htmlspecialchars($q)?>"
             placeholder="Search name, email, phone, source, product…"
             class="w-full md:w-96 px-3 py-2 border rounded-lg">
      <select name="per" class="px-3 py-2 border rounded-lg">
        <?php foreach ([20,50,100] as $opt): ?>
          <option value="<?=$opt?>" <?= $perPage===$opt ? 'selected':'' ?>><?=$opt?> / page</option>
        <?php endforeach; ?>
      </select>
      <button class="px-3 py-2 border rounded-lg bg-white">Apply</button>
    </form>

    <div class="mt-6 overflow-x-auto bg-white border rounded-xl">
      <table class="min-w-full text-sm">
        <thead class="bg-gray-100 text-gray-700">
          <tr>
            <th class="text-left p-3">#</th>
            <th class="text-left p-3">Name</th>
            <th class="text-left p-3">Phone</th>
            <th class="text-left p-3">Email</th>
            <th class="text-left p-3">Source</th>
            <th class="text-left p-3">Application</th>
            <th class="text-left p-3">Floors</th>
            <th class="text-left p-3">Product</th>
            <th class="text-left p-3">State Pref</th>
            <th class="text-left p-3">Submitted</th>
          </tr>
        </thead>
        <tbody>
          <?php if ($rows): ?>
            <?php foreach ($rows as $r): ?>
              <tr class="border-t">
                <td class="p-3"><?= (int)$r['id'] ?></td>
                <td class="p-3"><?= htmlspecialchars(trim(($r['first_name'] ?? '') . ' ' . ($r['last_name'] ?? ''))) ?></td>
                <td class="p-3"><?= htmlspecialchars($r['phone'] ?? '') ?></td>
                <td class="p-3"><?= htmlspecialchars($r['email'] ?? '') ?></td>
                <td class="p-3"><?= htmlspecialchars($r['source_page'] ?? '—') ?></td>
                <td class="p-3"><?= htmlspecialchars($r['application'] ?? '') ?></td>
                <td class="p-3"><?= htmlspecialchars($r['floors'] ?? '') ?></td>
                <td class="p-3"><?= htmlspecialchars($r['product'] ?? '') ?></td>
                <td class="p-3"><?= htmlspecialchars($r['state_pref'] ?? '') ?></td>
                <td class="p-3"><?= htmlspecialchars($r['submitted_at'] ?? '') ?></td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr><td colspan="10" class="p-6 text-center text-gray-500">No leads found.</td></tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6 flex items-center gap-2 flex-wrap">
      <?php if ($page > 1): ?>
        <a class="px-3 py-1 border rounded" href="<?= url_with(['page'=>$page-1]) ?>">Prev</a>
      <?php endif; ?>
      <span class="text-sm text-gray-600">Page <?= $page ?> / <?= $pages ?> (<?= $total ?>)</span>
      <?php if ($page < $pages): ?>
        <a class="px-3 py-1 border rounded" href="<?= url_with(['page'=>$page+1]) ?>">Next</a>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>
