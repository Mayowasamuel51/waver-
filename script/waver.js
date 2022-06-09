$('.navbar-burger').click(function(){
 // $('.navbar-menu').slideToggle();
 $('.navbar-menu').toggleClass('is-active')
})

console.log(22)
function sayHello(){
    const popup  = document.querySelector('#popuper')
  
    // const page = window.location.assign("http://net-informations.com");
    // const page = top.location = "http://net-informations.com";
    // const page ="<object type='text/html' data='{{asset('waver_log_sigh/waver_sighin')}}' ></object>";
    popup.classList.add('open-popup')



    
}
function PopClose(){
    const popup  = document.querySelector('#popuper')
    popup.classList.remove('open-popup')
}

// const btn = document.querySelector('.sell-auto').addEventListener('click',sayHello)

// const btns = document.querySelector('#close').addEventListener('click',PopClose)