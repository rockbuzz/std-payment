<?php

namespace Tests\ValueObjects;

use PHPUnit\Framework\TestCase;
use Rockbuzz\StdPayment\ValueObject\CNPJ;

class CNPJTest extends TestCase
{
    public function test_an_cnpj_must_have_is_valid()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Document must have is valid');
     
        new CNPJ('10548518000119');
    }

    public function test_cnpj_to_string()
    {
        $cnpj = new CNPJ('10548518000118');

        $this->assertEquals('CNPJ: 10548518000118', (string)$cnpj);
    }
}
