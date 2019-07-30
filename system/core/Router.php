<?php

namespace system\core;

/**
 * Description of Router
 *
 * @author Derex
 */
class Router {

    public static function rota($path, $arg) {
        $urlGet = @$_GET['url'];
        if ($urlGet == $path) {
            $arg();
            die();
        }
        $path = explode("/", $path);
        $urlGet = explode("/", @$_GET['url']);
        $isRoute = true;
        $param = [];
        if (count($path) == count($urlGet)) {
            foreach ($path as $key => $value) {
                if ($value == '?') {
                    $param[$key] = $urlGet[$key];
                } elseif ($urlGet[$key] != $value) {
                    $isRoute = false;
                    break;
                }
            }
            if ($isRoute) {
                $arg($param);
                exit(1);
            }
        }
    }

}
