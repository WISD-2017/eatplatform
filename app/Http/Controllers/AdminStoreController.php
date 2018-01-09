<?php

namespace App\Http\Controllers;
use App\Store;
use Illuminate\Http\Request;

class AdminStoreController extends Controller
{
   public function index()
    {
        $stores=Store::all()
            ->where('is_report',1);
            

        return view('admin.reportStores',['stores'=>$stores]);
    }
}
