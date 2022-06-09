@extends('waver_log_sigh/layoutwaver_sigh_and_login')
@section('log_sigh')
{{-- navbar --}}

<nav class="navbar is-fixed-top  " role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <h2 class="title is-size-4 has-text-weight-bold waver pl-3 waver-ng">Waver.ng</h2>
    </a>
    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
  <div id="navbarBasicExample" class="navbar-menu mt-1 ">
    <div class="navbar-start">
      <a href="" class="navbar-item has-text-weight-semibold ml-4  mt-2"></a>
      <div class="navbar-item has-dropdown is-hoverable ml-6  " >
        {{-- Car Parts --}}
        <a class="navbar-link pl-6 has-text-weight-semibold links  pop ">
          Car Auto
        </a>
        <div class="navbar-dropdown has-text-white">
          <a class="navbar-item ">
            Carmry Auto part
          </a>
          <a class="navbar-item">
            Collrolla Auto Parts
          </a>
          <a class="navbar-item">
            Benz Auto Part
          </a>
          <a class="navbar-item">
            Vollov Auto Part
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            sell cars Part
          </a>
        </div>
      </div>
      {{-- Bike Parts --}}
      <div class="navbar-item has-dropdown is-hoverable ml-6">
        <a class="navbar-link pl-6 has-text-weight-semibold pop ">
          Bike  Auto
        </a>
        <div class="navbar-dropdown">
          <a class="navbar-item">
            Bnaja Auto Part
          </a>
          <a class="navbar-item">
            Jobs
          </a>
          <a class="navbar-item">
            Contact
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            Special
          </a>
        </div>
      </div>
      {{-- Bus Parts  --}}
      <div class="navbar-item has-dropdown is-hoverable ml-6">
        <a class="navbar-link has-text-weight-semibold pop ">
          Bus Auto
        </a>
        <div class="navbar-dropdown">
          <a class="navbar-item">
            About
          </a>
          <a class="navbar-item">
            Jobs
          </a>
          <a class="navbar-item">
            Contact
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            Special
          </a>
        </div>
      </div>
      {{-- Tailers  Parts --}}
      <div class="navbar-item has-dropdown is-hoverable ml-6">
        <a class="navbar-link has-text-weight-semibold pop ">
          Tailers  Auto
        </a>
        <div class="navbar-dropdown">
          <a class="navbar-item">
            About
          </a>
          <a class="navbar-item">
            Jobs
          </a>
          <a class="navbar-item">
            Contact
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            Special
          </a>
        </div>
      </div>
      
    </div>
    <div class="navbar-end mr-5">
      <div class="navbar-item">
        <div class="buttons">
          <a href="{{route('loginPage')}}" type="submit" class="has-text-weight-semibold is-success  is-size-4-desktop  mr-5 log_in  mb-3  ">
            {{-- <strong>How Waver Works</strong> --}}
           Log in
          </a>
          <a href="{{route('sighin')}}" class="button  has-text-weight-bold  px-6 py-5  seller-account has-text-white  ">Sell Auto Parts </a>
        </div>
      </div>
    </div>
  </div>
</nav>

{{-- navbar end here  --}}

{{-- 
<div class="columns mr-6 mb-5  ">
    <div class="column box   is-offset-9-desktop  is-3-desktop mt-4 mr-6   is-offset-2-mobile is-hidden-desktop is-10-mobile"> 
      <header class="title">Qucik SighUp </header>
        <div class="mt-5 mr-4 mt-4 " >
            <p class="">Forget my Password?<a href="" class="pl-2">Recover account</a></p>
    
        </div>
        <button class="button is-dark is-nomral mb-4"><i class="fas fa-lock mr-3 is-meduim"></i> Sighin</button>

    </div>
</div> --}}

{{-- <h2 class="has-text-centered-desktop has-text-centered-mobile is-size-3-desktop  waver pb-5 has-text-weight-bold  mr-6"><a href="">Waver.ng</a></h2> --}}
<section class="hero  is-hidden-desktop  logPage ">
  <div class="hero-body">
     
      <div class="container">
          
          
          <div class="column is-5 is-offset-4">
              
              <h3 class="title has-text-black has-text-centered">Login</h3>
              <hr class="login-hr">
              
              <div class="box">
                  {{-- <figure class="avatar">
                      <img src="https://placehold.it/128x128">
                  </figure> --}}
                  <div class="delete is-large " style="float: right"></div>
                  <header class="title is-size-4 has-text-weight-bold waver pl-3 waver-ng has-text-centered-desktop" >
                      Waver.ng
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




