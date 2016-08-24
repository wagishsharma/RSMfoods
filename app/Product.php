<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

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
}
