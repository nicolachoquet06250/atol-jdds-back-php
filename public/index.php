<?php

use Atol\jdds\back\lib\Router;
use DI\Container;
use Symfony\Component\Dotenv\Dotenv;

require __DIR__ . '/../vendor/autoload.php';

(new Dotenv())->load(__DIR__ . '/../.env');

(new Router(new Container()))
    ->useConstant('baseUrl', $_ENV['BASE_URL'])
    ->useController('Atol\jdds\back\controllers\JddsController')
    ->useController('Atol\jdds\back\controllers\TypesController')
    ->useController('Atol\jdds\back\controllers\EnvironmentsController')
->run();
