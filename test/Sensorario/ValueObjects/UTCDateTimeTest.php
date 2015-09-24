<?php

namespace Sensorario\ValueObjects;

use DateTime;
use PHPUnit_Framework_TestCase;

final class UTCDateTimeTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->dateTime = new DateTime(
            '1982-09-10T17:12:25P'
        );
    }

    public function testStoreDateTimeInstance()
    {
        $this->utcDateTime = UTCDateTime::box([
            'datetime' => $this->dateTime,
            'timezone' => 'Europe/Rome',
        ]);

        $this->assertEquals(
            '1982-09-10 22:12:25',
            $this->utcDateTime->datetime()
        );
    }

    public function testProvideUTCDateTime()
    {
        $this->utcDateTime = UTCDateTime::box([
            'datetime' => $this->dateTime,
            'timezone' => 'Europe/Rome',
        ]);

        $this->assertEquals(
            '1982-09-10 20:12:25',
            $this->utcDateTime->utcDatetime()
        );
    }

    public function testTimezone()
    {
        $this->utcDateTime = UTCDateTime::box([
            'datetime' => $this->dateTime,
            'timezone' => 'Europe/Rome',
        ]);

        $this->assertEquals(
            'Europe/Rome',
            $this->utcDateTime->timezone()
        );
    }
}
