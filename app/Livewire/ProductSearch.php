<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductSearch extends Component
{
    public $search = '';

    protected $queryString = ['search'];

    public function render()
    {
        $products = [];
        if(strlen($this->search) > 2) {
            $products = auth()->user()->tasts()
                ->where('nome', 'like', '%' . $this->search . '%')
                ->orWhere('descricao', 'like', '%' . $this->search . '%')
                ->get();
        }

        return view('livewire.product-search', compact('products'));
    }
}