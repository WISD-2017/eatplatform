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
            ->select('comments.id','comments.content','comments.score','stores.store')
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

    public function destroy($id)
    {
        Comment::where('id','=',$id)->delete();
        return redirect()->route('comments.index');
    }

    public function create()
    {
        return view('comments.create');
    }
}
