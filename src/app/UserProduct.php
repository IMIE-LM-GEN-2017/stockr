<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProduct extends Model
{
    protected $fillable = ['ref', 'quantity', 'user_id', 'product_id'];

    public function products()
    {
        return $this->belongsTo('App\Product');
    }

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}