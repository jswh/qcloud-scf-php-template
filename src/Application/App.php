<?php
namespace Application;

use Routeless\Core\Application;
use Routeless\Core\RPC\Request;
use Routeless\Core\RPC\Response;
use Routeless\Core\RPC\RPC;

class App extends Application {
    public function exec()
    {
        $request = Request::capture();
        $response = new Response();
        $response->header('Content-Type', 'application/json');
        try {

            (new RPC($this->config->get('route')))->handle($request, $response);

            return [
                "isBase64Encoded" => false,
                "statusCode" =>  200,
                "headers" =>  $response->headers,
                "body" =>  $response->body
            ];

        } catch (\Throwable $e) {
            return ['code' => $e->getCode(), 'msg' => $e->getMessage()];
        }
    }
}
