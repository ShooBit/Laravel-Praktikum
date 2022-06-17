<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;


class LoginController extends Controller
{
    public function show()
    {
        //error_log('Some message here.');
        return view('login');
    }

    public function login(LoginRequest $request)
    {
        error_log('Some message here.');
        $credentials = $request->getCredentials();

        // if(!Auth::validate($credentials)){
        //    return redirect()->to('login')->with('status', 'Login failed');
        // }
        if ($request->loginid == "admin" &&$request->password=="admin") {
            $request->session()->put('authenticated', time());
            return redirect()->intended('list-researchers');
        }else{
            return redirect()->to('login')->with('status', 'Login failed');

        }
        // $user = Auth::getProvider()->retrieveByCredentials($credentials);

        // Auth::login($user);

        // return $this->authenticated($request, $user);
    }

    protected function authenticated(Request $request, $user) 
    {
        return redirect()->intended();
    }
}