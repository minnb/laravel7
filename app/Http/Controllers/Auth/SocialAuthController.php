<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite, Auth, Redirect, Session, URL;
use App\Models\User;

class SocialAuthController extends Controller
{
    public function redirectToProvider($provider)
    {
        // if(!Session::has('pre_url')){
        //     Session::put('pre_url', URL::previous());
        // }else{
        //     if(URL::previous() != URL::to('login')) Session::put('pre_url', URL::previous());
        // }
        return Socialite::driver($provider)->redirect();
    }  

    /**
     * Lấy thông tin từ Provider, kiểm tra nếu người dùng đã tồn tại trong CSDL
     * thì đăng nhập, ngược lại nếu chưa thì tạo người dùng mới trong SCDL.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        try
        {
            $user = Socialite::driver($provider)->user();
            $authUser = $this->findOrCreateUser($user);
            if($authUser)
            {
                Auth::login($authUser);

                return redirect()->route('get.dashboard');
            }
            else
            {
                return back()->withErrors(['errors'=>'Lỗi đăng nhập'])->withInput()->with(['flash_message'=>'Vui lòng đăng nhập lại']);
            }
        }
        catch (\Exception $e) 
        {
            return back()->withErrors($e->getMessage())->withInput();
        }

        //return Redirect::to(Session::get('pre_url'));
    }

    public function findOrCreateUser($user)
    {
        $authUser = User::where('email', $user->email)->first();
        if($authUser)
        {
            return $authUser;
        }
        else
        {
            return User::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => bcrypt('passw0rd123'),
                'blocked' => 0
            ]);
        }
    }

   
}
