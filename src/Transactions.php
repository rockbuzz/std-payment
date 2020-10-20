<?php

namespace Rockbuzz\StdPayment;

use Rockbuzz\StdPayment\Result;
use Rockbuzz\StdPayment\StdPaymentException;

interface Transactions
{
    /**
     * @param mixed $code
     * @return Result
     * @throws StdPaymentException
     */
    public function findByCode($code): Result;
}
