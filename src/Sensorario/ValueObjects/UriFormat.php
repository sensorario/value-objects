<?php

namespace Sensorario\ValueObjects;

use Sensorario\ValueObject\ValueObject;

final class UriFormat extends ValueObject
{
    public static function allowed()
    {
        return [
            'query',
            'fragment',
        ];
    }

    public static function mandatory()
    {
        return [
            'scheme',
            'authority',
            'path',
        ];
    }

    public function value()
    {
        if ($this->properyExists('fragment')) {
            return $this->scheme() . '://'
                . $this->authority()
                . $this->path()
                . '#' . $this->fragment()
            ;
        }

        if ($this->properyExists('query')) {
            return $this->scheme() . '://'
                . $this->authority()
                . $this->path()
                . '?' . $this->query()
            ;
        }

        return $this->scheme() . '://'
            . $this->authority()
            . $this->path()
        ;
    }
}
