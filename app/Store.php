<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Firm;
use App\Comment;
class Store extends Model
{
    protected $table='stores';

    protected $fillable=['store', 'address','telephone', 'type', 'avg_score',
        'introduction', 'is_report', ];

    public function firm(){
        return $this->belongsTo(Firm::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }

}
