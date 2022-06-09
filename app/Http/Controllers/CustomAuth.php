<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\testing;
class CustomAuth extends Controller{
    //

    public function  login(){
         return view('login');
    }

    public function register(){
        return view('register');
    }


    public function registeruser(Request $request){
        $validation = $request->validate([
            'username'=> 'required|unique:testings',
            'email'=>'required|unique:testings',
            'phone'=>'required',
            'word'=>'required'

        ]);



      $res =   testing::create([
            'username'=> $request->input('username'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'word'=>$request->word

        ]);


        if ($res) {
            return back()->with('success', 'You have Registerd ');
        }else{
            return back()->with('fail', 'something worng');
        }
    }


    public function loginuser(Request $request){
          $validation = $request->validate([
            // 'username'=> 'required|unique:testings',
            'email'=>'required',
        ]);
        $user = testing::where('email','=',$request->email)->first(); ;
        if ($user) {
            $request->session()->put('', $user->get());
            return redirect('dashboard');            
        }else{
            return back()->with('fail', 'This email is not registered');
        }




    }

    public function dashboard(){
        return "Welcome to dashboard";
    }
}
