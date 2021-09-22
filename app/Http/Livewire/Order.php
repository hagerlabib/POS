<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class Order extends Component
{
    public $orders, $products =[], $prodoct_code;
   public function mount(){
    $this->products = Product::all();
   }
   public function InsertoCart(){
       $countProduct = Product::where('id', $this->prodoct_code)->get();
       dd($countProduct);
   }
    public function render()
    {
        return view('livewire.order');
    }
}
