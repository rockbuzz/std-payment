# Standard Payment

Standard Payment

## Requirements

PHP >=7.1

## Install

```bash
$ composer require rockbuzz/std-payment
```

## Usage

```php
use Rockbuzz\StdPayment\Result;
use Rockbuzz\StdPayment\Payment;
use Rockbuzz\StdPayment\StdPaymentException;

class YourPayment implement Payment
{
    /**
     * You must generate the transaction on a payment service.
     *
     * @return Result
     * @throws StdPaymentException
     */
    public function done(): Result
    {
        //
    }
}

class YourResult implement Result
{
    /**
     * It must contain the data structure returned by the payment
     * service in a transaction.
     *
     * @return JsonSerializable
     */
    public function about(): JsonSerializable
    {
        //
    }

    /**
     * Should be returned false if any exception occurs when
     * communicating with the payment service
     *
     * @return boolean
     */
    public function isSuccess(): bool
    {
        //
    }
}
```
### Value Objects
```php
use Rockbuzz\StdPayment\ValueObject\{
    Address,
    CreditCard,
    Customer,
    Email,
    Item
};
```
#### Address
```php
$address->getStreet(): string
$address->getNumber(): string
$address->getComplement(): ?string
$address->getPostalCode(): string
$address->getNeighborhood(): string
$address->getCity(): string
/**
 * @throws InvalidArgumentException
 */
$address->getState(): string
/**
 * @throws InvalidArgumentException
 */
$address->getCountry(): string
```
#### CreditCard
```php
$creditCard->getHolderName(): string
/**
 * @return string|int
 */
$creditCard->getNumber()
/**
 * @return string|int
 */
$creditCard->getCode()
$creditCard->getMonth(): int
$creditCard->getYear(): int
```
#### Customer
```php
/**
 * @return string|int
 */
$customer->getId()
$customer->getName(): string
$customer->getDocument(): string
 /**
 * @throws InvalidArgumentException
 */
$customer->getEmail(): string
$customer->getAddressStreet(): ?string
$customer->getAddressNumber(): ?string
$customer->getAddressComplement(): ?string
$customer->getAddressPostalCode(): ?string
$customer->getAddressNeighborhood(): ?string
$customer->getAddressCity(): ?string
/**
 * @throws InvalidArgumentException
 */
$customer->getAddressState(): ?string
/**
 * @throws InvalidArgumentException
 */
$customer->getAddressCountry(): ?string
$customer->setAddress(Address $address): void
$customer->hasAddress(): bool

```
#### Email
```php
/**
 * @throws InvalidArgumentException
 */
$email->getValue(): string
```
#### Item
```php
/**
 * @return string|int
 */
$item->getId()
$item->getName(): string
$item->getPriceInCents(): int
$item->getQuantity(): int
$item->total(): int
```

## Contributing

Add new features.

## License

The Standard Payment is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).