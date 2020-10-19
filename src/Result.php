<?php

namespace Rockbuzz\StdPayment;

use JsonSerializable;

interface Result
{
    public function about(): JsonSerializable;

    public function isSuccess(): bool;
}
