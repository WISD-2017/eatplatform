<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table='stores';

    protected $fillable=['store', 'address', 'type', 'avg_score',
        'introduction', 'is_report', ];
}
