$(".flex-img img").hover(
  function () {
    $(".flex-img .img-1").css("box-shadow", "none");
    $(".flex-img .img-1").css("bottom", "0");
    $(".flex-img .img-1").css("border-radius", "0");
    $(".flex-img img").css("transition", "ease-in-out .3s");
  },
  function () {
    $(".flex-img .img-1").css("box-shadow", "2px 5px 20px #000000");
    $(".flex-img .img-1").css("bottom", "3rem");
    $(".flex-img .img-1").css("border-radius", "28px");
    $(".flex-img img").css("transition", "ease-in-out .3s");
  }
);

$(".card-1 ").on("mouseenter", function () {
  $(".card-1 .card-text").slideDown(500);
  $(".card-1 .fa-chevron-right").css("display", "none");
  $(".card-1 .fa-chevron-down").css("display", "block");
});

$(".card-3 ").on("mouseenter", function () {
  $(".card-3 .card-text").slideDown(500);
  $(".card-3 .fa-chevron-right").css("display", "none");
  $(".card-3 .fa-chevron-down").css("display", "block");
});

$(".card-4 ").on("mouseenter", function () {
  $(".card-4 .card-text").slideDown(500);
  $(".card-4 .fa-chevron-right").css("display", "none");
  $(".card-4 .fa-chevron-down").css("display", "block");
});

$(".card-1 .fa-chevron-down").click(function () {
  $(".card-1 .card-text").slideUp(500);
  // $(".card-1 .card-text").css("display", "none");
  $(".card-1 .fa-chevron-down").css("display", "none");
  $(".card-2 .card-text").css("transition", "ease-in-out .3s");
  $(".card-1 .fa-chevron-right").css("display", "inline");
  $(".card-1 .card h5").css("border-bottom", "1px solid #E5E5E5 !impotrant");
});
$(document).ready(function () {
$(".card-3 .fa-chevron-down").click(function () {
  $(".card-3 .card-text").slideUp(500);
  $(".card-3 .fa-chevron-down").css("display", "none");
  $(".card-2 .card-text").css("transition", "ease-in-out .3s");
  $(".card-3 .fa-chevron-right").css("display", "inline");
  $(".card-3 .card h5").css("border-bottom", "none");
});
});
$(document).ready(function () {
$(".card-4 .fa-chevron-down").click(function () {
  $(".card-4 .card-text").slideUp(500);
  $(".card-4 .fa-chevron-down").css("display", "none");
  $(".card-2 .card-text").css("transition", "ease-in-out .3s");
  $(".card-4 .fa-chevron-right").css("display", "inline");
  $(".card-4 .card h5").css("border-bottom", "none");
});
});


let Nav = document.querySelector("nav");
let btnNav = document.querySelector(".btn-nav");


let navHome = document.querySelector(".nav-home");
let navAbout = document.querySelector(".nav-about");
let navServies = document.querySelector(".nav-servies");
let navReview = document.querySelector(".nav-review");
let navContant = document.querySelector(".nav-contant");


let backToTop = document.querySelector(".back-to-top")

window.onscroll = function () {
  if (this.scrollY > 80) {
    Nav.classList.add("active");
    btnNav.classList.add("active");
    backToTop.classList.add("active");


    if (this.scrollY > 0) {
      navHome.classList.add("active");
      navReview.classList.remove("active");
      navServies.classList.remove("active");
      navAbout.classList.remove("active");
      navContant.classList.remove("active");
    }

    if (this.scrollY > 1200) {
      navAbout.classList.add("active");
      navHome.classList.remove("active");
    }

    if (this.scrollY > 1600) {
      navServies.classList.add("active");
      navAbout.classList.remove("active");
      navHome.classList.remove("active");
    }

    if (this.scrollY > 2250) {
      navReview.classList.add("active");
      navServies.classList.remove("active");
      navAbout.classList.remove("active");
      navHome.classList.remove("active");
    }

    if (this.scrollY > 2700) {
      navContant.classList.add("active");
      navReview.classList.remove("active");
      navServies.classList.remove("active");
      navAbout.classList.remove("active");
      navHome.classList.remove("active");
    }
  } else {
    Nav.classList.remove("active");
    btnNav.classList.remove("active");
    backToTop.classList.remove("active");
  }
};

// let Nav = document.querySelector("nav");
// let btnNav = document.querySelector(".btn-nav");

// window.onscroll = function () {
//   if (this.scrollY > 80) {
//     Nav.classList.add("active");
//     btnNav.classList.add("active");
//   } else {
//     Nav.classList.remove("active");
//     btnNav.classList.remove("active");
//   }
// };




// start circle **************************************

$(".small-c2").hover(
  function () {
    $(this).css("background-color", "#1B92EC");
    $(".fa-book-open").css("color", "white");
    $(".title1").css("color", "white");
  },
  function () {
    $(this).css("background-color", "white");
    $(".fa-book-open").css("color", "#FF7A01");
    $(".title1").css("color", "#1B92EC");
  }
);
$(".small-c3").hover(
  function () {
    $(this).css("background-color", "#1B92EC");
    $(".fa-university").css("color", "white");
    $(".title2").css("color", "white");
  },
  function () {
    $(this).css("background-color", "white");
    $(".fa-university").css("color", "#FF7A01");
    $(".title2").css("color", "#1B92EC");
  }
);
$(".small-c4").hover(
  function () {
    $(this).css("background-color", "#1B92EC");
    $(".fa-graduation-cap").css("color", "white");
    $(".tittle3").css("color", "white");
  },
  function () {
    $(this).css("background-color", "white");
    $(".fa-graduation-cap").css("color", "#FF7A01");
    $(".tittle3").css("color", "#1B92EC");
  }
);
$(".small-c11").hover(
  function () {
    $(this).css("background-color", "#1B92EC");
    $(".fa-trophy").css("color", "white");
    $(".tittle0").css("color", "white");
  },
  function () {
    $(this).css("background-color", "white");
    $(".fa-trophy").css("color", "#FF7A01");
    $(".tittle0").css("color", "#1B92EC");
  }
);
$(".small-c5").hover(
  function () {
    $(".internal-circle").css("background-color", "#FF7A01");
  },
  function () {
    $(".internal-circle").css("background-color", "#1B92EC");
  }
);

// end circle **************************************



// start swiber **************************************

// var swiper = new Swiper(".mySwiper", {
//   freeMode: true,
//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true,
//   },
//   freeMode: true,

//   breakpoints: {
//     // when window width is >= 320px
//     1: {
//       slidesPerView: 1,
//       spaceBetween: 20,
//     },
//     // when window width is >= 480px
//     426: {
//       slidesPerView: 2,
//       spaceBetween: 30,
//     },
//     // when window width is >= 640px
//     769: {
//       slidesPerView: 3,
//       spaceBetween: 40,
//     },
//   },
// });

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 50,
  freeMode: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

var swiper = new Swiper(".mySwiper", {
//slidesPerView: 2,
// centeredSlides: true,
// centeredSlidesBounds: true,
freeMode:true,
// spaceBetween: 15,
//cssMode: true,

breakpoints: {
// when window width is >= 320px
1: {
slidesPerView: 1,
spaceBetween: 20,
},
// when window width is >= 480px
426: {
slidesPerView: 2,
spaceBetween: 30,
},
// when window width is >= 640px
769: {
slidesPerView: 3,
spaceBetween: 40,
},
},
});

// start swiber **************************************


