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
            ->select('comments.id','comments.content','comments.score','stores.store','comments.created_at','comments.updated_at')
            ->where('member_id', Auth::user()->id )
            ->get();

        return view('comments.index',['comments'=>$comments]);
    }

    public function all()
    {
        $comments=Comment::join('stores','comments.store_id','=','stores.id')
            ->select('comments.id','comments.content','comments.score','stores.store','comments.created_at','comments.updated_at')
            ->get();
        return view('comments.all',['comments'=>$comments]);
    }

    public function destroy($id)
    {
        Comment::where('id','=',$id)->delete();
        return redirect()->route('comments.index');
    }

    public function create($id)
    {
        $stores=Store::select('stores.store')
            ->where('id',$id)
            ->get();
        return view('comments.create',['stores'=>$stores,'id'=>$id]);
    }

    public function store(Request $request,$id)
    {
        $comments=new Comment($request->only('content','score','created_at'));
        $comments->member_id=Auth::user()->id;
        $comments->store_id=$id;
        $comments->save();
        return redirect()->route('comments.index');
    }

    public function edit($id)
    {
        $comments=Comment::join('stores','comments.store_id','=','stores.id')
            ->select('comments.score','comments.content','comments.store_id')
            ->where('comments.id', $id )
            ->get();
        return view('comments.update',['comments'=>$comments,'id'=>$id]);
    }

    public function update(Request $request,$id)
    {
        $comments=Comment::find($id);
        $comments->update($request->all());
        return redirect()->route('comments.index');
    }

}
