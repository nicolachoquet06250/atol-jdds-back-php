<?php


namespace Atol\jdds\back\controllers;


use Atol\jdds\back\lib\annotations\Routes;
use Atol\jdds\back\lib\Controller;

#[Routes(
    baseUrl: '/types',
    baseName: 'types'
)]
class TypesController extends Controller
{
    public function get() {
        header('Content-Type: application/json');

        echo <<<JSON
            ["rtc", "res", "pro", "sosh"]
        JSON;

    }
}