<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SacialAuthController extends Controller
{
    public finction redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        //ユーザーがすでに存在するか確認
        $user = User::where('email', $googleUser->getEmail())->first();

        if(!$user){
            //新規ユーザーを登録
            $user = User::create([
                'name'      => $googleUser->getName(),
                'email'     => $googleUser->getEmail(),
                'google_id' => $googleUser->getId(),
                'password'  => bcrypt('password'),  //パスワードを適切に設定
            ])
        }

        //ユーザーにログインさせる
        Auth::login($user);

        return redirect('/home');
    }
}
