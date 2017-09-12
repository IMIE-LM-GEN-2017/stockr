<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = ['name', 'phone', 'adress', 'cp', 'city'
    ];

    public function Product()
    {
        return $this->hasmany('App\Product');
    }

    public function SellProduct()
    {
        return $this->hasmany('App\SellProduct');
    }
}