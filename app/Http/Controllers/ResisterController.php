<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResisterRequest;
use Illuminate\Http\Request;

/**
 * 登録用コントローラー
 */
class ResisterController extends Controller
{
    /**
     * 登録画面を表示
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        // 登録画面を表示
        return view('resister.index');
    }

    /**
     * 確認画面を表示
     * 
     * @param \App\Http\Requests\ResisterRequest $request
     * @return \Illuminate\Contracts\View\View
     */
    public function confirm(ResisterRequest $request)
    {
        // バリデーション済みのリクエストデータを取得
        $validated = $request->validated();
        // 表示するデータを取得

        // 確認画面を表示
        return view('resister.confirm', compact(''));
    }

    /**
     * 登録処理
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function resister(Request $request)
    {
        // 登録処理


        if ($request->boolean('')) {
            // 紹介のチェックが入っていた場合
            // 紹介処理を行う
            return redirect()->route('introduction.index');
        }
        // 完了画面にリダイレクト
        return redirect()->route('resister.complete');
    }

    /**
     * 完了画面を表示
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function complete()
    {
        // 完了画面を表示
        return view('resister.complete');
    }
}
