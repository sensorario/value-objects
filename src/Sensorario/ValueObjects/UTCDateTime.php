<?php

namespace Sensorario\ValueObjects;

use DateTimeZone;
use Sensorario\ValueObject\ValueObject;

final class UTCDateTime extends ValueObject
{
    public static function mandatory()
    {
        return [
            'datetime',
            'timezone',
        ];
    }

    public function datetime()
    {
        $this->get('datetime')
            ->setTimezone(
                new DateTimeZone(
                    $this->get('timezone')
                )
            );

        return $this->get('datetime')
            ->format("Y-m-d H:i:s");
    }

    public function utcDatetime()
    {
        $this->get('datetime')
            ->setTimezone(
                new DateTimeZone('UTC')
            );

        return $this->get('datetime')
            ->format("Y-m-d H:i:s");
    }
}
