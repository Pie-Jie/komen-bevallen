<?php
session_start();
date_default_timezone_set('Europe/Brussels');
define("WWW_ROOT",dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR);

require_once WWW_ROOT . 'classes' . DIRECTORY_SEPARATOR . 'Config.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->run();