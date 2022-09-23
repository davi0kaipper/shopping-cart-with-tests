<?php

declare(strict_types=1);

namespace App;

use Exception;

class ShoppingCart
{
    private array $items = [];

    public function addItem(Item $item): void
    {
        $this->items[] = $item;
    }

    public function removeItem(Item $item): void
    {
        $index = array_search($item, $this->items);

        if ($index === false) {
            throw new Exception("Este item não faz parte do carrinho.");
        }

        unset($this->items[$index]);
    }

    public function items(): array
    {
        return $this->items;
    }

    public function numberOfItems(): int
    {
        return count($this->items);
    }

    public function getTotal(): float
    {
        $total = 0.0;

        foreach ($this->items as $item) {
            $total += $item->total();
        }

        return $total;
    }
}
