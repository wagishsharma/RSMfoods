<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Processing extends Model
{
    //
    protected $fillable = ['started','completed','batchNo','certification','barCodeNo',
    'dispatchedTo','dispatchedOn','remarks'];
    public function product()
    {
    	 return $this->belongsTo(Product::class);
    }
}
