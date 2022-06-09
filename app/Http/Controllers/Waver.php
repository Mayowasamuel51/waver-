<?php

namespace App\Http\Controllers;
use  App\Http\Requests;
use Illuminate\Http\Request;
use App\Rules\Uppercase;
use App\Models\testing;


class Waver extends Controller
{
    //

   
    public function create(){
        return view('data');
    }

    public function c(){
        return view('runner');
    }

    public function storeblog(Request $request){
       
        $request->validate([
            'username'=>'required|unique:testings',
            'word'=>'required',
            'phone'=>'required',
            'email'=>'required|unique:testings'

        ]);

        testing::create([

            'username'=>$request->input('username'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'word'=>$request->input('word')
        ]);

        return redirect('create');
        // return redirect()->back()->with(session()->flash('success', 'Ticket Fare Added Successfully'));



    }


    



}
