<?php

namespace Tests\ValueObjects;

use PHPUnit\Framework\TestCase;
use Rockbuzz\StdPayment\ValueObject\Item;

class ItemTest extends TestCase
{
    public function test_an_item_must_have_total_in_cents()
    {
        $item = new Item('123', 'any_name', 3940, 2);

        $this->assertEquals(7880, $item->totalInCents());
    }

    public function test_an_item_can_add_options()
    {
        $item = new Item('123', 'any_name', 3940, 2);

        $this->assertEquals([], $item->getOptions());

        $return = $item->addOption('color', 'blue');

        $this->assertInstanceOf(Item::class, $return);
        $this->assertEquals(['color' => 'blue'], $item->getOptions());
    }
}
