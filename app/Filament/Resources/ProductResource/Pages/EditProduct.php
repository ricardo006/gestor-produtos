<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\DTOs\CreateProductData;
use App\Filament\Resources\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
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
