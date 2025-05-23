<?php


namespace TestProject;

use TestProject\Engine as E;

if (version_compare(PHP_VERSION, '5.5.0', '<'))
    exit('Your PHP version is ' . PHP_VERSION . '. The script requires PHP 5.5 or higher.');
if (!extension_loaded('mbstring'))
    exit('The script requires "mbstring" PHP extension. Please install it.');


define('PROT', (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') ? 'https://' : 'http://');
define('ROOT_URL', PROT . $_SERVER['HTTP_HOST'] . str_replace('\\', '', dirname(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES))) . '/');
define('ROOT_PATH', __DIR__ . '/');

try
{
    require ROOT_PATH . 'Engine/Loader.php';
    E\Loader::getInstance()->init();
    $aParams = ['ctrl' => (!empty($_GET['p']) ? $_GET['p'] : 'blog'), 'act' => (!empty($_GET['a']) ? $_GET['a'] : 'index')];
    E\Router::run($aParams);
}
catch (\Exception $oE)
{
    echo $oE->getMessage();
}
