<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class AccountController extends Controller
{
    /**
     * ログイン
     * 
     * @param Request $request
     * @return Response
     */
    public function login()
    {
        return view('login');
    }

    /**
     * 会員登録
     * 
     * @param Request $request
     * @return Response
     */
    public function signup()
    {
        return view('account.signup');
    }

    /**
     * 会員登録
     * 
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        // タスク作成
        User::create([
            //'id' => 0,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            $role = 0,            
        ]);

        /** 要確認 **/
        return redirect('/account/home_user');
    }

    /**
     * ユーザーホーム画面
     * 
     * @param Request $request
     * @return Response
     */
    public function home()
    {
        return view('/account/home_user');
    }
}
