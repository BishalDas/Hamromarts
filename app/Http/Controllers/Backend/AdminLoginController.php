<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends BackendController
{
    public function index(Request $request){
        if($request->isMethod('get')){
            return view($this->backendPath.'login.index');
        }
        if($request->isMethod('post')){
            $this->validate($request,[
                'username' =>'required',
                'password'=> 'required'
            ]);
            $username=$request->username;
            $password=$request->password;


            if (Auth::guard('admin')->attempt(['username'=>$username,'password'=>$password]))
            {
                return redirect()->intended(route('admin-dashboard'));
            }
            else{
                return redirect()->back()->with('error','invalid access');
            }

        }

    }
    public function logout(Request $request){
        Auth::guard('admin')->logout();
        return redirect()->intended(route('admin-login'));
    }
}
