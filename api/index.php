<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

error_reporting(E_ALL);
ini_set('display_errors', '1');

try {
    require __DIR__ . '/../vendor/autoload.php';

    $app = require_once __DIR__ . '/../bootstrap/app.php';

    $app->handleRequest(Request::capture());

} catch (\Throwable $e) {

    http_response_code(500);

    echo '<pre style="white-space: pre-wrap; font-family: monospace; padding: 30px;">';
    echo "LARAVEL ERROR\n\n";
    echo 'Message: ' . $e->getMessage() . "\n\n";
    echo 'File: ' . $e->getFile() . "\n";
    echo 'Line: ' . $e->getLine() . "\n\n";
    echo "Stack Trace:\n";
    echo $e->getTraceAsString();
    echo '</pre>';
}
