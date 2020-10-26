<?php

namespace Rockbuzz\StdPayment\ValueObject;

use InvalidArgumentException;

abstract class Document
{
    /**
     * @var mixed
     */
    protected $type;

    /**
     * @var string
     */
    protected $value;

    public function __construct($type, string $value)
    {
        $this->type = $type;
        $this->setValue($value);
    }

    abstract protected function isValid($value): bool;

    /**
     * @param string $value
     * @return void
     * @throws InvalidArgumentException
     */
    private function setValue($value)
    {
        if (!$this->isValid($value)) {
            throw new InvalidArgumentException('Document must have is valid');
        }
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
    
    public function getValue(): string
    {
        return $this->value;
    }

    public function __toString()
    {
        return "{$this->type}: {$this->value}";
    }
}
