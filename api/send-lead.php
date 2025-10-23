<?php
header('Content-Type: application/json');
header('Cache-Control: no-store');
require_once __DIR__ . '/db.php';

try {
  if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Method Not Allowed']);
    exit;
  }

  $raw = file_get_contents('php://input');
  $data = json_decode($raw, true);
  if (!is_array($data)) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Invalid JSON']);
    exit;
  }

  $t = fn($k) => isset($data[$k]) ? trim((string)$data[$k]) : '';

  $firstName   = $t('firstName');
  $lastName    = $t('lastName');
  $phone       = $t('phone');
  $email       = $t('email');
  $application = $t('application');
  $floors      = $t('floors');
  $product     = $t('product');
  $statePref   = $t('statePref');
  $message     = $t('message');
  $sourcePage  = strtolower($t('sourcePage')) ?: 'unknown';   // 👈 added
  $submittedAt = $t('submittedAt');

  $errors = [];
  if ($firstName === '')                              $errors['firstName']   = 'Required';
  if ($phone === '')                                  $errors['phone']       = 'Required';
  if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL))
    $errors['email']       = 'Invalid';
  if ($application === '')                            $errors['application'] = 'Required';
  if ($floors === '')                                 $errors['floors']      = 'Required';

  if ($errors) {
    http_response_code(422);
    echo json_encode(['ok' => false, 'errors' => $errors]);
    exit;
  }

  try {
    $dt = $submittedAt ? new DateTime($submittedAt) : new DateTime('now');
  } catch (Throwable $e) {
    $dt = new DateTime('now');
  }
  $submitted_at_sql = $dt->format('Y-m-d H:i:s');

  $ua = $_SERVER['HTTP_USER_AGENT'] ?? null;
  $ip = $_SERVER['REMOTE_ADDR'] ?? null;

  $pdo = db();
  $sql = "INSERT INTO leads
          (first_name, last_name, phone, email, source_page, application, floors, product, state_pref, message, submitted_at, user_agent, ip_address, raw_json)
          VALUES
          (:first_name, :last_name, :phone, :email, :source_page, :application, :floors, :product, :state_pref, :message, :submitted_at, :user_agent, :ip_address, :raw_json)";
  $st = $pdo->prepare($sql);
  $st->execute([
    ':first_name'   => $firstName,
    ':last_name'    => $lastName ?: null,
    ':phone'        => $phone,
    ':email'        => $email,
    ':source_page'  => $sourcePage,   // 👈 new param
    ':application'  => $application,
    ':floors'       => $floors,
    ':product'      => $product ?: null,
    ':state_pref'   => $statePref ?: null,
    ':message'      => $message ?: null,
    ':submitted_at' => $submitted_at_sql,
    ':user_agent'   => $ua,
    ':ip_address'   => $ip,
    ':raw_json'     => $raw,
  ]);

  echo json_encode(['ok' => true, 'id' => (int)$pdo->lastInsertId()]);
} catch (Throwable $e) {
  http_response_code(500);
  echo json_encode(['ok' => false, 'error' => 'Server error']);
}
