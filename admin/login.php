<?php

declare(strict_types=1);
require_once __DIR__ . '/_auth.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $u = $_POST['user'] ?? '';
  $p = $_POST['pass'] ?? '';

  if (check_login($u, $p)) {
    header('Location: /admin/leads.php');
    exit;
  }
  $error = 'Invalid credentials';
}
?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Admin Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <div class="max-w-sm mx-auto mt-24 bg-white p-6 rounded-xl shadow">
    <h1 class="text-xl font-semibold mb-4">Admin Login</h1>
    <?php if ($error): ?>
      <p class="text-red-600 text-sm mb-3"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <form method="post" autocomplete="off">
      <label class="block mb-3 text-sm">
        <span>Username or Email</span>
        <input name="user" class="w-full mt-1 border rounded-lg px-3 py-2" required>
      </label>
      <label class="block mb-4 text-sm">
        <span>Password</span>
        <input name="pass" type="password" class="w-full mt-1 border rounded-lg px-3 py-2" required>
      </label>
      <button class="px-4 py-2 rounded-lg bg-black text-white w-full">Login</button>
    </form>
  </div>
</body>

</html>