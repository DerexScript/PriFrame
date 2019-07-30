<?php

namespace app\controllers;

/**
 * Description of ContactController
 *
 * @author Derex
 */
use system\core\Controller;

class ContactController extends Controller {

    public function __construct() {
        $this->view = new \system\core\MainView("contact");
    }

    public function executar() {
        \system\core\Router::rota('contact', function() {
            $this->view = new \system\core\MainView("contact");
            $this->view->render(array('titulo' => 'contact', "myPage" => "contact"));
        });
    }

}
