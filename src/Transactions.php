<?php

namespace Rockbuzz\StdPayment;

use Rockbuzz\StdPayment\Result;
use Rockbuzz\StdPayment\StdPaymentException;

interface Transactions
{
    /**
     * @param string|int $code
     * @throws StdPaymentException
     */
    public function findByCode($code): Result;
}
