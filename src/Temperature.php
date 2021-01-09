<?php


namespace Datikken\UnitConversions;


class Temperature
{
    private float $celcius;

    public static function fromCelcius(float $celcius): self
    {
        return new static($celcius);
    }
    /**
     * Temperature constructor.
     * @param float $celcius
     */
    public function __construct(float $celcius)
    {
        $this-> celcius = $celcius;
    }

    public function toFahrenheit(): float
    {
        return ($this->celcius * 1.8) + 32;
    }
}
