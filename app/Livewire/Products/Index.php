<?php

namespace App\Livewire\Products;

use App\Models\ProductModel;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $paginate = 10;
    public function render()
    {

        return view('livewire.products.index',[
            'products' => ProductModel::latest()->paginate($this->paginate)
        ])->layout('layouts.app');
    }

    public function hook(){
        
    }
}
