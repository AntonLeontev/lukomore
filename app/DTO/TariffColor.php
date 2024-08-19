<?php

namespace App\DTO;

readonly class TariffColor
{
    public function __construct(public string $primary, public string $secondary) {}

    public static function fromConfig(array $config): static
    {
        return new static($config['primary'], $config['secondary']);
    }
}
