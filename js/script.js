let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector(' .header .navbar');

menu.onclick = () =>{

   menu .classList .toggle('fa-times');
   navbar .classList .toggle('active');
}

window.onscroll = () =>{

   menu .classList .remove('fa-times');
   navbar .classList .remove('active');
}


var swiper = new Swiper(".home-slider", {
      loop:true,
      spacebetween:20,
      grabcursor:true,

   pagination: {
     el: ".swiper-pagination",
     clickable:true,
   },
 });

 var swiper = new Swiper(".service-slider", {
   loop:true,
   spacebetween:20,
   grabcursor:true,

pagination: {
  el: ".swiper-pagination",
  clickable:true,
},
breakpoints: {
  450: {
    slidesPerView: 1,
    spaceBetween: 10,
  },
  768: {
    slidesPerView: 2,
    spaceBetween: 20,
  },
  1000: {
    slidesPerView: 3,
    spaceBetween: 30,
  },
},
});

var swiper = new Swiper(".reviews-slider", {
  loop:true,
  spacebetween:20,
  grabcursor:true,

pagination: {
 el: ".swiper-pagination",
 clickable:true,
},
breakpoints: {
 450: {
   slidesPerView: 1,
   spaceBetween: 10,
 },
 768: {
   slidesPerView: 2,
   spaceBetween: 20,
 },
 1000: {
   slidesPerView: 3,
   spaceBetween: 30,
 },
},
});