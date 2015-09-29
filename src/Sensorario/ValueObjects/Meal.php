<?php

namespace Sensorario\ValueObjects;

use Sensorario\ValueObject\ValueObject;

final class Meal extends ValueObject
{
    public static function allowed()
    {
        return [
            'kind',
        ];
    }

    public static function allowedValues()
    {
        return [
            'kind' => [
                'breakfast',
                'snack',
                'lunch',
                'dinner',
            ],
        ];
    }
}
