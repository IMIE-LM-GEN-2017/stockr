<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SellProduct extends Model
{
    protected $fillable = ['ref', 'supplier_id'
    ];

    public function Product()
    {
        return $this->OnetoOne('App\Product');
    }
}