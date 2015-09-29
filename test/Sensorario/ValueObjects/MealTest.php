<?php

namespace Sensorario\ValueObjects;

use PHPUnit_Framework_TestCase;

final class MealTest extends PHPUnit_Framework_TestCase
{
    public function testCreation()
    {
        $expectedValues = [
            'kind' => [
                'breakfast',
                'snack',
                'lunch',
                'dinner',
            ],
        ];

        $this->assertEquals(
            $expectedValues,
            Meal::allowedValues()
        );
    }
}
