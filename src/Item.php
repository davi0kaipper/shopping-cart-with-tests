<?php

declare(strict_types=1);

namespace App;

use Exception;

class Item
{
    private int $id;
    private int $quantity;
    private Product $product;

    public function __construct(
        int $id,
        int $quantity,
        Product $product
    ) {
        if ($id <= 0) {
            throw new Exception("O id deve ser positivo.");
        }

        if ($quantity <= 0) {
            throw new Exception("A quantidade deve ser positiva.");
        }

        $this->id = $id;
        $this->quantity = $quantity;
        $this->product = $product;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function quantity(): int
    {
        return $this->quantity;
    }

    public function total(): float
    {
        return $this->quantity() * $this->product->price();
    }

    public function __toString(): string
    {
        return sprintf(
            "Id: %d;\nQuantity: %d;\nTotal: %.2f;\n\n",
            $this->id,
            $this->quantity,
            $this->total()
        );
    }
}
