<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Product;

class CommonController extends Controller
{
    public function index(){
        Auth::logout();
        return view('home');
    }

    public function signIn(){
        return view('common.signIn');
    }

    public function signOut(){
        Auth::logout();
        return redirect()->route('home');
    }

	public function postSignUp(Request $request)
    {
        $this->validate($request,[
                'email' => 'required|email|unique:users',
                'first_name' => 'required|max:120',
                'last_name' => 'required|max:120',
                'password' => 'required|min:4'
            ]);

        $email = $request['email'];
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $password = bcrypt($request['password']);
        
        $user = new User();
        $user->email=$email;
        $user->name = $first_name ." " . $last_name;
        $user->password = $password;
        $user->user_type_id = 2;
        $user->save();

        Auth::login($user);

        return redirect()->route('dashboard');

    }

    public function postSignIn(Request $request)
    {
        $this->validate($request,[
                'email' => 'required',
                'password' => 'required'
            ]);

        if(Auth::attempt(['email' => $request['email'],'password' => $request['password'] ]) ){
        
            //var_dump(Auth::user()->userType());exit;
            return redirect()->route('dashboard');
        }
        return redirect()->back();
    }

    public function getDashboard()
    {
        return view('dashboard');
    }

    

}		