<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Member;
use App\Store;

class Comment extends Model
{
    protected $table='comments';

    protected $fillable=['content', 'score', 'is_report', 'member_id', 'store_id' ];

    public function member(){
        return $this->belongsTo(Member::class);
    }

    public function store(){
        return $this->belongsTo(Store::class);
    }

}
