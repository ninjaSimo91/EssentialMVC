<?php

// Autoload
require __DIR__ . '/../vendor/autoload.php';

// Enviroment Configurations
\EssentialMVC\Env::addVarsByFile(dirname(__DIR__) . '/.env');
date_default_timezone_set(env('APP_TIMEZONE', 'UTC'));

// Create & Run App
$app = (new EssentialMVC\App(dirname(__DIR__)));
$app->run();
