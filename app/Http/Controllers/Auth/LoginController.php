<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Models\User;
use App\Models\Role_User;
use App\Models\Roles;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::DASHBOARD;
    protected $redirectToHome = RouteServiceProvider::HOME;
    protected $redirectToLogin = RouteServiceProvider::TO_LOGIN;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('admin');
    }

    public function getLogin()
    {
        if(Auth::user())
        {
            if (User::checkUserRole(Auth::user()->email) == 'guest')
            {
                Log::info('redirect home ');
                return redirect()->route('home');
            }
            else
            {
                Log::info('redirect dashboard');
                return redirect()->intended('dashboard');
            }
        }
        return  view('auth.login');
    }

    protected function postLogin(Request $request)
    {
        Log::info('start postLogin');
        try
        {
            $credentials = ['email' => $request->email, 'password' => $request->password];
            if(Auth::attempt($credentials))
            {
                return redirect($this->redirectTo);
            }
            else
            {
                return redirect($this->redirectToLogin)->with(['errors'=>'Vui lòng đăng nhập lại']);
            }
        }
        catch (\Exception $e) 
        {
            Log::info($e->getMessage());
            return redirect($this->redirectToLogin)->with(['errors'=>$e->getMessage()]);
        }
    }    
}
