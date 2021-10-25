<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class DetailController extends Controller
{
    //
    public function create(Request $request){
      // $providerUser = Socialite::driver('Twitter')->user();
      // // 既に存在するユーザーかを確認
      // $socialUser = SocialUser::where('provider_user_id', $providerUser->id)->first();
      // if ($socialUser) {
      //   // 既存のユーザーはログインしてトップページへ
      //     Auth::login($socialUser->user, true);
      //     return redirect('/');
      // }
      // $socialUser = User::find()->get()->socialUsers();
      // $user = User::find(1);
      return json_encode(Auth::user());
    }
}
