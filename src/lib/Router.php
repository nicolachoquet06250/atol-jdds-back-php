<?php


namespace Atol\jdds\back\lib;


use AltoRouter;
use DI\Container;

class Router
{
    private static ?AltoRouter $router = null;
    private array $constants = [];

    public static function getRouter() {
        if (is_null(static::$router)) {
            static::$router = new AltoRouter();
        }
        return static::$router;
    }

    public function __construct(
        private Container $container
    ) {}

    public function useConstant(string $constantName, mixed $constantValue) {
        $this->constants[$constantName] = $constantValue;
        return $this;
    }

    public function useController(string $ctrlClass) {
        $ctrlClass::{'use'}();
        return $this;
    }

    public function run() {
        static::getRouter()->setBasePath($this->constants['baseUrl']);
        static::getRouter()->match("{$this->constants['baseUrl']}/{$_GET['q']}", $_SERVER['REQUEST_METHOD'])['target']();
    }
}
