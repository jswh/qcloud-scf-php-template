<?php
require('util.php');
require('get.php');
require('post.php');
$app = require_once('src/boot.php');
function main_handler($event, $context) {
    initQueryData($event);
    global $app;
    return $app->exec();
}
function initQueryData($event) {
    if ($event->httpMethod == 'POST') {
        $_POSTbody = json_decode($event->body, True);
        if ($_POSTbody) {
            foreach ($_POSTbody as $key => $value){
                $_POST[$key]=$value;
            }
        }
    }
    $pathes = explode('?', $event->path);
    $_SERVER['REQUEST_URI'] = current($pathes);
    $_SERVER['REQUEST_METHOD'] = $event->httpMethod;
}

?>
