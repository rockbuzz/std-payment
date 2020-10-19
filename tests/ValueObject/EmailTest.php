<?php

namespace Tests\ValueObjects;

use PHPUnit\Framework\TestCase;
use Rockbuzz\StdPayment\ValueObject\Email;

class EmailTest extends TestCase
{
    /**
     * @test
     */
    public function anEmailMustHaveAValidFormat()
    {
        
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('email must have a valid format');
        
        $email = new Email('no-email');
    }

    /**
     * @test
     */
    public function emailValid()
    {
        $email = new Email('email@domain.com');

        $this->assertEquals('email@domain.com', $email->getValue());
    }
}
