<?php
// /admin/export-csv.php
declare(strict_types=1);
require_once __DIR__ . '/_auth.php';
require_login();
require_once __DIR__ . '/../api/db.php';

$pdo = db();
$q = trim($_GET['q'] ?? '');
$where = '';
$params = [];
if ($q !== '') {
  $where = "WHERE (
    first_name   LIKE :q OR last_name LIKE :q OR email LIKE :q OR phone LIKE :q OR
    application  LIKE :q OR product LIKE :q OR source_page LIKE :q OR state_pref LIKE :q
  )";
  $params[':q'] = "%{$q}%";
}

$sql = "SELECT id, first_name, last_name, phone, email, application, floors, product, state_pref, source_page, submitted_at
        FROM leads {$where} ORDER BY id DESC";
$st = $pdo->prepare($sql);
foreach ($params as $k => $v) $st->bindValue($k, $v, PDO::PARAM_STR);
$st->execute();

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=leads.csv');

$out = fopen('php://output', 'w');
fputcsv($out, ['id','first_name','last_name','phone','email','application','floors','product','state_pref','source_page','submitted_at'], ',', '"', '\\');

while ($row = $st->fetch(PDO::FETCH_ASSOC)) {
  fputcsv($out, $row, ',', '"', '\\');
}
fclose($out);
