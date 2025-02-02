<?php

namespace App\Filament\Resources;

use App\Enums\ProductStatus;
use App\DTOs\CreateProductData;
use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nome')->required()->maxLength(255),
                Forms\Components\Textarea::make('descricao')->required(),
                Forms\Components\TextInput::make('preco')->numeric()->required(),
                Forms\Components\Select::make('status')
                    ->options([
                        ProductStatus::Ativo->value => ProductStatus::Ativo->value,
                        ProductStatus::Inativo->value => ProductStatus::Inativo->value,
                    ])->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nome')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('descricao')->limit(50),
                Tables\Columns\TextColumn::make('preco')->money('BRL'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('order')->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        ProductStatus::Ativo->value => ProductStatus::Ativo->value,
                        ProductStatus::Inativo->value => ProductStatus::Inativo->value,
                    ])
                    ->label('status'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}