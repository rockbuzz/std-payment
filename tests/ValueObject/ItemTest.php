<?php

namespace Tests\ValueObjects;

use PHPUnit\Framework\TestCase;
use Rockbuzz\StdPayment\ValueObject\Item;

class ItemTest extends TestCase
{
    public function test_an_item_must_have_total()
    {        
        $item = new Item('123', 'any_name', 3940, 2);

        $this->assertEquals(7880, $item->total());
    }
}
