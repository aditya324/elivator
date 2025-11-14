<?php
// api/config.php
require_once dirname(__DIR__) . '/bootstrap.php';

// Helper getters (optional)
function env_string(string $key, ?string $default=null): ?string {
  $v = $_ENV[$key] ?? $_SERVER[$key] ?? getenv($key);
  return $v === false ? $default : ($v ?? $default);
}

const DB_CHARSET = 'utf8mb4';
const DB_DRIVER  = 'mysql';


function admin_user(): string { return env_string('ADMIN_USER', 'admin'); }
function admin_pass(): string { return env_string('ADMIN_PASS', 'admin'); }

function db_dsn(): string {
  $host = env_string('DB_HOST', '127.0.0.1');
  $name = env_string('DB_NAME', 'vertivo_site');
  return DB_DRIVER . ":host={$host};dbname={$name};charset=" . DB_CHARSET;
}     
function admin_logout(): void {
  $_SESSION = [];
  if (ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
  }
  session_destroy();
}