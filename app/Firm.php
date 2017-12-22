<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Firm extends Model
{
    protected $table='firms';

    protected $fillable=['firm', 'address', 'tel', ];
}
