<?php

namespace system\core;

/**
 * Description of Controller
 *
 * @author Derex
 */
class Controller {

    private $view;
    private $model;

    public function getView() {
        return $this->view;
    }

    public function getModel() {
        return $this->model;
    }

    public function setView($view) {
        $this->view = $view;
    }

    public function setModel($model) {
        $this->model = $model;
    }

}
