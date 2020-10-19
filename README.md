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
use Rockbuzz\StdPayment\Payment;

class YourPayment implement Payment
{
    /**
     * @return Result
     * @throws StdPaymentException
     */
    public function done(): Result
    {
        //
    }
}
```

## Contributing

Add new features.

## License

The Standard Payment is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).