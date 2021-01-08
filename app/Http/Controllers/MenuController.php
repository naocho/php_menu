<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MenuController extends Controller
{
    public function index() {
        $view = view('index');

        //クエリビルダー
        $user = DB::table('users')
        // 指定する場合の書き方
        // ->select('name')
        // ->addSelect('email')
        // ->addSelect('email_verified_at')
        // ->where('name','フシミナオキ')
        // ーーーーーーーーーーーーーー
        // テーブルの追加はinsert、指定のIDにレコードを追加はinsertGetid、
        // データの上書きをするときはwhereでIDを指定してupdateで上書き

        // getは複数のレコードを取る際に使用
        ->get();

        $view->user = $user;

        return $view;
    }

    // public function store(){

    //     return view('create');
    // }

    // public function create(Request $item){
    
    //     $all_inputs = $item->all();

    //     return view('index');
    // }

    // public function store(){

    //     return view('create');
    // }

    public function destroy()
    {
        return view('index');
    }
}
