<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\item;
use App\Models\User;

use App\Http\Requests\HomeFormRequest;

class HomeController extends Controller
{
    /**
     * ホーム画面
     */
    public function index(Request $request)
    {
        $items= Item::Items();
        return view('home.index',compact("items"));
    }


}