<?php

namespace Rockbuzz\StdPayment\ValueObject;

final class CNPJ extends Document
{
    public function __construct(string $value)
    {
        parent::__construct('CNPJ', $value);
    }

    protected function isValid($value): bool
    {
        $onlyNumbers = preg_replace('/\D/', '', $value);
        $arr = [6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];
        if (strlen($onlyNumbers) != 14) {
            return false;
        } elseif (preg_match("/^{$onlyNumbers[0]}{14}$/", $onlyNumbers) > 0) {
            return false;
        }
        for ($index = 0, $numbers = 0; $index < 12; $numbers += $onlyNumbers[$index] * $arr[++$index]) {
        }
        if ($onlyNumbers[12] != ((($numbers %= 11) < 2) ? 0 : 11 - $numbers)) {
            return false;
        }
        for ($index = 0, $numbers = 0; $index <= 12; $numbers += $onlyNumbers[$index] * $arr[$index++]) {
        }
        if ($onlyNumbers[13] != ((($numbers %= 11) < 2) ? 0 : 11 - $numbers)) {
            return false;
        }
        return true;
    }
}
