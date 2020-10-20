<?php

namespace Rockbuzz\StdPayment\ValueObject;

class CreditCard
{
    /**
     * @var string
     */
    private $holderName;

    /**
     * @var string|int
     */
    private $number;

    /**
     * @var string|int
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

    /**
     * @return string|int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return string|int
     */
    public function getCode()
    {
        return $this->code;
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function getYear(): int
    {
        return $this->year;
    }
}
