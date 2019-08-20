<?php
namespace system\routes;
class Web {
    public static function executar() {
        $url = isset($_GET['url']) ? explode("/", $_GET['url'])[0] : 'index';
        $url = ucfirst($url);
        if (file_exists("./app/Controllers/{$url}.php")) {
            $className = "app\Controllers\\{$url}";
            $controler = new $className();
            $controler->executar();
        } else {
            http_response_code(404);
            include('./config/conf_global.php');
            require_once("./app/Views/templates/404.php");
            exit();
        }
    }
}