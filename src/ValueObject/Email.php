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
        $this->value = $value;
    }
    
    /**
     * @throws InvalidArgumentException
     */
    public function getValue(): string
    {
        if (!filter_var($this->value, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('email must have a valid format');
        }
        return $this->value;
    }
}
