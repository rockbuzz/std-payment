<?php

namespace Rockbuzz\StdPayment\ValueObject;

class Item
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $priceInCents;

    /**
     * @var int
     */
    private $quantity;

    public function __construct(
        string $id,
        string $name,
        int $priceInCents,
        int $quantity = 1
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->priceInCents = $priceInCents;
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getPriceInCents(): int
    {
        return $this->priceInCents;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }
}
