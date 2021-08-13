<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
        protected function redirectTo(){
            if(Auth()->user()->roles = 'admin || Admin'){
                return route('admin.dashboard');
            }
            else if (Auth()->user()->roles = 'president') {
                return route('president.dashboard');
            }
            else if (Auth()->user()->roles = 'vice-president') {
                return route('vice-president.dashboard');
            }
            else if (Auth()->user()->roles = 'secretary') {
                return route('secretary.dashboard');
            }
            else if (Auth()->user()->roles = 'treasurer') {
                return route('treasurer.dashboard');
            }
            else if (Auth()->user()->roles = 'auditor') {
                return route('auditor.dashboard');
            }
            else if (Auth()->user()->roles = 'representative') {
                return route('representative.dashboard');
            }
            else if (Auth()->user()->roles = 'member') {
                return route('members.dashboard');
            }
            else{
                return "/";
            };
        }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'email'=>'required|email',
            'student_number'=>'required',
            'password'=>'required',
        ]);

        if (Auth()->attempt(array('email'=>$input['email'], 'student_number'=>$input['student_number'], 'password'=>$input['password']))) {
            if (Auth()->user()->roles == 'admin') {
                return redirect()->route('admin.dashboard');
            }
            elseif (Auth()->user()->roles == 'president') {
                return redirect()->route('president.dashboard');
            }
            elseif (Auth()->user()->roles == 'student_affairs') {
                return redirect()->route('studentaffairs.dashboard');
            }
            elseif (Auth()->user()->roles == 'vice-president') {
                return redirect()->route('vice-president.dashboard');
            }
            elseif (Auth()->user()->roles == 'secretary') {
                return redirect()->route('secretary.dashboard');
            }
            elseif (Auth()->user()->roles == 'auditor') {
                return redirect()->route('auditor.dashboard');
            }
            elseif (Auth()->user()->roles == 'treasurer') {
                return redirect()->route('treasurer.dashboard');
            }
            elseif (Auth()->user()->roles == 'representative') {
                return redirect()->route('representative.dashboard');
            }
            elseif (Auth()->user()->roles == 'member') {
                return redirect()->route('members.dashboard');
            }
        }
        else{
            return redirect()->route('login')->with('error','Emails and password are incorrect');
        }
    }
}
