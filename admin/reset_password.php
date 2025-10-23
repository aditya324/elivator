<?php
require_once __DIR__ . '/_auth.php';
require_login();
require_super();
$pdo = db();

$msg = $err = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id  = (int)($_POST['id'] ?? 0);
  $pwd = (string)($_POST['password'] ?? '');
  if ($id && $pwd !== '') {
    $hash = password_hash($pwd, PASSWORD_DEFAULT);
    $pdo->prepare("UPDATE admins SET password_hash=? WHERE id=?")->execute([$hash, $id]);
    $msg = 'Password updated';
  } else {
    $err = 'Provide admin ID and new password';
  }
}
$admins = $pdo->query("SELECT id, username FROM admins ORDER BY username")->fetchAll();
?>
<!doctype html><html><head><meta charset="utf-8"><title>Reset Password</title><script src="https://cdn.tailwindcss.com"></script></head>
<body class="bg-gray-50">
<div class="max-w-md mx-auto mt-12 bg-white p-6 rounded-xl border">
  <h1 class="text-xl font-semibold mb-4">Reset Admin Password</h1>
  <?php if ($msg): ?><p class="text-green-700 mb-3"><?=$msg?></p><?php endif; ?>
  <?php if ($err): ?><p class="text-red-700 mb-3"><?=$err?></p><?php endif; ?>
  <form method="post" class="space-y-3">
    <label class="block text-sm">
      <span>Admin</span>
      <select name="id" class="mt-1 w-full border rounded-lg px-3 py-2">
        <?php foreach ($admins as $a): ?>
          <option value="<?=$a['id']?>"><?=htmlspecialchars($a['username'])?></option>
        <?php endforeach; ?>
      </select>
    </label>
    <label class="block text-sm">
      <span>New password</span>
      <input type="password" name="password" class="mt-1 w-full border rounded-lg px-3 py-2">
    </label>
    <button class="px-4 py-2 rounded-lg bg-black text-white">Update</button>
  </form>
</div>
</body></html>
