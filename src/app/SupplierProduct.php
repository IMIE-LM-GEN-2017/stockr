<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierProduct extends Model
{
    protected $fillable = ['ref', 'supplier_id', 'product_id'];

    public function products()
    {
        return $this->belongsTo('App\Product');
    }

    public function suppliers()
    {
        return $this->belongsTo('App\Suppliers');
    }
}