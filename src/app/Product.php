<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'category_id'
    ];

    public function user()
    {
        return $this->belongsToMany('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function suppliers()
    {
        return $this->hasManyThrough('App\Supplier', 'App\SupplierProduct');
    }
}