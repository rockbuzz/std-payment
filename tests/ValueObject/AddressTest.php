<?php

namespace Tests\ValueObjects;

use PHPUnit\Framework\TestCase;
use Rockbuzz\StdPayment\ValueObject\Address;

class AddressTest extends TestCase
{
    public function testAnAddressMustHaveATwoCharacterState()
    {
        $address = new Address('street', 123, '12345678', 'neigh', 'city', 'STR');

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('state must be two characters');
        $address->getState();
    }

    public function testAnAddressMustHaveAStateWithCapitalLetters()
    {
        $address = new Address('street', 123, '12345678', 'neigh', 'city', 'st');

        $this->assertEquals('ST', $address->getState());
    }

    public function testAnAddressMustHaveATwoCharacterCountry()
    {
        $address = new Address('street', 123, '12345678', 'neigh', 'city','ST', null, 'CTR');

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('country must be two characters');

        $address->getCountry();
    }

    public function testAnAddressMustHaveACountryWithCapitalLetters()
    {
        $address = new Address('street', 123, '12345678', 'neigh', 'city', 'st', null, 'ct');

        $this->assertEquals('CT', $address->getCountry());
    }
}
