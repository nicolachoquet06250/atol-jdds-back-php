<?php

use Atol\jdds\back\lib\Router;
use DI\Container;

ini_set('display_errors', 1);

require __DIR__ . '/../vendor/autoload.php';

(new Router(new Container()))
    ->useConstant('baseUrl', 'http://atol-jdds.api.localhost:8000')
    ->useController('Atol\jdds\back\controllers\JddsController')
    ->useController('Atol\jdds\back\controllers\TypesController')
    ->useController('Atol\jdds\back\controllers\EnvironmentsController')
->run();