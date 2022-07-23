<?php

namespace App\Http\Controllers;

use Auth;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;


class SocialLoginController extends Controller
{
    public function loginwithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function cbGoogle()
    {
        try {
     
            $user = Socialite::driver('google')->user();
      
            $userWhere = User::where('google_id', $user->id)->first();
      
            if($userWhere){
      
                Auth::login($userWhere);
     
                return redirect('/home');
      
            }else{
                $getUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'oauth_type'=> 'google',
                    'password' => encrypt('admin595959')
                ]);
     
                Auth::login($getUser);
      
                return redirect('/home');
            }
     
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
