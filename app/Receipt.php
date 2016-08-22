<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    //
    protected $fillable = ['product_id'];
    protected $primaryKey = 'product_id';
}
