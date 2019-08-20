<?php
$CONF['IN_PRODUCTION'] = $_SERVER["SERVER_NAME"] == "localhost" ? 1 : 0;
$CONF['BOARD_URL'] = $CONF['IN_PRODUCTION'] == 1 ? htmlspecialchars("//{$_SERVER['HTTP_HOST']}/".explode("/", $_SERVER['REQUEST_URI'])[1], ENT_QUOTES, 'UTF-8') : htmlspecialchars("//".$_SERVER["SERVER_NAME"], ENT_QUOTES, 'UTF-8');
//https://www.php.net/manual/pt_BR/timezones.php
$CONF['DATE_TIMEZONE'] = "America/Recife";
//https://www.php.net/manual/pt_BR/ini.core.php#ini.default-charset
$CONF['DEFAULT_CHARSET'] = "UTF-8";
$CONF['SQL_DRIVER'] = 'mysql';
$CONF['SQL_HOST'] = 'localhost';
$CONF['SQL_DATABASE'] = 'priframe';
$CONF['SQL_USER'] = 'root';
$CONF['SQL_PASS'] = '';
$CONF['SQL_TBL_PREFIX'] = '';
$CONF['SQL_DEBUG'] = '0';
//https://www.php.net/manual/pt_BR/function.mysql-set-charset.php
$CONF['SQL_CHARSET'] = 'utf8';
//https://www.php.net/manual/pt_BR/function.setlocale.php
$CONF['LOCALE_CATEGORY'] = LC_ALL;
$CONF['LOCALE_STRING1'] = 'pt_BR';
$CONF['LOCALE_STRING2'] = 'pt_BR.utf-8';
$CONF['LOCALE_STRING3'] = 'pt_BR.utf-8';
$CONF['LOCALE_STRING4'] = 'portuguese';