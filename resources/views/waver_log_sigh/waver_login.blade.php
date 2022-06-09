@extends('waver_log_sigh/layoutwaver_sigh_and_login')

@section('log_sigh')
{{-- is-fullheight --}}


<section class="hero   ">
    <div class="hero-body">
       
        <div class="container" style="background: transparent">         
            <div class="column is-5-desktop is-offset-4-desktop px-3    is-offset-1-moble">
                
                {{-- <h3 class="title has-text-black has-text-centered  ">Login</h3> --}}
                <hr class="login-hr">
                
                <div class="box">
    
                    {{-- <div class="delete is-large " style="float: right"></div> --}}
                     <header class="title is-size-4-desktop     has-text-weight-bold waver pl-3 waver-ng has-text-centered-desktop has-text-centered-mobile" >
                        <a href="">Waver.ng</a>
                    </header>
                    <form>
                        <div class="field">
                            <div class="control">
                              <label for=""class="has-text-weight-semibold pb-4">Email / Phone </label>
                                <input class="input is-large mt-5" type="email" placeholder="Your Email" autofocus="">
                            </div>
                        </div>
  
                        <div class="field">
                            <div class="control">
                              <label for="" class="has-text-weight-semibold">Password </label>
                                <input class="input is-large mt-5" type="password" placeholder="Your Password">
                            </div>
                        </div>
                        <div class="field">
                            <label class="checkbox">
              <input type="checkbox">
              Remember me
            </label>
                        </div>
                        <button class="button is-block is-success is-large is-fullwidth">Login <i class="fa fa-sign-in" aria-hidden="true"></i></button>
                    </form>
                    <p class="has-text-grey has-text-centered mt-4 is-size-5-desktop">
                      <a href="../">Sign Up</a> &nbsp;·&nbsp;
                      <a href="../">Forgot Password</a> &nbsp;·&nbsp;
                      <a href="../">Need Help?</a>
                  </p>
                </div>
            
            </div>
        </div>
    </div>
  </section>
  




@endsection