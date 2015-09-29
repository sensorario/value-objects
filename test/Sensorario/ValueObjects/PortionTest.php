<?php

namespace Sensorario\ValueObjects;

use PHPUnit_Framework_TestCase;

final class PortionTest extends PHPUnit_Framework_TestCase
{
    public function test()
    {
        Portion::box([
            'quantity' => 1,
            'unit_of_measure' => 'liter',
            'food' => 'water',
        ]);
    }
}
