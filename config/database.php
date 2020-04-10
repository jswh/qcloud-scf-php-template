<?php
return [
    'mysql' => [
        'driver' => 'mysql',
        'host' => env('DB_HOST', '127.0.0.1'),
        'port' => env('DB_PORT', '3306'),
        'database' => env('DB_DATABASE', 'defer'),
        'username' => env('DB_USERNAME', 'jswh'),
        'password' => env('DB_PASSWORD', 'jswh'),
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'strict' => false,
        'engine' => null,
    ],
    'sqlite' => [
        'driver' => 'sqlite',
        'database' => '/home/jswh/Codes/data/test.sqlite'
    ],
    'redis' => [
        'host' => env('REDIS_HOST', '127.0.0.1'),
        'port' => env('REDIS_PORT', '6379'),
        'secret' => env('REDIS_SECRET')
    ],
];
