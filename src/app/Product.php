<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'category_id'
    ];

    public function user()
    {
        return $this->hasmany('App\User');
    }

    public function SellProduct()
    {
        return $this->hasmany('App\SellProduct');
    }
}