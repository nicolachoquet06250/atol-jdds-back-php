<?php

use Atol\jdds\back\lib\Router;
use DI\Container;
use Symfony\Component\Dotenv\Dotenv;

require __DIR__ . '/../vendor/autoload.php';

/**
 *  An example CORS-compliant method.  It will allow any GET, POST, or OPTIONS requests from any
 *  origin.
 *
 *  In a production environment, you probably want to be more restrictive, but this gives you
 *  the general idea of what is involved.  For the nitty-gritty low-down, read:
 *
 *  - https://developer.mozilla.org/en/HTTP_access_control
 *  - https://fetch.spec.whatwg.org/#http-cors-protocol
 *
 */
function cors() {

    // Allow from any origin
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST');
    header("Access-Control-Allow-Headers: X-Requested-With");

    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            // may also be using PUT, PATCH, HEAD etc
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

        exit(0);
    }
}

cors();

(new Dotenv())->load(__DIR__ . '/../.env');

(new Router(new Container()))
    ->useConstant('baseUrl', $_ENV['BASE_URL'])
    ->useController('Atol\jdds\back\controllers\JddsController')
    ->useController('Atol\jdds\back\controllers\TypesController')
    ->useController('Atol\jdds\back\controllers\EnvironmentsController')
->run();
