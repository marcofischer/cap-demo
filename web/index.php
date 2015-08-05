<?php

define('APPDIR', dirname(dirname(__FILE__)));

define('CONFIGDIR', APPDIR . DIRECTORY_SEPARATOR . 'config');

$config = json_decode(file_get_contents(CONFIGDIR . DIRECTORY_SEPARATOR . 'config.json'));

$revision = @file_get_contents(APPDIR . DIRECTORY_SEPARATOR . 'REVISION');

header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");


echo '<h1>' . $config->application . '</h1>';
echo '<pre>Revision: ' . $revision . PHP_EOL
    . 'Server: ' . $_SERVER['SERVER_ADDR'] . PHP_EOL
    . 'Alarrrrrm' .'</pre>';