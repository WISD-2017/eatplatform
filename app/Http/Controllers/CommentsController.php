<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Store;
use Auth;

class CommentsController extends Controller
{
    public function index()
    {
        $comments=Comment::join('stores','comments.store_id','=','stores.id')
            ->where('member_id', Auth::user()->id )
            ->get();

        return view('comments.index',['comments'=>$comments]);
    }

    public function all()
    {
        $comments=Comment::join('stores','comments.store_id','=','stores.id')
            ->get();
        return view('comments.all',['comments'=>$comments]);
    }

}
