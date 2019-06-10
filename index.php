<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/yii16/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);

$app = Yii::createWebApplication($config);

// add Zend Framework autoloader  (Zend 1.11.x)
Yii::import('application.vendor.*');
require "Zend/Loader/Autoloader.php";
Yii::registerAutoloader(array('Zend_Loader_Autoloader','autoload'), true);

$app->run();
