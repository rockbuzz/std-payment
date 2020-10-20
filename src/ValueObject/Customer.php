<?php

namespace Rockbuzz\StdPayment\ValueObject;

use InvalidArgumentException;

class Customer
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $document;

    /**
     * @var Email
     */
    private $email;

    /**
     * @var Address
     */
    private $address;

    public function __construct(
        int $id,
        string $name,
        string $document,
        Email $email,
        Address $address = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->document = $document;
        $this->email = $email;
        $this->address = $address;
    }

    public function hasAddress(): bool
    {
        return !!$this->address;
    }

    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDocument(): string
    {
        return $this->document;
    }

    /**
     * @throws InvalidArgumentException
     */
    public function getEmail(): string
    {
        return $this->email->getValue();
    }

    /**
     * @return string|null
     */
    public function getAddressStreet(): ?string
    {
        return $this->address->getStreet() ?? null;
    }

    public function getAddressNumber(): ?string
    {
        return $this->address->getNumber() ?? null;
    }

    public function getAddressComplement(): ?string
    {
        return $this->address->getComplement() ?? null;
    }

    public function getAddressPostalCode(): ?string
    {
        return $this->address->getPostalCode() ?? null;
    }

    public function getAddressNeighborhood(): ?string
    {
        return $this->address->getNeighborhood() ?? null;
    }

    public function getAddressCity(): ?string
    {
        return $this->address->getCity() ?? null;
    }

    public function getAddressState(): ?string
    {
        return $this->address->getState() ?? null;
    }

    public function getAddressCountry(): ?string
    {
        return $this->address->getCountry() ?? null;
    }
}
