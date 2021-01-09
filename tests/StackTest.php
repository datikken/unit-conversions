<?php

namespace Datikken\UnitConversions\Tests;

use Datikken\UnitConversions\Weight;
use PHPUnit\Framework\TestCase;

final class StackTest extends TestCase
{
    /** @test */
    public function can_convert_kilograms_to_lbs(): void
    {
        $lbs = Weight::fromKilograms(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }
}
