<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Processing;
class Product extends Model
{
    protected $fillable = ['item','varietySeed','harvestedDate','receivedDate','receivedFrom',
    'lotNo','certification'];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'int',
    ];
   public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function tests()
    {
        return $this->belongsToMany(Test::class)
        ->withPivot('method','wherePrescribed','whereTested','currentTestOn','value');
    }
    public function processing()
    {
        return $this->hasOne(Processing::class);
    }

}
