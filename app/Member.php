<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Comment;
class Member extends Model
{
    protected $table='members';

    protected $fillable=['gender', ];

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
