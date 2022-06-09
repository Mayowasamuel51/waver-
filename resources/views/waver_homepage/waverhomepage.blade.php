@extends('waver_homepage/waverlayout')
@section('content')
{{-- This is the Landing for WaverFind --}}
{{-- Start of Navbar --}}



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
          <a class="button is-success is-outlined  is-half mr-5">
            {{-- <strong>How Waver Works</strong> --}}
            <strong>How To Buy </strong>
          </a>
          
            {{-- <i class="fa-solid fa-arrow-right-to-bracket mr-4"></i> --}}
            <a href="{{route('sighin')}}" class="button  has-text-weight-bold  px-6 py-5 sell-auto has-text-white  ">Sell Auto Parts </a>
        </div>
      </div>
    </div>
  </div>
</nav>

{{-- End of navbar  --}}
{{--This is the Search bar  --}}
<div class="columns " style="margin-top:90px">
  <div class="column ml-5  is-mobile is-centered is-vcentered  image-size is-variable image-side added">
    <p class="title is-size-2-desktop pop  is-size-2-desktop is-size-3-mobile has-text-weight-bold ">
      FIND AUTO PART DEALERS <br>
    AROUND NIGERIA </p>
    <br>
    {{-- <a href="" class="button is-success  has-text-weight-bold pop px-6">Buy Your Auto Part's </a> --}}

    <a href="{{route('sighin')}}" class="button  has-text-weight-bold pop px-6 py-5 sell-auto has-text-white  ">Sell Auto Parts </a>
    {{-- <button  type="submit" class="button  has-text-weight-bold pop px-6 py-5 sell-auto has-text-white  "id="sell-auto">Sell Auto Parts </button> --}}
    
  </div>
  <div class="column is-hidden-mobile tyres ml-6">
    <img src=" {{ asset('carparts/big.png') }}  "class="img-change" alt="">
  </div>
  <div class="column is-hidden-mobile ml-6">
    <img src=" {{ asset('carparts/brake.jpg') }}  " alt="">
  </div>
  <div class="column is-hidden-mobile ml-6">
    <img src=" {{ asset('carparts/battery.jpg') }}  " alt="">
  </div>
</div>
{{-- end of  search bar  --}}
<div class="columns searchtop">
  
  <div class="column column is-offset-4-desktop is-12-desktop is-offset-1-mobile mt-5" >
    <p class="has-text-weight-semibold pb-1 pl-2 is-size-4">Get Auto Parts faster </p>
    <div class="">
      <div class="field ">
        <p class="control has-icons-left has-icons-right">
          <input class="input is-3-desktop column " type="email" placeholder="search ">
          <span class="icon is-small is-left">
            <i class="fas fa-search"></i>
          </span>
          
        </p>
        {{-- <input type="submit" value="Find Parts" class="button mt-2 has-background-grey has-text-white"> --}}
      </div>
    </div>
    
  </div>
</div>
{{-- uploading part  --}}
<section  class="column container  section.img is-offset-1-desktop is-offset-1-mobile">
  <div class="">
    <h1 class="py-2  is-small pl-4 has-text-weight-semibold "> Deals Around You <a href="" class="pl-4 pb-3"><i class="fa-solid fa-location-dot px-4"></i>Change location</a></h1>
  </div>
  <div class="columns ">
    <div class="card column is-2-desktop is-12-mobile is-offset-1-mobile mt-4">
      <header class="card-header">
        <p class="card-header-title">
          Wheel
        </p>
        
      </header>
      
      <figure class="image is-128x128 ml-6 mt-3">
        <img src="{{ asset('carparts/download.jpg') }}" alt="Placeholder image" class="">
      </figure>
      <div class="card-content has-text-weight-semibold   ">
        <p>Price:    <span>9000</span> </p>
        <p class="pb-3">Location: <span>Lagos</span> <span>Mushin</span> </p>
        <a href="" class="button is-outlined  is-small">More Info</a>
      </div>
      
      
      
    </div>
    <div class="card column is-2-desktop is-12-mobile is-offset-1-mobile mt-4">
      <header class="card-header">
        <p class="card-header-title">
          Wheel
        </p>
        
      </header>
      
      <figure class="image is-128x128 ml-6 mt-3">
        <img src="{{ asset('carparts/download.jpg') }}" alt="Placeholder image" class="">
      </figure>
      <div class="card-content has-text-weight-semibold   ">
        <p>Price:    <span>9000</span> </p>
        <p class="pb-3">Location: <span>Lagos</span> <span>Mushin</span> </p>
        <a href="" class="button is-outlined  is-small">More Info</a>
      </div>
      
      
      
    </div>
    <div class="card column is-2-desktop is-12-mobile is-offset-1-mobile mt-4">
      <header class="card-header">
        <p class="card-header-title">
          Wheel
        </p>
        
      </header>
      
      <figure class="image is-128x128 ml-6 mt-3">
        <img src="{{ asset('carparts/download.jpg') }}" alt="Placeholder image" class="">
      </figure>
      <div class="card-content has-text-weight-semibold   ">
        <p>Price:    <span>9000</span> </p>
        <p class="pb-3">Location: <span>Lagos</span> <span>Mushin</span> </p>
        <a href="" class="button is-outlined  is-small">More Info</a>
      </div>
      
      
      
    </div>
    <div class="card column is-2-desktop is-12-mobile is-offset-1-mobile mt-4">
      <header class="card-header">
        <p class="card-header-title">
          Wheel
        </p>
        
      </header>
      
      <figure class="image is-128x128 ml-6 mt-3">
        <img src="{{ asset('carparts/download.jpg') }}" alt="Placeholder image" class="">
      </figure>
      <div class="card-content has-text-weight-semibold   ">
        <p>Price:    <span>9000</span> </p>
        <p class="pb-3">Location: <span>Lagos</span> <span>Mushin</span> </p>
        <a href="" class="button is-outlined  is-small">More Info</a>
      </div>
      
      
      
    </div>
    <div class="card column is-2-desktop is-12-mobile is-offset-1-mobile mt-4">
      <header class="card-header">
        <p class="card-header-title">
          Wheel
        </p>
        
      </header>
      
      <figure class="image is-128x128 ml-6 mt-3">
        <img src="{{ asset('carparts/download.jpg') }}" alt="Placeholder image" class="">
      </figure>
      <div class="card-content has-text-weight-semibold   ">
        <p>Price:    <span>9000</span> </p>
        <p class="pb-3">Location: <span>Lagos</span> <span>Mushin</span> </p>
        <a href="" class="button is-outlined  is-small">More Info</a>
      </div>
      
      
      
    </div>
    
  </div>
  {{--better search nav   --}}
  <div class="columns is-hidden-desktop has-text-centered">
    <div class="box column mt-6">
    <header class="get-text  is-size-4-mobile">FIND   PART NEEDED FOR YOUR MACHINE</header>
    <div class="">
      <ul class="mt-4  un-list">
        <li><a href="">faccbook</a></li>
        <li><a href="">whatapp</a></li>
        <li><a href="">Jumla</a></li>
        <li><a href="">faccbook</a></li>
        
      </ul>
      
    </div>
    <div class="">
      <ul class="mt-4  un-list">
        <li><a href="">faccbook</a></li>
        <li><a href="">whatapp</a></li>
        <li><a href="">Jumla</a></li>
        <li><a href="">faccbook</a></li>
        
        
      </ul>
      
    </div>
    <div class="">
      <ul class="mt-4  un-list">
        <li><a href="">faccbook</a></li>
        <li><a href="">whatapp</a></li>
        <li><a href="">Jumla</a></li>
        <li><a href="">Jumla</a></li>
      </ul>
      
    </div>
    <div class="">
      <ul class="mt-4  un-list">
        <li><a href="">faccbook</a></li>
        <li><a href="">whatapp</a></li>
        <li><a href="">Jumla</a></li>
        <li><a href="">Jumla</a></li>
      </ul>
      
    </div>
  </div>
</div>
{{-- better search nav  --}}
{{-- Specai Auto load --}}
<div class="columns  mt-6 ">
  <div class="column card is-info card-1 is-5-desktop is-offset-0-mobile mr-3 mt-3 ">
  <header class="card-header-title">Carmy Engines </header>
  <div class="card-content is-flex">
    <div class="check ">
      <figure class="image  ">
        <img src="{{ asset('carparts/download.jpg') }}" alt="Placeholder image" class="">
      </figure>
      <a href=""class="is-size-6 is-link is-small mt-3"><strong>check Info</strong></a>
    </div>
    <div class="check ">
      <figure class="image ml-2">
        <img src="{{ asset('carparts/download.jpg') }}" alt="Placeholder image" class="">
      </figure>
      <a href=""class=" is-link is-small ml-2 mt-3 is-size-6"><strong>check Info</strong></a>
    </div>
    
    
  </div>
  <div class="card-content is-flex">
    <div class="check ">
      <figure class="image ml-4">
        <img src="{{ asset('carparts/download.jpg') }}" alt="Placeholder image" class="">
      </figure>
      <a href=""class="is-size-6 is-link is-small ml-4 mt-3"><strong>check Info</strong></a>
    </div>
    <div class="check ">
      <figure class="image ml-5">
        <img src="{{ asset('carparts/download.jpg') }}" alt="Placeholder image" class="">
      </figure>
      <a href=""class="is-size-6 is-link is-small ml-4 mt-3"><strong>check Info</strong></a>
    </div>
  </div>
  <div class="card-footer ">
    <a href="" class="card-footer-item has-text-grey-dark mt-5  is-half-desktop button">Load More </a>
  </div>
</div>
<div class="card column  is-7-desktop is-12-mobile mt-3">
<header class="card-header-title pl-6">Loto Parts</header>
<div class="card-content is-flex">
  <div class="check ">
    <figure class="image ml-6">
      <img src="{{ asset('carparts/download.jpg') }}" alt="Placeholder image" class="">
    </figure>
    <a href=""class="is-size-6 is-link is-small ml-6 mt-3"><strong>check Info</strong></a>
  </div>
  <div class="check ">
    <figure class="image ml-6">
      <img src="{{ asset('carparts/download.jpg') }}" alt="Placeholder image" class="">
    </figure>
    <a href=""class="is-size-6 is-link is-small ml-6 mt-3"><strong>check Info</strong></a>
  </div>
</div>
<div class="card-content is-flex">
  <div class="check ">
    <figure class="image ml-3">
      <img src="{{ asset('carparts/download.jpg') }}" alt="Placeholder image" class="">
    </figure>
    <a href=""class="is-size-6 is-link is-small ml-6 mt-3"><strong>check Cars </strong></a>
  </div>
  <div class="check ">
    <figure class="image ml-3">
      <img src="{{ asset('carparts/download.jpg') }}" alt="Placeholder image" class="">
    </figure>
    <a href=""class="is-size-6 is-link is-small ml-6 mt-3"><strong>check Info</strong></a>
  </div>
</div>



</div>

{{-- </div> --}}
</div>
<div class="columns quick-dave ">
<div class="box column  has-text-centered  is-hidden-mobile is-10-desktop ml-3">
<header class="title is-size-4 get-text ">GET ALL AUTO  PART NEEDED FOR YOUR MACHINE </header>
<div class="">
<ul class="mt-4  un-list  has-text-black">
<li><a href="" class=" ">Cramy Brakes </a></li>
<li><a href="">Cramy Bumber </a></li>
<li><a href="">Jeep Mirrior</a></li>
<li><a href="">whatapp</a></li>
<li><a href="">Jumla</a></li>
<li><a href="">Jumla</a></li>
<li><a href="">whatapp</a></li>
<li><a href="">Jumla</a></li>
<li><a href="">Jumla</a></li>
<li><a href="">Camry side mirror</a></li>
</ul>

</div>
<div class="">
<ul class="mt-4  un-list">
<li><a href="">Big tryes </a></li>
<li><a href="">Beze boot</a></li>
<li><a href="">Door</a></li>
<li><a href="">whatapp</a></li>
<li><a href="">Jumla</a></li>
<li><a href="">Jumla</a></li>
<li><a href="">whatapp</a></li>
<li><a href="">Jumla</a></li>
<li><a href="">Jumla</a></li>
<li><a href="">whatapp</a></li>
<li><a href="">Jumla</a></li>
<li><a href="">Jumla</a></li>
<li><a href="">Boneet </a></li>
</ul>

</div>
<div class=" mb-6">
<ul class="mt-4  un-list">
<li><a href="">whatapp</a></li>
<li><a href="">Jumla</a></li>
<li><a href="">Jumla</a></li>
<li><a href="">faccbook</a></li>
<li><a href="">whatapp</a></li>
<li><a href="">Jumla</a></li>
<li><a href="">Jumla</a></li>
<li><a href="">whatapp</a></li>
<li><a href="">Jumla</a></li>
<li><a href="">Jumla</a></li>
<li><a href="">whatapp</a></li>
<li><a href="">Jumla</a></li>
<li><a href="">Jumla</a></li>
</ul>

</div>
</div>
</div>
</section>
{{-- buiding the footer --}}
<section class="hero is-small  footer-section ">
<div class="hero-body has-text-centered">
<div class="columns hero-hold">
<div class="card column   footer-card ">
<div class="card-content has-text-white">

<h1 class=" is-size-4 pl-3"><a href="" class="has-text-black">About Us</a></h1>
<ul class="">
  {{--  <li class="pt-2 is-dark"><a href="" class="has-text-white">Who we are </a></li>
  <li class="pt-2"><a href="" class="has-text-white">Privacy Policy</a></li>
  <li class="pt-2"><a href="" class="has-text-white">Billing Policy</a></li> --}}
  <li class="pt-2 is-dark"><a href="" class="has-text-white">Who we are </a></li>
  <li class="pt-2"><a href="" class="has-text-white">Privacy Policy</a></li>
  <li class="pt-2"><a href="" class="has-text-white">Billing Policy</a></li>
</ul>
</div>

</div>
<div class="card column footer-card ">
<div class="card-content">
<h1 class=" is-size-4 has-text-black pl-4">Learn</h1>
<ul>
  <li class="pt-2"><a href="" class="has-text-white">How to sell on Waver</a></li>
  <li class="pt-2"><a href=""class="has-text-white">How Buy on Waver </a></li>
  <li class="pt-2"><a href=""class="has-text-white">How to Expand Your Bussisnes with Waver</a></li>
  <li class="pt-2"><a href=""class="has-text-white">Tips on Meeting with a Buyer </a></li>
</ul>
</div>
</div>


<div class="card column footer-card ">
<div class="card-content">
<h1 class="is-size-4 is-primary has-text-black pl-4">Support</h1>
<ul>
  <li class="pt-2"><a href=""class="has-text-white">FAQ</a></li>
  <li class="pt-2"><a href=""class="has-text-white">Saftey Tips</a></li>
  <li class="pt-2"><a href=""class="has-text-white">Contact us </a></li>
  <li class="pt-2"><a href="mail:" class="has-text-white">@SupportonWaver.ng </a></li>
</ul>
</div>
</div>


</div>
<div class="has-text-centered has-text-black">

<p>Waver.ng © 2022  </p>
</div>
</div>
{{-- <div class="has-text-centered">

<p>Waver.ng © 2022 Waver.ng </p>
</div> --}}
</section>
@endsection