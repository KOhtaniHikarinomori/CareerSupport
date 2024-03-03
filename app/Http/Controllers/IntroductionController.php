<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * 紹介用コントローラー
 */
class IntroductionController extends Controller
{
    /**
     * 処理の概要を書く
     * 
     * @param データ型 引数があれば書く（なければ削除）
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index()
    {


        // 登録完了場面にリダイレクト
        return redirect()->route('resister.complete');
    }
}
