<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Rules\Hankaku;

class AccountController extends Controller
{    
    /**
     * ログイン画面表示
     * 
     * @param Request $request
     * @return Response
     */
    public function login()
    {
        if (Auth::check()) {
            // ユーザーはログイン済み
            return redirect('/home');
        }
        
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
            'email' => 'メールアドレスまたはパスワードが間違っています。',
        ]);
    }

    /**
     * 会員登録画面表示
     * 
     * @param Request $request
     * @return Response
     */
    public function signup()
    {
        return view('account.signup');
    }

    /**
     * 会員登録処理
     * 
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'min:4', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', new Hankaku, 'min:8', 'confirmed'],
        ]);

        // アカウント作成
        User::create([
            'role' => 0,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), 
        ]);

        return redirect('/')->with('flash_message', 'アカウント登録が完了しました');
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
            
        return redirect('/')->with('flash_message', 'ログアウトしました');
    }

    /**
     * ユーザーをリダイレクトするパスの取得
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        return route('/');
    }
}
