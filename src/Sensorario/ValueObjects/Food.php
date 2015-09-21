<?php

namespace Sensorario\ValueObjects;

use Sensorario\ValueObject\ValueObject;

final class Food extends ValueObject
{
    public static function allowed()
    {
        return [
            'carbohydrates',
            'proteins',
            'fats',
            'minerals',
            'vitamins',
            'phytochemicals',
            'fibers',
        ];
    }
}
