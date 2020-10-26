<?php

namespace Rockbuzz\StdPayment\ValueObject;

use InvalidArgumentException;

class Email
{
    /**
     * @var string
     */
    private $value;

    public function __construct(string $value)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('Email must have a valid format');
        }

        $this->value = $value;
    }
    
    public function getValue(): string
    {
        return $this->value;
    }
}
