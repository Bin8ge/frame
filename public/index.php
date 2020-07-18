<?php
require_once '../vendor/autoload.php';

use LaravelStar\Foundation\Application;

$app = new Application($_ENV['APP_BASE_PATH'] ?? dirname(__DIR__));

// 处理http请求的
$app->singleton(
    \LaravelStar\Contracts\Http\Kernel::class,
    \App\Http\Kernel::class
);

$kernel = $app->make(\LaravelStar\Contracts\Http\Kernel::class, [$app]);

$response = $kernel->handle(
    $request = \LaravelStar\Request\Request::capture()
);



