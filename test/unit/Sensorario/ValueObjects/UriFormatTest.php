<?php

namespace Sensorario\ValueObjects;

use PHPUnit_Framework_TestCase;

final class UriFormatTest extends PHPUnit_Framework_TestCase
{
    public function testGenericURISyntax()
    {
        $uri = UriFormat::create([
            'scheme'    => 'http',
            'authority' => 'www.example.com',
            'path'      => '/path/to/resource',
        ]);

        $this->assertEquals(
            'http://www.example.com/path/to/resource',
            $uri->value()
        );
    }

    public function testUriWithQuery()
    {
        $uri = UriFormat::create([
            'scheme'    => 'http',
            'authority' => 'www.example.com',
            'path'      => '/path/to/resource',
            'query'     => 'foo=bar&hello=world',
        ]);

        $this->assertEquals(
            'http://www.example.com/path/to/resource?foo=bar&hello=world',
            $uri->value()
        );
    }

    public function testUriWithFragment()
    {
        $uri = UriFormat::create([
            'scheme'    => 'http',
            'authority' => 'www.example.com',
            'path'      => '/path/to/resource',
            'fragment'  => 'fragment',
        ]);

        $this->assertEquals(
            'http://www.example.com/path/to/resource#fragment',
            $uri->value()
        );
    }
}
