<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Store;

class Firm extends Model
{
    protected $table='firms';

    protected $fillable=['firm', 'address', 'tel', ];

    public function stores(){
        return $this->hasMany(Store::class);
    }

    public function user(){
        return $this->morphMany('App\User','userable');
    }
}
