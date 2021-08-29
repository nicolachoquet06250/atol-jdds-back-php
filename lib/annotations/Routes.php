<?php


namespace Atol\jdds\back\lib\annotations;


use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class Routes
{
    public function __construct(
        private string $baseUrl,
        private array $params = [],
        private ?string $baseName = null
    ) {}

    public function getBaseUrl(): string {
        return $this->baseUrl;
    }

    public function getParams(): array {
        return $this->params;
    }

    public function getVerb(): string {
        return $this->verb;
    }

    public function getBaseName(): ?string {
        return $this->baseName;
    }
}