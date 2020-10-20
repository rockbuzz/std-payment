<?php

namespace Tests\ValueObjects;

use PHPUnit\Framework\TestCase;
use Rockbuzz\StdPayment\ValueObject\Email;

class EmailTest extends TestCase
{
    public function test_an_email_must_have_a_valid_format()
    {
        
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('email must have a valid format');
        
        new Email('no-email');
    }

    public function test_email_valid()
    {
        $email = new Email('email@domain.com');

        $this->assertEquals('email@domain.com', $email->getValue());
    }
}
