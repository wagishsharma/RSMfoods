<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Test;

class Test extends Model
{
    //
     protected $fillable = ['name'];
     public $timestamps = false;
	//
     public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
    	return $this->belongsToMany(Product::class)
    	->withPivot('method','wherePrescribed','whereTested','currentTestOn','value');
    }
}
