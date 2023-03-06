<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
 //ユーザー一覧表示
    public function users(){
        //今ログインしているユーザーを表示
        $user = Auth::user();

       if( $user->role == 1 ) {
            $users = User::all();   
        }      
        else{ $users = [$user];}

        
        return view('/user/users', compact('users'));
    }
   






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

        if($request->type == 1){
        $request->validate([
        
        'name'=>['required'],
        'email'=>['required','email'],
        'password'=>['required','string', 'min:8'],
        'confirm_password' => ['required', 'same:password'],   
        
        ]);
        } else{
            $request->validate([
        
                'name'=>['required'],
                'email'=>['required','email'],
                'role'=>['required'],
            ]);
        }
        
        $users = User::where('id','=',$request->id)->first();
        // dd($users);
        $users->name = $request->name;
        $users->email =$request->email;
        if($request->type == 1){
        $users->password =Hash::make($request->password);
    };
        $users->role =$request->role;
        $users->save();
        return redirect('/users');
    }
    //削除する
    public function memberDelete(Request $request){
        $users = User::where('id','=',$request->id)->first();
        $user = Auth::user();
        //自分のIDを削除したらログインに遷移
        if((Auth::user()->role == 1 and $user->id == Auth::id()) ) {
            
            $users->delete();
            return redirect('/login');
            }
        else{
            $users->delete();
        return redirect('/home');
            }
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
