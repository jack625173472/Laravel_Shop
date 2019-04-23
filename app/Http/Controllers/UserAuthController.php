<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class UserAuthController extends Controller {
    //註冊頁
    public function signUpPage(){
        $binding = [
            'title' => '註冊',
        ];
        return view('auth.signUp', $binding);
    }

    //登入頁
    public function signInPage(){
        $binding = [
            'title' => '登入',
        ];
        return view('auth.signIn', $binding);
    }
}