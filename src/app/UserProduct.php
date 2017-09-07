<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProduct extends Model
{
    protected $fillable = ['ref', 'quantity', 'user_id', 'product_id'
    ];
}
