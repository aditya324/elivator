<?php
require_once __DIR__ . '/../api/db.php';
$pdo = db();

$username = 'aditya';              // change if you like
$email    = 'you@example.com';     // optional
$plain    = 'vertivo123';        // set a strong temp password

$hash = password_hash($plain, PASSWORD_DEFAULT);
$st = $pdo->prepare(
  "INSERT INTO admins (username,email,password_hash,role,is_active) VALUES (?,?,?,?,1)"
);
$st->execute([$username, $email, $hash, 'super']);
echo "Seeded admin: $username / $plain\n";
