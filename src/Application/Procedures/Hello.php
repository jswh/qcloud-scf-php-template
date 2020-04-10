<?php


namespace Application\Procedures;


use Application\Models\User;
use Routeless\Core\Application;
use Routeless\Core\Exceptions\HttpException;
use Routeless\Core\RPC\Controller;
use Firebase\JWT\JWT;
use EasyWeChat\Factory;
use Routeless\Services\Redis;

class Hello extends Controller
{
    public function world($name)
    {
        $r = Redis::get();
        $u = $r->set('test-hello', $name);
        return ['hello' => $u];
    }

}
