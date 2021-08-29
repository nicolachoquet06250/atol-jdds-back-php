<?php


namespace Atol\jdds\back\lib;


use Atol\jdds\back\lib\annotations\Route;
use Atol\jdds\back\lib\annotations\Routes;
use ReflectionClass;
use ReflectionMethod;

class Controller
{
    public static function use() {
        $ref = new ReflectionClass(static::class);
        $methods = array_reduce(
            $ref->getMethods(),
            function(array $r, mixed $c) {
                return !in_array($c->getName(), ['__construct', 'use', 'getRouter']) ? [...$r, $c] : $r;
            }, []
        );

        $ctrlRoute = $ref->getAttributes(Routes::class)[0] ?? null;

        $baseUrl = '';
        $baseParams = [];
        $baseName = strtolower(str_replace('Controller', '', static::class));

        if (!is_null($ctrlRoute)) {
            $attr = $ctrlRoute->newInstance();

            $baseUrl = $attr->getBaseUrl();
            $baseParams = $attr->getParams();
            $baseName = $attr->getBaseName();
        }

        /**
         * @var ReflectionMethod $method
         */
        foreach ($methods as $method) {
            if ($method->isPublic() && !$method->isStatic()) {
                $ctrlMethodRoute = $method->getAttributes(Route::class)[0] ?? null;

                $url = '';
                $params = [];
                $name = str_replace('_', '-', strtolower($method->getName()));
                $verb = 'get';

                if (in_array($method->getName(), ['get', 'head', 'post', 'put', 'delete', 'connect', 'options', 'trace', 'patch'])) {
                    $verb = strtolower($method->getName());
                }

                if (!is_null($ctrlMethodRoute)) {
                    $attr = $ctrlMethodRoute->newInstance();

                    $url = $attr->getBaseUrl();
                    $params = $attr->getParams();
                    $verb = $attr->getVerb();
                    $name = $attr->getName();
                }

                $params = [...$baseParams, $params];

                Router::getRouter()->map(strtoupper($verb), $baseUrl . $url, function (...$args) use ($method) {
                    $ctrlClass = static::class;
                    $ctrl = new $ctrlClass();
                    return $ctrl->{$method->getName()}(...$args);
                }, $baseName . '-' . $name);
            }
        }
    }
}