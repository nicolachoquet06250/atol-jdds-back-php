<?php


namespace Atol\jdds\back\controllers;


use Atol\jdds\back\lib\annotations\Routes;
use Atol\jdds\back\lib\Controller;

#[Routes(
    baseUrl: '/environments',
    baseName: 'environments'
)]
class EnvironmentsController extends Controller
{
    public function get() {
        header('Content-Type: application/json');

        echo <<<JSON
            ["dev", "rec", "preprod", "prod"]
        JSON;

    }
}