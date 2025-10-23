<?php
// bootstrap.php
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__); // loads .env in project root
$dotenv->safeLoad(); // won't error if a key is missing

// Timezone default
date_default_timezone_set($_ENV['APP_TIMEZONE'] ?? 'UTC');
