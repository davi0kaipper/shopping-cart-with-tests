<?php

declare(strict_types=1);

namespace App;

use Exception;

class Product
{
    private int $id;
    private string $description;
    private float $price;

    public function __construct(int $id, string $description, float $price)
    {
        if ($id < 1) {
            throw new Exception("Id inválido.");
        }

        if (strlen($description) < 3) {
            throw new Exception("A descrição deve ter pelo menos 3 caracteres.");
        }

        if ($price <= 0) {
            throw new Exception("O preço deve ser maior do que 0.");
        }

        $this->id = $id;
        $this->description = $description;
        $this->price = $price;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function price(): float
    {
        return $this->price;
    }
}
