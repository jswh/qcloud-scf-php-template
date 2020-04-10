<?php

require __DIR__ . "/../vendor/autoload.php";
define('CFG_PATH', realpath(__DIR__ . '/../config'));

use Application\App;
use Routeless\Services\Cfg;


$app = new App(CFG_PATH);
\Routeless\Services\DB::boot(Cfg::get('database.' . env('DB_NAME')));
\Routeless\Services\Redis::boot(Cfg::get('database.redis'));


return $app;

