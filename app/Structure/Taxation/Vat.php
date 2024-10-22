<?php

namespace App\Structure\Taxation;

class Vat
{
    public function __construct(public float|int $percent, public string $label, public bool $isReduced = false)
    {
    }
}
