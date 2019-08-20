<?php

namespace app\Controllers;

/**
 * Description of IndexController
 *
 * @author Derex
 */

class Index {
	public function executar() {
		\system\routes\Router::GET("index", function($res) {
			$this->view = new \system\MainView("index");
            $this->view->render(array('titulo' => 'Index', "myPage" => "Index"));
		});
	}
	
}