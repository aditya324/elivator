<?php
declare(strict_types=1);
require_once __DIR__ . '/_auth.php';
require_once __DIR__ . '../api/config.php';
admin_logout();
header('Location: /admin/login.php');
exit;
