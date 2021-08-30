<?php

use Atol\jdds\back\lib\Router;
use DI\Container;

ini_set('display_errors', 1);

require __DIR__ . '/../vendor/autoload.php';

dump("https://atol-jdds.api.orange.nicolaschoquet.fr/{$_GET['q']}");

(new Router(new Container()))
    ->useConstant('baseUrl', 'https://atol-jdds.api.orange.nicolaschoquet.fr')
    ->useController('Atol\jdds\back\controllers\JddsController')
    ->useController('Atol\jdds\back\controllers\TypesController')
    ->useController('Atol\jdds\back\controllers\EnvironmentsController')
->run();
