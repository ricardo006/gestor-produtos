<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\DTOs\CreateProductData;
use App\Filament\Resources\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    protected function mutateformDataBeforeCreate(array $data): array
    {
        $dto = new CreateProductData(
           nome: $data['nome'],
           descricao: $data['descricao'],
           preco: $data['preco'],
           status: $data['status'],
        );

        return [
            'nome' => $dto->nome,
            'descricao' => $dto->descricao,
            'preco' => $dto->preco,
            'status' => $dto->status,
        ];
    }
}
