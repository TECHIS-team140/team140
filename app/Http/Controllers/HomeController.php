<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;

use App\Http\Requests\HomeFormRequest;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * ホーム画面
     */
    public function index(Request $request)
    {
        $items= Item::orderBy('created_at','desc')->get();
        $user = Auth::user();
        return view('home.index',compact("items","user"));
    }

}