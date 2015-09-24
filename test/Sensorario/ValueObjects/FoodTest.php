<?php

namespace Sensorario\ValueObjects;

use PHPUnit_Framework_TestCase;

final class FoodTest extends PHPUnit_Framework_TestCase
{
    public function testFoodIsComposedByEightGroupsOfNutrients()
    {
        Food::box([
            'carbohydrates' => 42,
            'proteins' => 42,
            'fats' => 42,
            'minerals' => 42,
            'vitamins' => 42,
            'phytochemicals' => 42,
            'fibers' => 42,
        ]);
    }
}
