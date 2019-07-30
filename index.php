<?php

require 'vendor/autoload.php';

function autoload($pClassName) {
	require_once(__DIR__ . "/" . $pClassName . ".php");
}

spl_autoload_register("autoload");
\system\core\URI::executar();
