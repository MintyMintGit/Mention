<?php

namespace App\Http\Controllers;

use App\User;
use App\Mailers\AppMailer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    /**
     * Create a new registration instance.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function postLogin(Request $request)
    {

        $this->validate($request, [
            'username' => 'required|string|max:255|min:1',
            'password' => 'required'
        ]);
        //return redirect()->back();
        //$request->username;
        //$request->password;
        //$errors[] = "Error login";
        return view('auth.login');
    }



    /**
     * Perform the registration.
     *
     * @param  Request   $request
     * @param  AppMailer $mailer
     * @return \Redirect
     */
    public function postRegister(Request $request, AppMailer $mailer)
    {
        $this->validate($request, [
            'first_name' => 'required|string|max:255|min:1',
            'last_name' => 'required|string|max:255|min:1',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|regex:@[A-Z]@|regex:@[a-z]@|regex:@[0-9]@|regex:[\W]|confirmed',
            'password_confirmation' => 'required'
        ]);
        $request->request->add(['email_key' => $key = md5(microtime().rand())]);
        $user = User::create($request->all());
        //$mailer->sendEmailConfirmationTo($user);
//        flash('Please confirm your email address.');
        return redirect()->back();
        //return view('auth.register');
    }
    /**
     * Confirm a user's email address.
     *
     * @param  string $token
     * @return mixed
     */
    public function confirmEmail($token)
    {
        User::whereToken($token)->firstOrFail()->confirmEmail();
        flash('You are now confirmed. Please login.');
        return redirect('login');
    }
}
