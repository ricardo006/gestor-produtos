<?php

namespace App\Models;

use App\Enums\ProductStatus;
use App\DTOs\CreateProductData;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao', 'preco', 'status'];

    protected $casts = [
        'status' => ProductStatus::class,
    ];

    public function createFromDTO(createProductData $data): self
    {
        return self::create([
            'nome' => $data->nome,
            'descricao' => $data->descricao,
            'preco' => $data->preco,
            'status' => $data->status,
        ]);
    }

    public function store(CreateProductData $data)
    {
        $product = Product::createFromDTO($data);

        return redirect()->route('products.index')->with('success', 'Produto criado com sucesso!');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->validate();
        });

        static::updating(function ($product) {
            $product->validate();
        });
    }

    public function validate()
    {
        $rules = [
            'nome' => 'required|max:255',
            'descricao' => 'required',
            'preco' => 'required|numeric',
            'status' => 'required|in:Ativo,Inativo',
        ];

        validator($this->attributes, $rules)->validate();
    }
}
