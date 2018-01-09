<?php

namespace App\Http\Controllers;
use App\Comment;
use Illuminate\Http\Request;
class AdminCommentController extends Controller
{
    public function index()
    {
        $comments=Comment::all()
            ->where('is_report',1);

        return view('admin.reportComments',['comments'=>$comments]);
    }
}
