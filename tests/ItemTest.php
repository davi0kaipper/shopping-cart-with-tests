<?php

declare(strict_types=1);

namespace App;

use PHPUnit\Framework\TestCase;
use Exception;

class ItemTest extends TestCase
{
    public function testCreateItemWithNegativeIdShouldThrowAnException(): void
    {
        $product = new Product(1, 'Alfajor', 2.50);

        $this->expectException(Exception::class);
        $this->expectExceptionMessage('O id deve ser positivo.');

        new Item(-1, 5, $product);
    }

    public function testCreateItemWithNegativeQuantityShouldThrowAnException(): void
    {
        $product = new Product(2, 'Brevidade', 3.50);

        $this->expectException(Exception::class);
        $this->expectExceptionMessage('A quantidade deve ser positiva.');

        new Item(1, -1, $product);
    }

    public function testCreateValidItemShouldWork(): void
    {
        $product = new Product(3, 'Chocolate Quente', 3.10);

        $item = new Item(2, 4, $product);

        $this->assertEquals(2, $item->id());
        $this->assertEquals(4, $item->quantity());
    }

    public function testCalculateItemTotal(): void
    {
        $product = new Product(1, 'Dadinho', 0.15);
        $item = new Item(3, 5, $product);

        $this->assertEquals($item->total(), 0.75);
    }

    public function testRepresentItemAsString(): void
    {
        $product = new Product(1, "Enroladinho", 2.10);
        $item = new Item(4, 5, $product);

        $expected = "Id: 4;\nQuantity: 5;\nTotal: 10.50;\n\n";
        $this->assertEquals($expected, (string) $item);
    }
}
