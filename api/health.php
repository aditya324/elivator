<?php
require_once __DIR__ . '/db.php';
header('Content-Type: application/json');
try {
  $pdo = db();
  $ver = $pdo->query('SELECT VERSION()')->fetchColumn();
  echo json_encode(['ok' => true, 'mysql_version' => $ver]);
} catch (Throwable $e) {
  http_response_code(500);
  echo json_encode(['ok' => false, 'error' => $e->getMessage()]);
}
