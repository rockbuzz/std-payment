<?php

namespace Rockbuzz\StdPayment\ValueObject;

final class CPF extends Document
{
    public function __construct(string $value)
    {
        parent::__construct('CPF', $value);
    }

    protected function isValid($value): bool
    {
        $onlyNumbers = preg_replace('/\D/', '', $value);
        if (strlen($onlyNumbers) != 11 || preg_match("/^{$onlyNumbers[0]}{11}$/", $onlyNumbers)) {
            return false;
        }
        for ($s = 10, $numbers = 0, $index = 0; $s >= 2; $numbers += $onlyNumbers[$index++] * $s--) {
        }
        if ($onlyNumbers[9] != ((($numbers %= 11) < 2) ? 0 : 11 - $numbers)) {
            return false;
        }
        for ($s = 11, $numbers = 0, $index = 0; $s >= 2; $numbers += $onlyNumbers[$index++] * $s--) {
        }
        if ($onlyNumbers[10] != ((($numbers %= 11) < 2) ? 0 : 11 - $numbers)) {
            return false;
        }
        return true;
    }
}
