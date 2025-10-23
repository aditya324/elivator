<?php
require_once __DIR__ . '/_auth.php';
require_login();
require_super();
$pdo = db();

// Handle create
$errors = [];
$ok = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = trim($_POST['username'] ?? '');
  $email    = trim($_POST['email'] ?? '');
  $password = (string)($_POST['password'] ?? '');
  $role     = $_POST['role'] === 'super' ? 'super' : 'editor';
  $active   = isset($_POST['is_active']) ? 1 : 0;

  if ($username === '') $errors[] = 'Username required';
  if ($password === '') $errors[] = 'Password required';
  if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Invalid email';

  if (!$errors) {
    try {
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $st = $pdo->prepare("INSERT INTO admins (username,email,password_hash,role,is_active) VALUES (?,?,?,?,?)");
      $st->execute([$username, $email ?: null, $hash, $role, $active]);
      $ok = 'Admin user created';
    } catch (Throwable $e) {
      $errors[] = 'Username or email already exists';
    }
  }
}

// Toggle active (GET action)
if (isset($_GET['toggle']) && ctype_digit($_GET['toggle'])) {
  $id = (int)$_GET['toggle'];
  if ($id !== (current_admin()['id'] ?? -1)) { // prevent self-disable
    $pdo->prepare("UPDATE admins SET is_active = 1 - is_active WHERE id = ?")->execute([$id]);
  }
  header('Location: /admin/admins.php'); exit;
}

// List admins
$rows = $pdo->query("SELECT id,username,email,role,is_active,created_at FROM admins ORDER BY id DESC")->fetchAll();
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admins — Manage</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
  <div class="max-w-5xl mx-auto px-6 py-8">
    <div class="flex items-center justify-between">
      <h1 class="text-2xl font-bold">Admins</h1>
      <div class="flex gap-2">
        <a href="/admin/leads.php" class="px-3 py-2 rounded bg-gray-800 text-white">Leads</a>
        <a href="/admin/logout.php" class="px-3 py-2 rounded bg-gray-900 text-white">Logout</a>
      </div>
    </div>

    <?php if ($ok): ?><p class="mt-4 text-green-700"><?=htmlspecialchars($ok)?></p><?php endif; ?>
    <?php if ($errors): ?>
      <ul class="mt-4 text-red-700 list-disc list-inside">
        <?php foreach ($errors as $e): ?><li><?=htmlspecialchars($e)?></li><?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <!-- Create form -->
    <div class="mt-6 bg-white border rounded-xl p-5">
      <h2 class="font-semibold mb-4">Add Admin</h2>
      <form method="post" class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <label class="block text-sm">
          <span>Username*</span>
          <input name="username" class="mt-1 w-full border rounded-lg px-3 py-2">
        </label>
        <label class="block text-sm">
          <span>Email</span>
          <input name="email" type="email" class="mt-1 w-full border rounded-lg px-3 py-2">
        </label>
        <label class="block text-sm">
          <span>Password*</span>
          <input name="password" type="password" class="mt-1 w-full border rounded-lg px-3 py-2">
        </label>
        <div class="flex items-center gap-4">
          <label class="text-sm">
            <span>Role</span>
            <select name="role" class="mt-1 border rounded-lg px-3 py-2">
              <option value="editor">Editor</option>
              <option value="super">Super</option>
            </select>
          </label>
          <label class="text-sm mt-6">
            <input type="checkbox" name="is_active" checked class="mr-1"> Active
          </label>
        </div>
        <div class="md:col-span-2">
          <button class="px-4 py-2 rounded-lg bg-black text-white">Create Admin</button>
        </div>
      </form>
    </div>

    <!-- List -->
    <div class="mt-6 bg-white border rounded-xl overflow-x-auto">
      <table class="min-w-full text-sm">
        <thead class="bg-gray-100">
          <tr>
            <th class="text-left p-3">#</th>
            <th class="text-left p-3">Username</th>
            <th class="text-left p-3">Email</th>
            <th class="text-left p-3">Role</th>
            <th class="text-left p-3">Status</th>
            <th class="text-left p-3">Created</th>
            <th class="text-left p-3">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($rows as $r): ?>
            <tr class="border-t">
              <td class="p-3"><?= (int)$r['id'] ?></td>
              <td class="p-3"><?= htmlspecialchars($r['username']) ?></td>
              <td class="p-3"><?= htmlspecialchars($r['email'] ?? '') ?></td>
              <td class="p-3"><?= htmlspecialchars($r['role']) ?></td>
              <td class="p-3">
                <?php if ((int)$r['is_active'] === 1): ?>
                  <span class="px-2 py-1 rounded bg-green-100 text-green-700">Active</span>
                <?php else: ?>
                  <span class="px-2 py-1 rounded bg-gray-200 text-gray-700">Disabled</span>
                <?php endif; ?>
              </td>
              <td class="p-3"><?= htmlspecialchars($r['created_at']) ?></td>
              <td class="p-3">
                <?php if ((int)$r['id'] !== (current_admin()['id'] ?? -1)): ?>
                  <a class="underline" href="?toggle=<?= (int)$r['id'] ?>">
                    <?= (int)$r['is_active'] ? 'Disable' : 'Enable' ?>
                  </a>
                <?php else: ?>
                  <span class="text-gray-400">—</span>
                <?php endif; ?>
              </td>
            </tr>
          <?php endforeach; ?>
          <?php if (!$rows): ?>
            <tr><td colspan="7" class="p-6 text-center text-gray-500">No admins.</td></tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
