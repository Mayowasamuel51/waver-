<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class waverStart extends Controller{

    public function login(){
        return view('waver_log_sigh.waver_login');
    }

    public function sighin(){
        return view('waver_log_sigh.waver_sighin');
    }

    public function account(){
        return view('waver_log_sigh.waver_sighin');
    }
    public function accounting(){
        return view('waver_log_sigh.waver_sighin');
    }
    public function loginPage(){
        return view('waver_log_sigh.waver_login');
    }

    public function okay(){
        return view('waver_homepage.waverhomepage');
        // return "hi";
    }


}
