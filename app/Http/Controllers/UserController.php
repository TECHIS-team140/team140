<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
 //ユーザー一覧表示
    public function users(){
        $users = User::all();
        return view('/user/users', compact('users'));
    }
   


//編集画面表示



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //編集画面表示
    public function edit(Request $request){
        
    $users = User::where('id','=',$request->id)->first();
    
    return view('/user/edit')->with([
        'user' => $users,
    ]);
    }
    //編集ボタン処理
    public function memberEdit(Request $request){
        //バリデーションをする


        $request->validate([
            
        'name'=>['required'],
        'email'=>['required','email'],
        'password'=>['required'],
        'confirm_password' => ['required', 'same:password'],

            
        ]);
        
        $users = User::where('id','=',$request->id)->first();
        $users->name = $request->name;
        $users->email =$request->email;
        $users->password =Hash::make($request->password);
        $users->role =$request->role;
        $users->save();
        return redirect('/users');
    }
    //削除する
    public function memberDelete(Request $request){
        $users = User::where('id','=',$request->id)->first();
        $users->delete();
        return redirect('/users');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
