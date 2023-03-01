<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\item;
use App\Models\User;

use App\Http\Requests\ItemFormRequest;

class ItemController extends Controller
{
    /**
     *商品登録画面表示
     *
     * @return \Illuminate\Http\Response
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
    public function create(ItemFormRequest $request)
    {
       
        $user_id= User::first()->id;
        //**ユーザIDも登録する** */
        item::create([
            'user_id'=>$user_id,
            'name' => $request->name,
            'type' => $request->type,
            'detail' => $request->detail
        ]);
      
        //商品一覧画面に戻る  
        return redirect()->route('search.index');
    }

    
    /**
     * 商品更新画面表示
     *
     * @param  \App\Models\item  $item
     */
    public function showEditForm(item $item)
    {

        //
        return view('item.edit',compact('item'));
    }

   
    /**
     * 商品更新
     *
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(item $item,Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required|max:100',
            'status'=>'max:100',
            'type' => 'integer',
            'detail' => 'max:500',
        ]);

        $item->update([
            'name' => $request->name,
            'status' => $request->status,
            'type' => $request->type,
            'detail' => $request->detail
        ]);

        //商品一覧画面に戻る
        return redirect()->route('search.index',['id'=>$item->id]);
    }

    /**
     * 商品削除
     *
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(item $item)
    {
        $item->delete();
        //
        //商品一覧画面に戻る
        return redirect()->route('search.index');
    }

}
