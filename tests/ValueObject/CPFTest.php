<?php

namespace Tests\ValueObjects;

use PHPUnit\Framework\TestCase;
use Rockbuzz\StdPayment\ValueObject\CPF;

class CPFTest extends TestCase
{
    public function test_an_cpf_must_have_is_valid()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Document must have is valid');
     
        new CPF('12345678900');
    }

    public function test_cpf_to_string()
    {
        $cpf = new CPF('03717477080');

        $this->assertEquals('CPF: 03717477080', (string)$cpf);
    }
}
