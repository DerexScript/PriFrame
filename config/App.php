<?php
namespace config;
class App {
    private $dateTimezone;
    private $defaultCharset;
    private $sqlDriver;
    private $sqlHost;
    private $sqlDatabase;
    private $sqlUser;
    private $sqlPass;
    private $sqlTblPrefix;
    private $sqlDebug;
    private $sqlCharset;
    private $localeCategory;
    private $localeString1;
    private $localeString2;
    private $localeString3;
    private $localeString4;

    public function __construct() {
        if (is_file(dirname( __FILE__ ).'/conf_global.php')) {
            require_once('./config/conf_global.php');
            $this->setDateTimezone($CONF['DATE_TIMEZONE']);
            $this->setDefaultCharset($CONF['DEFAULT_CHARSET']);
            $this->setSqlDriver($CONF['SQL_DRIVER']);
            $this->setSqlHost($CONF['SQL_HOST']);
            $this->setSqlDatabase($CONF['SQL_DATABASE']);
            $this->setSqlUser($CONF['SQL_USER']);
            $this->setSqlPass($CONF['SQL_PASS']);
            $this->setSqlTblPrefix($CONF['SQL_TBL_PREFIX']);
            $this->setSqlDebug($CONF['SQL_DEBUG']);
            $this->setSqlCharset($CONF['SQL_CHARSET']);
            $this->setLocaleCategory($CONF['LOCALE_CATEGORY']);
            $this->setLocaleString1($CONF['LOCALE_STRING1']);
            $this->setLocaleString2($CONF['LOCALE_STRING2']);
            $this->setLocaleString3($CONF['LOCALE_STRING3']);
            $this->setLocaleString4($CONF['LOCALE_STRING4']);
        }else{
            echo "Erro em obter configurações!";
        }
    }

    //Getters
    public function getDateTimezone() {
        return $this->dateTimezone;
    }
    public function getDefaultCharset() {
        return $this->defaultCharset;
    }
    public function getSqlDriver() {
        return $this->sqlDriver;
    }
    public function getSqlHost() {
        return $this->sqlHost;
    }
    public function getSqlDatabase() {
        return $this->sqlDatabase;
    }
    public function getSqlUser() {
        return $this->sqlUser;
    }
    public function getSqlPass() {
        return $this->sqlPass;
    }
    public function getSqlTblPrefix() {
        return $this->sqlTblPrefix;
    }
    public function getSqlDebug() {
        return $this->sqlDebug;
    }
    public function getSqlCharset() {
        return $this->sqlCharset;
    }
    public function getLocaleCategory() {
        return $this->localeCategory;
    }
    public function getLocaleString1() {
        return $this->localeString1;
    }
    public function getLocaleString2() {
        return $this->localeString2;
    }
    public function getLocaleString3() {
        return $this->localeString3;
    }
    public function getLocaleString4() {
        return $this->localeString4;
    }

    //Setters
    public function setDateTimezone($dateTimezone) {
        $this->dateTimezone = $dateTimezone;
    }
    public function setDefaultCharset($defaultCharset) {
        $this->defaultCharset = $defaultCharset;
    }
    public function setSqlDriver($sqlDriver) {
        $this->sqlDriver = $sqlDriver;
    }
    public function setSqlHost($sqlHost) {
        $this->sqlHost = $sqlHost;
    }
    public function setSqlDatabase($sqlDatabase) {
        $this->sqlDatabase = $sqlDatabase;
    }
    public function setSqlUser($sqlUser) {
        $this->sqlUser = $sqlUser;
    }
    public function setSqlPass($sqlPass) {
        $this->sqlPass = $sqlPass;
    }
    public function setSqlTblPrefix($sqlTblPrefix) {
        $this->sqlTblPrefix = $sqlTblPrefix;
    }
    public function setSqlDebug($sqlDebug) {
        $this->sqlDebug = $sqlDebug;
    }
    public function setSqlCharset($sqlCharset) {
        $this->sqlCharset = $sqlCharset;
    }
    public function setLocaleCategory($localeCategory) {
        $this->localeCategory = $localeCategory;
    }
    public function setLocaleString1($localeString1) {
        $this->localeString1 = $localeString1;
    }
    public function setLocaleString2($localeString2) {
        $this->localeString2 = $localeString2;
    }
    public function setLocaleString3($localeString3) {
        $this->localeString3 = $localeString3;
    }
    public function setLocaleString4($localeString4) {
        $this->localeString4 = $localeString4;
    }

    //Methods
    public function initSettings() {
        setlocale($this->getLocaleCategory(), $this->getLocaleString1(), $this->getLocaleString2(), $this->getLocaleString3(), $this->getLocaleString4());
        date_default_timezone_set($this->getDateTimezone());
        ini_set('default_charset', $this->getDefaultCharset());
    }
}
