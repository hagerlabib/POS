<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'Suppliers';
    protected $fillable = ['Supplier_name','address',
                           'phone','email'];
}
