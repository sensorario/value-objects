<?php

namespace Sensorario\ValueObjects;

use Sensorario\ValueObject\ValueObject;

final class Portion extends ValueObject
{
    public static function allowed()
    {
        return [
            'quantity',
            'unit_of_measure',
            'food',
        ];
    }
}
