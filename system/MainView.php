<?php

namespace system;

/**
 * Description of MainView
 *
 * @author Derex
 */
class MainView {

    private $fileName;
    private $header;
    private $footer;
    private $menuItems;

    public function __construct($fileName, $header = "header", $footer = "footer") {
        $this->setMenuItems(array("index"));
        $this->setFileName($fileName);
        $this->setHeader($header);
        $this->setFooter($footer);
    }

    public function getFileName() {
        return $this->fileName;
    }

    public function getHeader() {
        return $this->header;
    }

    public function getFooter() {
        return $this->footer;
    }

    public function getMenuItems() {
        return $this->menuItems;
    }

    public function setFileName($fileName) {
        $this->fileName = $fileName;
    }

    public function setHeader($header) {
        $this->header = $header;
    }

    public function setFooter($footer) {
        $this->footer = $footer;
    }

    public function setMenuItems($menuItems) {
        $this->menuItems = $menuItems;
    }

    public function render(array $arr = []) {
        if (file_exists("./app/views/templates/" . $this->getHeader() . ".php")) {
            require_once("./app/views/templates/" . $this->getHeader() . ".php");
        } else {
            exit("Erro ao renderizar view: View {$this->getHeader()}, n\u{E3}o encontrada!");
        }

        if (file_exists("./app/views/" . $this->getFileName() . ".php")) {
            require_once("./app/views/" . $this->getFileName() . ".php");
        } else {
            exit("Erro ao renderizar view: View {$this->getFileName()}, n\u{E3}o encontrada!");
        }

        if (file_exists("./app/views/templates/" . $this->getFooter() . ".php")) {
            require_once("./app/views/templates/" . $this->getFooter() . ".php");
        } else {
            exit("Erro ao renderizar view: View {$this->getFooter()}, n\u{E3}o encontrada!");
        }
    }

}
