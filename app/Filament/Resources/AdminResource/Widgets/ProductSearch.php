<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use Filament\Widgets\Widget;
use Livewire\Attributes\Url;
use Illuminate\Contracts\View\View;

class ProductSearch extends Widget
{
    protected static string $view = 'filament.resources.admin-resource.widgets.product-search';

    public $search = '';

    public function render(): View
    {
        $products = [];

        // if(strlen($this->search) > 2) {
        //     $products = auth()->user()->tasts()
        //         ->where('nome', 'like', '%' . $this->search . '%')
        //         ->orWhere('descricao', 'like', '%' . $this->search . '%')
        //         ->get();
        // }

        // return view('livewire.product-search', compact('products'));
    }
}