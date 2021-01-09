<?php

namespace Datikken\UnitConversions\Tests;

use Datikken\UnitConversions\Temperature;
use PHPUnit\Framework\TestCase;

class TemperatureTest extends TestCase
{
    /** @test */
    public function celsius_to_fahrenhiet()
    {
        $tmp = Temperature::fromCelcius(100)->toFahrenheit();

        $this->assertEquals(212, $tmp);
    }
}
