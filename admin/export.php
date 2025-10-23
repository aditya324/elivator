<?php
require_once __DIR__ . '/_auth.php';
require_login();
require_once __DIR__ . '/../api/db.php';

$pdo = db();
$q = trim($_GET['q'] ?? '');

$where = '';
$params = [];
if ($q !== '') {
    $where = "WHERE (first_name LIKE :q OR last_name LIKE :q OR email LIKE :q OR phone LIKE :q OR application LIKE :q OR product LIKE :q OR source_page LIKE :q)";
    $params[':q'] = "%{$q}%";
}

$sql = "SELECT id, first_name, last_name, phone, email,source_page, application, floors, product, state_pref, submitted_at, ip_address, user_agent
        FROM leads {$where} ORDER BY id DESC";
$st = $pdo->prepare($sql);
$st->execute($params);
$rows = $st->fetchAll();

// Send CSV headers
$filename = 'leads_' . date('Ymd_His') . '.csv';
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename="' . $filename . '"');

$out = fopen('php://output', 'w');

// Header row
fputcsv($out, ['ID', 'First Name', 'Last Name', 'Phone',  'Email', 'source_page', 'Application', 'Floors', 'Product', 'State Pref', 'Submitted At', 'IP', 'User Agent']);

// Data rows
foreach ($rows as $r) {
    fputcsv($out, [
        $r['id'],
        $r['first_name'],
        $r['last_name'],
        $r['phone'],
        $r['email'],
        $r['source_page'],
        $r['application'],
        $r['floors'],
        $r['product'],
        $r['state_pref'],
        $r['submitted_at'],
        $r['ip_address'],
        $r['user_agent'],
    ]);
}

fclose($out);
exit;
