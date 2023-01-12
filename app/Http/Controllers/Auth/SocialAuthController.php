<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite, Auth, Redirect, Session, URL;
use App\Models\User;
use App\Models\Role_User;
use App\Models\Roles;
use App\Models\Contact;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use App\Providers\RouteServiceProvider;

class SocialAuthController extends Controller
{
    protected $redirectTo = RouteServiceProvider::DASHBOARD;
    protected $redirectToHome = RouteServiceProvider::HOME;
    protected $redirectToLogin = RouteServiceProvider::TO_LOGIN;

    public function redirectToProvider($provider)
    {
        if(!Session::has('pre_url'))
        {
            Session::put('pre_url', URL::previous());
        }else
        {
            if(URL::previous() != URL::to('login')) Session::put('pre_url', URL::previous());
        }
        return Socialite::driver($provider)->redirect();
    }  

    public function handleProviderCallback($provider)
    {
        try
        {
            Log::info('start Socialite:google');
            $user = Socialite::driver('google')->user();
            //Log::info(print_r($user, true));
            $social_user = $this->findOrCreateUser($user);

            if(isset($social_user))
            {
                if($this->postLogin($social_user))
                {
                    Log::info('Socialite login success');
                    return redirect($this->redirectTo);
                }
                else
                {
                    return redirect($this->redirectToLogin);
                }
            }
            else
            {
                return redirect($this->redirectToLogin)->with(['flash_message'=>'Vui lòng đăng nhập lại']);
            }
        }
        catch (\Exception $e) 
        {
            Log::info($e->getMessage());
            return redirect($this->redirectToLogin)->with(['flash_message'=>'Vui lòng đăng nhập lại']);
        }
    }

    protected function findOrCreateUser($user)
    {
        try
        {
            $checkUser = User::where('email', $user->email)->first();
            if(isset($checkUser))
            {
                return $checkUser;
            }
            else
            {
                $user = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => Hash::make('passw0rd123'),
                    'blocked' => 0,
                    'provider' => empty($user->provider) ? "google" : $user->provider,
                    'provider_id' => empty($user->id) ? "" : $user->id
                ]);

                Role_User::insertRoleUser($user->id, false);
                
                return $user;
            }
        }
        catch (\Exception $e) 
        {
            Log::info($e->getMessage());
            return null;
        }
    }

    protected function postLogin($user)
    {
        Log::info('start postLogin');
        try
        {
            $credentials = ['email' => $user->email, 'password' => 'passw0rd123'];
            if(Auth::attempt($credentials))
            {
                Log::info('postLogin done');
                return true;
            }
            else
            {
                return false;
            }
        }
        catch (\Exception $e) 
        {
            Log::info($e->getMessage());
            return false;
        }
    }    
}
