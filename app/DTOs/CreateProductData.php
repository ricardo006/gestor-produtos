<?php

namespace App\DTOs;

final class CreateProductData
{
    public function __construct(
        public string $nome,
        public string $descricao,
        public float $preco,
        public string $status,
    ) {}
}