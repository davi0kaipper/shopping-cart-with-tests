<?php

declare(strict_types=1);

namespace App;

use Exception;
use PHPUnit\Framework\TestCase;

class ShoppingCartTest extends TestCase
{
    public function testAddItemToShoppingCart(): void
    {
        // Arrange
        $product = new Product(1, 'Alfajor', 2.50);
        $item = new Item(1, 5, $product);
        $shoppingCart = new ShoppingCart();

        // Act
        $shoppingCart->addItem($item);

        // Assert
        $this->assertContains($item, $shoppingCart->items());
    }

    public function testRemoveItemFromShoppingCart(): void
    {
        // Arrange
        $product = new Product(1, 'Alfajor', 2.50);
        $item = new Item(1, 5, $product);
        $shoppingCart = new ShoppingCart();
        $shoppingCart->addItem($item);

        // Act
        $shoppingCart->removeItem($item);

        // Assert
        $this->assertNotContains($item, $shoppingCart->items());
    }

    public function testRemoveInexistentItemFromShoppingCartShouldThrowException(): void
    {
        // Arrange
        $product1 = new Product(1, 'Alfajor', 2.50);
        $item1 = new Item(1, 5, $product1);

        $product2 = new Product(2, 'Brevidade', 3.75);
        $item2 = new Item(2, 3, $product2);

        $shoppingCart = new ShoppingCart();
        $shoppingCart->addItem($item1);

        // Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Este item não faz parte do carrinho.');

        // Act
        $shoppingCart->removeItem($item2);
    }

    public function testCountNumberOfItemsInShoppingCart(): void
    {
        // Arrange
        $product1 = new Product(1, 'Alfajor', 2.50);
        $item1 = new Item(1, 5, $product1);

        $product2 = new Product(2, 'Brevidade', 3.75);
        $item2 = new Item(2, 3, $product2);

        $shoppingCart = new ShoppingCart();
        $shoppingCart->addItem($item1);
        $shoppingCart->addItem($item2);

        // Act
        $numberOfItems = $shoppingCart->numberOfItems();

        // Assert
        $this->assertEquals(2, $numberOfItems);
    }

    public function testCalculateTotalFromShoppingCart(): void
    {
        // Arrange
        $product1 = new Product(1, 'Alfajor', 2.50);
        $item1 = new Item(1, 5, $product1);

        $product2 = new Product(2, 'Brevidade', 3.75);
        $item2 = new Item(2, 3, $product2);

        $shoppingCart = new ShoppingCart();
        $shoppingCart->addItem($item1);
        $shoppingCart->addItem($item2);

        // Act
        $total = $shoppingCart->getTotal();

        // Assert
        $this->assertEquals(23.75, $total);
    }
}
