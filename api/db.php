<?php
// api/db.php
require_once __DIR__ . '/config.php';

function db(): PDO {
  static $pdo = null;
  if ($pdo) return $pdo;

  $user = env_string('DB_USER', 'root');
  $pass = env_string('DB_PASS', '');

  $pdo = new PDO(db_dsn(), $user, $pass, [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  ]);

  // Keep MySQL strict modes predictable if needed
  // $pdo->exec("SET sql_mode = ''");

  return $pdo;
}
