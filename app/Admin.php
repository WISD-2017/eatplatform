<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table='admins';

    public function user(){
        return $this->morphMany('App\User','userable');
    }
}
