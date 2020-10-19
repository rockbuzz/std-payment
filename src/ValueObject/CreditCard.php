<?php

namespace Rockbuzz\StdPayment\ValueObject;

class CreditCard
{
    /**
     * @var string
     */
    private $holderName;

    /**
     * @var int
     */
    private $number;

    /**
     * @var int
     */
    private $code;

    /**
     * @var int
     */
    private $month;

    /**
     * @var int
     */
    private $year;

    public function __construct(
        string $holderName,
        $number,
        $code,
        int $month,
        int $year
    ) {
        $this->holderName = $holderName;
        $this->number = $number;
        $this->code = $code;
        $this->month = $month;
        $this->year = $year;
    }

    public function getHolderName(): string
    {
        return $this->holderName;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getMonth()
    {
        return $this->month;
    }

    public function getYear()
    {
        return $this->year;
    }
}
