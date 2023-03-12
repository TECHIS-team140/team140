<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;

use App\Http\Requests\ItemFormRequest;

use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function index(){
        $items= Item::all();
        return view('item.index',compact("items"));
    }
    /**
     *商品登録画面表示
     */
    public function showCreateForm()
    {
        //
        return view('item.create');
    }

    /**
     * 商品登録
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
            'status'=>'max:100',
            'type' => 'required|integer',
            'detail' => 'max:500',
        ],
        [
            'name.required' => '名前欄が入力されていません。',
            'type.required'  => '種別欄が選択されていません。',
        ]);
    
       
        //ログインしたユーザIDを設定する
        $user_id = Auth::id();
        $detail=isset($request->detail)?$request->detail:'';

        //**ユーザIDも登録する** */
        Item::create([
            'user_id'=>$user_id,
            'name' => $request->name,
            'type' => $request->type,
            'detail' => $detail
        ]);
      
        //商品一覧画面に戻る  
        return redirect()->route('item.index');
    }

    
    /**
     * 商品更新画面表示
     *
     * @param  \App\Models\Item  $item
     */
    public function showEditForm(Item $item)
    {
        return view('item.edit',compact('item'));
    }

   
    /**
     * 商品更新
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item,Request $request)
    {
        //入力チェック
        $this->validate($request, [
            'name' => 'required|max:100',
            'status'=>'max:100',
            'type' => 'required|integer',
            'detail' => 'max:500',
        ],
        [
            'name.required' => '名前欄が入力されていません。',
            'type.required'  => '種別欄が選択されていません。',
        ]);

        $detail=isset($request->detail)?$request->detail:'';

        //データ更新
        $item->update([
            'name' => $request->name,
            'status' => $request->status,
            'type' => $request->type,
            'detail' => $detail,
        ]);

        //商品一覧画面に戻る
        return redirect()->route('item.index',['id'=>$item->id]);
    }

    /**
     * 商品削除
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(item $item)
    {
        $item->delete();
        //
        //商品一覧画面に戻る
        return redirect()->route('item.index');
    }

}
