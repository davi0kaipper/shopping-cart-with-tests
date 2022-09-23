<?php

declare(strict_types=1);

namespace App;

use App\Product;
use Exception;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testCreateProductWithNegativeIdShouldThrowAnException(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Id inválido.');

        new Product(-1, 'Goldfish', 1.60);
    }

    public function testCreateProductWithShortDescriptionShouldThrowAnException(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('A descrição deve ter pelo menos 3 caracteres.');

        $shortDescription = 'xx';
        new Product(1, $shortDescription, 2.70);
    }

    public function testCreateProductWithNegativePriceShouldThrowAnException(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('O preço deve ser maior do que 0.');

        new Product(1, 'Pie', -3.10);
    }

    public function testCreateValidProductShouldWork(): void
    {
        $product = new Product(1, 'Pie', 3.10);

        $this->assertEquals(1, $product->id());
        $this->assertEquals('Pie', $product->description());
        $this->assertEquals(3.10, $product->price());
    }
}
