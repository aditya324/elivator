<?php
// /api/send-lead.php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

require_once __DIR__ . '/db.php';

function jexit(int $code, array $payload): void {
  http_response_code($code);
  echo json_encode($payload, JSON_UNESCAPED_UNICODE);
  exit;
}

try {
  if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    jexit(405, ['ok' => false, 'error' => 'Method Not Allowed']);
  }

  $raw  = file_get_contents('php://input') ?: '';
  $data = json_decode($raw, true, 512, JSON_THROW_ON_ERROR);

  // common fields
  $firstName   = trim((string)($data['firstName']   ?? ''));
  $lastName    = trim((string)($data['lastName']    ?? ''));
  $phone       = trim((string)($data['phone']       ?? ''));
  $email       = trim((string)($data['email']       ?? ''));
  $city        = trim((string)($data['city']        ?? ''));          // NEW (optional)
  $application = trim((string)($data['application'] ?? ''));          // optional for mini form
  $floors      = trim((string)($data['floors']      ?? ''));          // optional for mini form
  $product     = trim((string)($data['product']     ?? ''));          // optional
  $statePref   = trim((string)($data['statePref']   ?? ''));          // optional
  $message     = trim((string)($data['message']     ?? ''));          // optional
  $sourcePage  = trim((string)($data['sourcePage']  ?? 'inline-quote'));
  $submittedAt = trim((string)($data['submittedAt'] ?? ''));

  // minimal validation that works for BOTH forms:
  $errors = [];
  if ($firstName === '')                                   $errors['firstName'] = 'Required';
  if ($phone === '' || !preg_match('/^[0-9+() \-]{6,}$/', $phone)) $errors['phone'] = 'Invalid';
  if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] = 'Invalid';
  // application/floors NO LONGER required here

  // normalize submittedAt
  $submittedDt = null;
  if ($submittedAt !== '') {
    try { $submittedDt = (new DateTimeImmutable($submittedAt))->format('Y-m-d H:i:s'); } catch (Throwable $e) {}
  }
  if ($submittedDt === null) {
    $submittedDt = (new DateTimeImmutable('now', new DateTimeZone('Asia/Kolkata')))->format('Y-m-d H:i:s');
  }

  if ($errors) jexit(422, ['ok' => false, 'errors' => $errors]);

  // IP/UA
  $ipRaw = $_SERVER['REMOTE_ADDR'] ?? null;
  $ua    = $_SERVER['HTTP_USER_AGENT'] ?? null;
  $ipBin = null;
  if ($ipRaw) {
    $packed = @inet_pton($ipRaw);
    if ($packed !== false) $ipBin = $packed;
  }

  $pdo = db();
  $sql = "INSERT INTO leads
            (first_name, last_name, phone, email, city, application, floors, product, state_pref, message, source_page, submitted_at, ip, ua)
          VALUES
            (:first_name, :last_name, :phone, :email, :city, :application, :floors, :product, :state_pref, :message, :source_page, :submitted_at, :ip, :ua)";
  $st = $pdo->prepare($sql);
  $st->bindValue(':first_name',   $firstName);
  $st->bindValue(':last_name',    $lastName !== '' ? $lastName : null);
  $st->bindValue(':phone',        $phone);
  $st->bindValue(':email',        $email);
  $st->bindValue(':city',         $city !== '' ? $city : null);
  $st->bindValue(':application',  $application !== '' ? $application : null);
  $st->bindValue(':floors',       $floors !== '' ? $floors : null);
  $st->bindValue(':product',      $product !== '' ? $product : null);
  $st->bindValue(':state_pref',   $statePref !== '' ? $statePref : null);
  $st->bindValue(':message',      $message !== '' ? $message : null);
  $st->bindValue(':source_page',  $sourcePage);
  $st->bindValue(':submitted_at', $submittedDt);
  if ($ipBin === null) { $st->bindValue(':ip', null, PDO::PARAM_NULL); } else { $st->bindValue(':ip', $ipBin, PDO::PARAM_LOB); }
  $st->bindValue(':ua',           $ua !== '' ? $ua : null);

  $st->execute();
  jexit(200, ['ok' => true, 'id' => (int)$pdo->lastInsertId()]);
} catch (Throwable $e) {
  jexit(500, ['ok' => false, 'error' => 'Server error']);
}
