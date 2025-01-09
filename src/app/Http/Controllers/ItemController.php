<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Item;
use App\Models\Favorite;

class ItemController extends Controller
{
    // 店舗一覧
    public function index()
    {
        if (Auth::check()) {

            $user = Auth::user();
            $user_id = $user->id;
            $no_profile = User::where("id", "=", $user_id)->whereNull("address")->first();
            $favorites = Favorite::all();
            if ($no_profile) {
                return redirect('/mypage/profile'); //初回登録（ログイン）時プロフィール設定画面表示ルートへ
            }else{
                $items_all = Item::all();
                return view('index',compact('items_all','favorites', 'user_id')); //ログイン後、プロフィール設定済であればindexを表示
            }
        }else{
            $items_all = Item::all();
            return view('index', compact('items_all')); //ログインしていなければindexを表示
        }
    }

    // お気に入り
    public function favorite(Request $request)
    {
        $user = Auth::user();
        $user_id = $user->id;
        $item_id = $request->only(['item_id']);
        unset($item_id['_token']);
        $favorite_registered = Favorite::where("user_id", "=", $user_id)->where("item_id", "=", $item_id['item_id'])->first();
        if ($favorite_registered) {
            $favorite_registered->delete();
        } else {
            Favorite::create([
                'user_id' => $user->id,
                'item_id' => $item_id['item_id']
            ]);
        }

        return back();
    }
}