<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['name','address'];

    public function orderdetail()
           {
        return $this->hasMany('App\Order_Detail');
              }
}
