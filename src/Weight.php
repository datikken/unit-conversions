<?php

namespace Datikken\UnitConversions;

class Weight
{
    private float $kg;

    public static function fromKilograms(float $kg): self
    {
        return new static($kg);
    }
    /**
     * Weight constructor.
     * @param float $kg
     */
    public function __construct(float $kg)
    {
        $this->kg = $kg;
    }

    public function toLbs(): float
    {
        return $this->kg * 2.204623;
    }
}