<section class="columns " style="margin-bottom: 112px background-color: aliceblue;">
   
    {{-- is-offset-4-desktop  --}}
   <div class="column  is-4-desktop is-offset-4-desktop box mt-3  is-offset-1-mobile mr-4  addPage"Id="addPage">   {{-- <h2 class="has-text-centered-desktop has-text-centered-mobile is-size-3-desktop  waver pb-5 has-text-weight-bold  "><a href="">Waver.ng</a></h2> --}}

        <h2 class="pb-6 is-size-4-desktop has-text-centered pt-4 has-text-weight-semibold">Create An Account Quick and Easy</h2>
        
        <div class="field ml-4 mr-4">
            <label for="" class="has-text-weight-semibold is-size-5-desktop">Email</label>
            <p class="control has-icons-left has-icons-right mt-4">
              <input class="input" type="email" placeholder="Email">
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
              <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
              </span>
            </p>
          </div>
          <div class="field fields ml-4 mr-4 mt-6">
              <label for="" class="is-flex has-text-weight-semibold is-size-5-desktop">Phone Number <p class="pl-2">(recommended)</p></label>
            <p class="control has-icons-left mt-4">
              <input class="input" type="text" placeholder="Phone Number">
              <span class="icon is-small is-left">
                <i class="fas fa-phone"></i>
              </span>
            </p>
          </div>
          <div class="field fields ml-4 mr-4 mt-6">
            <label for="" class="has-text-weight-semibold pb-6 is-size-5-desktop ">Password</label>
          <p class="control has-icons-left mt-4">
            <input class="input " type="password" placeholder="Password">
            <span class="icon is-small is-left">
              <i class="fas fa-lock"></i>
            </span>
          </p>
        </div>
          <div class="field ml-4 mr-4">
            <p class="control">
              <button class="button seller-account has-text-white is-fullwidth  is-size-5 has-text-weight-semibold"><i class="fas fa-lock mr-3 is-meduim"></i>
               Create Account
              </button>
            </p>
          </div>

          {{-- <div class="field ml-4 mr-4">
            <p class="control">
              <button class="button is-primary is-fullwidth  is-size-5 has-text-weight-semibold"><i class="fas fa-lock mr-3 is-meduim"></i>
               Create Buyer Account
              </button>
            </p>
          </div> --}}
        
          <div class="mt-6 mb-4 has-text-centered ">
          Already have Waver account? <a href="" class="text-black mr-4 is-size-5-desktop has-text-weight-bold ml-2">Log in </a>
           {{-- <a href="" class="text-black ml-4">Sighin As Seller</a> --}}
          </div>

          <div class="mt-6 mb-2  ">
            <p class="pl-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat aliquid rem molestias id illum assumenda quibusdam laboriosam quasi modi  <a href="">Golbal Policy</a>.</p>
          </div>
          
   </div>

   

{{-- <div class="columns mr-6 mb-5  "> 
    <div class="column box is-flex  is-offset-0-desktop  is-3-desktop mt-4 mr-6   is-offset-1-mobile "> 
        <div class="mt-5 mr-4 mt-4 " >
        <p class="">Forget my seller Id<a href="" class="pl-2">Recover Id</a></p>
        <p class="pr-3">Forget my Buyer  Id<a href="" class="pl-2">Recover Id</a></p>
        </div>
        <button class="button is-dark is-nomral mb-4"><i class="fas fa-lock mr-3 is-meduim"></i> Sighin</button>

    </div>
{{-- </div> --}}


     
{{--       
<div class="column box is-flex  is-offset-0-desktop  is-3-desktop mt-4   is-offset-1-mobile boxer is-hidden-mobile"> 
  <header>quick </header>
    <div class="mt-6 mr-4" >
    <p class="">Forget my Password?<a href="" class="pl-2">Recover account</a></p>
    
    </div>
    <button class="button is-dark is-nomral "><i class="fas fa-lock mr-3 is-meduim"></i> Sighin</button>

</div>

     --}}

</section>


























@endsection