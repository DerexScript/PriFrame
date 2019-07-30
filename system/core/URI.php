<?php

/*
 * 
 * Parses URIs and determines controllers
 * 
 */

namespace system\core;

class URI {

    public static function executar() {
        $url = isset($_GET['url']) ? explode("/", $_GET['url'])[0] : 'index';
        $url = ucfirst($url);
        $url .= "Controller";
        if (file_exists("./app/controllers/{$url}.php")) {
            $className = "app\controllers\\{$url}";
            $controler = new $className();
            $controler->executar();
        } else {
            exit("Não existe esse controlador");
        }
    }

}
