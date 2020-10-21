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

    /**
     * @var array
     */
    private $options;

    public function __construct(
        $id,
        string $name,
        int $priceInCents,
        int $quantity = 1,
        array $options = []
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->priceInCents = $priceInCents;
        $this->quantity = $quantity;
        $this->options = $options;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPriceInCents(): int
    {
        return $this->priceInCents;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * If the key exists it will be overwritten
     *
     * @param string $key
     * @param mixed $value
     * @return self
     */
    public function addOption(string $key, $value): self
    {
        $this->options[$key] = $value;

        return $this;
    }

    public function totalInCents(): int
    {
        return $this->priceInCents * $this->quantity;
    }
}
