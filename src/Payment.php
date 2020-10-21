<?php

namespace Rockbuzz\StdPayment;

use Rockbuzz\StdPayment\Result;
use Rockbuzz\SDKYapay\Exception\StdPaymentException;

interface Payment
{
    /**
     * You must generate the transaction on a payment service.
     *
     * @throws StdPaymentException
     */
    public function done(): Result;
}
