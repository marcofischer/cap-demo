<?php

define('APPDIR', dirname(dirname(__FILE__)));

define('CONFIGDIR', APPDIR . DIRECTORY_SEPARATOR . 'config');

$config = json_decode(file_get_contents(CONFIGDIR . DIRECTORY_SEPARATOR . 'config.json'));

$revision = @file_get_contents(APPDIR . DIRECTORY_SEPARATOR . 'revisions.log');


echo '<h1>' . $config->application . '</h1>';
echo '<pre>Revision: ' . $revision . '</pre>';