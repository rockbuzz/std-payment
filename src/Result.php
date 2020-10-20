<?php

namespace Rockbuzz\StdPayment;

use JsonSerializable;

interface Result
{
    /**
     * It must contain the data structure returned by the payment
     * service in a transaction.
     *
     * @return JsonSerializable
     */
    public function about(): JsonSerializable;

    /**
     * Should be returned false if any exception occurs when
     * communicating with the payment service
     *
     * @return boolean
     */
    public function isSuccess(): bool;
}
