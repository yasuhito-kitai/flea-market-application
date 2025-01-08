<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Item;

class ItemController extends Controller
{
    // 店舗一覧
    public function index()
    {
        if (Auth::check()) {

            $user = Auth::user();
            $user_id = $user->id;
            $no_profile = User::where("id", "=", $user_id)->whereNull("address")->first();

            if ($no_profile) {
                return redirect('/mypage/profile'); //初回登録（ログイン）時プロフィール設定画面表示ルートへ
            }else{
                $items_all = Item::all();
                return view('index',compact('items_all')); //ログイン後、プロフィール設定済であればindexを表示
            }
        }else{
            $items_all = Item::all();
            return view('index', compact('items_all')); //ログインしていなければindexを表示
        }
    }


}