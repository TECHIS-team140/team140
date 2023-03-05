<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;
//use Symfony\Component\HttpFoundation\Cookie;

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
     * ログイン認証
     * 
     * @param Request $request
     * @return Response
     */
    public function auth(Request $request)
    {
        $user_info = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // ログインに成功したとき
        if (Auth::attempt($user_info)) {
            $request->session()->regenerate();
            return redirect('/home');
        }

        // 上記のif文でログインに成功した人以外(=ログインに失敗した人)がここに来る
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // アカウント作成
        User::create([
            'role' => 0,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), 
        ]);

        /** 要確認 **/
        return redirect('/account/comp');
    }

    /**
     * アカウント登録完了画面
     * 
     * @param Request $request
     * @return Response
     */
    public function comp()
    {
        return view('/account/comp');
    }

    /**
     * ユーザーホーム画面
     * 
     * @param Request $request
     * @return Response
     */
    public function home()
    {
        return view('/account/home');
    }

    /**
     * ログアウト処理
     * 
     * @param Request $request
     * @return Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
            
        return redirect('/');
    }
}
