<?php

namespace system\routes;

class Router {
	
	public static $resP;

	public static function GET(string $str = "", $arg) {
		if($_SERVER['REQUEST_METHOD'] == "GET"){
			self::route($str, function($res){
				if (is_array($res) && count($res) > 0){
					foreach ($res as $key => $value) {
						echo "Key: ".$key.", Value: ".$value."<br>";
					}
					self::$resP = $res;
				}
			});
			if(!is_null(self::$resP)){
				$arg(self::$resP);
				exit(0);
			}else{
				$arg(array());
				exit(1);
			}
		}else{
			$url = $str;
			http_response_code(400);
			include('./config/conf_global.php');
			require_once("./app/Views/templates/400.php");
		}
	}

	private static function route($path, $arg){
		$urlGet = @$_GET['url'];
		if ($urlGet == $path) {
			$arg(array());
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
			}
		}
	}
}