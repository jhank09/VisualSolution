<?php

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
// set a constant that holds the project's "application" folder, like "/var/www/application".
define('APP', ROOT . 'application' . DIRECTORY_SEPARATOR);

define('PUBLIC_FOLDER',ROOT.'public'.DIRECTORY_SEPARATOR);

define('UPLOADS_FOLDER',PUBLIC_FOLDER.'uploads'.DIRECTORY_SEPARATOR);

// This is the auto-loader for Composer-dependencies (to load tools into your project).
require ROOT . 'vendor/autoload.php';

// load application config (error reporting etc.)
require APP . 'config/config.php';

// load application class
use Mini\Core\Application;

// start the application
$app = new Application();
