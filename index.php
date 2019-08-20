<?php
require_once("./vendor/autoload.php");
$c = new config\App();
$c->initSettings();
\system\routes\Web::executar();
