<?php

use Atol\jdds\back\lib\Router;
use DI\Container;
use Symfony\Component\Dotenv\Dotenv;

ini_set('display_errors', 1);

require __DIR__ . '/../vendor/autoload.php';

(new Dotenv())->load(__DIR__ . '/../.env');

(new Router(new Container()))
    ->useConstant('baseUrl', 'https://atol-jdds.api.orange.nicolaschoquet.fr')
    ->useController('Atol\jdds\back\controllers\JddsController')
    ->useController('Atol\jdds\back\controllers\TypesController')
    ->useController('Atol\jdds\back\controllers\EnvironmentsController')
->run();
