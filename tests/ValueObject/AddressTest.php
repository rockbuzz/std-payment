<?php

namespace Tests\ValueObjects;

use PHPUnit\Framework\TestCase;
use Rockbuzz\StdPayment\ValueObject\Address;

class AddressTest extends TestCase
{
    public function test_an_address_must_have_a_two_character_state()
    {
        $address = new Address('street', 123, 'complement', '12345678', 'neigh', 'city', 'STR');

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('state must be two characters');
        $address->getState();
    }

    public function test_an_address_must_have_a_StateWithCapitalLetters()
    {
        $address = new Address('street', 123, 'complement', '12345678', 'neigh', 'city', 'st');

        $this->assertEquals('ST', $address->getState());
    }

    public function test_an_address_must_have_a_TwoCharacterCountry()
    {
        $address = new Address('street', 123, 'complement', '12345678', 'neigh', 'city', 'ST', 'CTR');

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('country must be two characters');

        $address->getCountry();
    }

    public function test_an_address_must_have_a_CountryWithCapitalLetters()
    {
        $address = new Address('street', 123, 'complement', '12345678', 'neigh', 'city', 'st', 'ct');

        $this->assertEquals('CT', $address->getCountry());
    }
}
