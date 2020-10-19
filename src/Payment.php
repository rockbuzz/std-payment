<?php

namespace Rockbuzz\StdPayment;

use Rockbuzz\StdPayment\Result;
use Rockbuzz\SDKYapay\Exception\StdPaymentException;

interface Payment
{
    /**
     * @return Result
     * @throws StdPaymentException
     */
    public function done(): Result;
}
