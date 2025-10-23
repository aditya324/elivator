<?php
// admin/_auth.php
session_start();
require_once __DIR__ . '/../api/config.php';
require_once __DIR__ . '/../api/db.php';

function is_logged_in(): bool {
  return isset($_SESSION['admin_ok']) && $_SESSION['admin_ok'] === true;
}

function require_login() {
  if (!is_logged_in()) {
    header('Location: /admin/login.php');
    exit;
  }
}

function current_admin() {
  return $_SESSION['admin'] ?? null; // ['id','username','role']
}

function check_login(string $u, string $p): bool {
  $pdo = db();
  $st = $pdo->prepare("SELECT id, username, password_hash, role, is_active FROM admins WHERE email = ? LIMIT 1");
  $st->execute([$u]);
  $row = $st->fetch();

  if ($row && (int)$row['is_active'] === 1 && password_verify($p, $row['password_hash'])) {
    $_SESSION['admin_ok'] = true;
    $_SESSION['admin'] = [
      'id' => (int)$row['id'],
      'email' => $row['email'],
      'role' => $row['role'],
    ];
    return true;
  }

  // Optional fallback to .env creds (kept for emergencies)
  if (($u === (admin_user())) && ($p === (admin_pass()))) {
    $_SESSION['admin_ok'] = true;
    $_SESSION['admin'] = ['id' => 0, 'username' => $u, 'role' => 'super'];
    return true;
  }

  return false;
}

function require_super() {
  $me = current_admin();
  if (!$me || $me['role'] !== 'super') {
    http_response_code(403);
    exit('Forbidden');
  }
}
