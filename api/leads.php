<?php

declare(strict_types=1);

require_once __DIR__ . '/db.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'message' => 'Method not allowed']);
    exit;
}

$data = json_decode(file_get_contents('php://input'), true);

if (!is_array($data)) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'message' => 'Invalid JSON']);
    exit;
}

/**
 * REQUIRED FIELDS (align with frontend reality)
 */
$required = ['firstName', 'phone', 'email', 'city'];
foreach ($required as $f) {
    if (empty($data[$f])) {
        http_response_code(422);
        echo json_encode(['ok' => false, 'message' => "$f is required"]);
        exit;
    }
}

/**
 * SOURCE PAGE (clean & reliable)
 */
$source_page =
    $data['source_page']
    ?? parse_url($_SERVER['HTTP_REFERER'] ?? '', PHP_URL_PATH)
    ?? 'unknown';

try {
    $pdo = db();

    $stmt = $pdo->prepare("
        INSERT INTO leads
        (first_name, last_name, phone, email, city,application,floors , product, source_page)
        VALUES (?, ?, ?, ?, ?, ?, ?,?,?)
    ");

   $stmt->execute([
    trim($data['firstName']),
    trim($data['lastName'] ?? ''),
    trim($data['phone']),
    trim($data['email']),
    trim($data['city']),
    trim($data['application'] ?? ''),
    trim($data['floors'] ?? ''),
    trim($data['product'] ?? ''),
    $source_page,
]);


    echo json_encode(['ok' => true]);
} catch (Throwable $e) {
    http_response_code(500);
    echo json_encode([
        'ok' => false,
        'message' => 'Server error',
        // for debugging only:
        'debug' => $e->getMessage()
    ]);
}
