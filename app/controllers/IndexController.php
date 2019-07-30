<?php

namespace app\controllers;

/**
 * Description of IndexController
 *
 * @author Derex
 */
use system\core\Controller;

class IndexController extends Controller {

    public function __construct() {
        $this->setView(new \system\core\MainView("index"));
    }

    public function executar() {
        $this->getView()->render(array("titulo" => "Home"));
    }

}
