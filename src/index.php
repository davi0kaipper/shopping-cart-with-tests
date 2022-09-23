<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Product;
use App\Item;
use App\ShoppingCart;

$pizza1 = new Product(1, 'chocolate', 2.5);
$pizza2 = new Product(2, 'pepperoni', 5.5);
$pizza3 = new Product(3, 'mms', 4.25);

$item1 = new Item(1, 2, $pizza1);
$item2 = new Item(2, 1, $pizza2);
$item3 = new Item(3, 3, $pizza3);

$shoppingCart = new ShoppingCart();

$shoppingCart->addItem($item1);
$shoppingCart->addItem($item2);
$shoppingCart->addItem($item3);

echo $shoppingCart->getTotal() . "\n";
