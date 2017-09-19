<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = ['name', 'phone', 'adress', 'cp', 'city'
    ];

    public function products()
    {
        return $this->hasManyThrough('App\Product', 'App\SuppliersProduct');
    }
}