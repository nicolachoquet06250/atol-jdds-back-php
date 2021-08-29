<?php


namespace Atol\jdds\back\lib\annotations;


use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
class Route
{
    public function __construct(
        private string $url,
        private array $params = [],
        private ?string $name = null,
        private string $verb = 'get'
    ) {}

    public function getUrl(): string {
        return $this->url;
    }

    public function getParams(): array {
        return $this->params;
    }

    public function getName(): ?string {
        return $this->name;
    }

    public function getVerb(): string {
        return $this->verb;
    }
}