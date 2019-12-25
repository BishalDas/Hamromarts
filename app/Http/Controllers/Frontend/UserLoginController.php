<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\VerifyMail;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class  UserLoginController extends FrontendController
{
    public function index(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('Frontend/Login/index');
        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'username' => 'required',
                'password' => 'required'
            ]);
            $username = $request->username;
            $password = $request->password;


            if (Auth::guard('web')->attempt(['username' => $username, 'password' => $password])) {

                return redirect()->intended(route('user-info'));
            } else {
                return redirect()->back()->with('error', 'invalid access');
            }

        }

    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        return redirect()->intended(route('login'));
    }

    public function userdetails()
    {
        return view($this->pagePath .'Users.user-info',$this->data);

    }

    public function add(Request $request){
        if ($request->isMethod('get')) {
            return view('Frontend/Login/register');
        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'name' => 'required|min:3|max:20',
                'username' => 'required|min:3|max:20|unique:users,username',
                'email'=>'required|email|unique:users,email',
                'password'=> 'required',
                'password_confirmation' => 'required|same:password',
                'upload' => 'mimes:jpg,jpeg,png,gif|max:2048'
            ]);
            $user = new User();
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);

            if ($request->hasFile('upload')) {
                $image = $request ->file('upload');
                $ext = $image->getClientOriginalExtension();
                $imageName = md5(microtime()) . '.' . $ext;
                $fileUploadPath = public_path('backend/images/users/');
                if (!$image->move($fileUploadPath, $imageName)) {
                    return redirect()->back();
                }
                $user->image = $imageName;
            }
            if ($user->save()) {
              //  dd('hel');
                Mail::to($user->email)->send(new VerifyMail($user));

                return redirect()->route('login');

            }

        }

    }

    public function passwordreset(){
        return view('Frontend/Login/reset');
    }
    public function sendmail(){

    }
}
