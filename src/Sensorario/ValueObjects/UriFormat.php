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
        $return = $this->scheme() . '://'
            . $this->authority()
            . $this->path()
        ;

        if ($this->propertyExists('query')) {
            $return .= '?' . $this->query();
        }

        if ($this->propertyExists('fragment')) {
            $return .= '#' . $this->fragment();
        }

        return $return;
    }
}
