//Fonts 

   WebFont.load({
     google: {
       families: ['Poppins:300,400,600,700,900','']
     }
   });


//Menus Dropdowns
  $( document ).ready(function() {
    //Main Menus
    $( "<span class='menu-drop'><i class='fas fa-chevron-down'></i></span>" ).appendTo( "#header .menu-item-has-children > a" );
    $( "#header .menu-item-has-children" ).mouseenter(function() {
      if($(window).width() >= 975) {
        $(".sub-menu-wrap", this).stop().slideDown();
        $(this).addClass('sub-menu-active')
      }
    });
    $( "#header .menu-item-has-children" ).mouseleave(function() {
      if($(window).width() >= 975) {
        $(".sub-menu-wrap", this).stop().slideUp();
        $(this).removeClass('sub-menu-active')
      }
    });
    // Mobile Nav
    $( "<span class='menu-drop'><i class='fa fa-chevron-down'></i></span>" ).appendTo( "#mobileNav .menu-item-has-children" );
    $( "#mobileNav .menu-item-has-children > a" ).on('click touch', function () {
        $(this).next('.sub-menu').stop().toggle();
        $(this).parent().toggleClass('sub-menu-active')
    });
    $( "#mobileNav .menu-item-has-children .menu-drop" ).on('click touch', function () {
        $(this).siblings( ".sub-menu" ).stop().slideToggle(500);
        $(this).toggleClass('sub-menu-active');
    });
  });


// Header Scroll
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("header").classList.remove('scroll-header');
  } else {
    document.getElementById("header").classList.add('scroll-header');
  }
  prevScrollpos = currentScrollPos;
} 

//Mobile Menu
function navToggle() {
    $('#mobileNav').toggleClass('menuOpen');
    $("#mobileNav .mobile-main-menu ul li a").on('click touch', function () {
    navToggle();
  });
    $('.mobileNav-overlay').toggleClass('menuOpen');
    $('#wrap').toggleClass('menuOpenWrap');
    $('#footer').toggleClass('menuOpenWrap');
    $('.navToggle').toggleClass('open');
}

$(document).on('click tap', '.navToggle, .mobileNav-overlay', function (event) {
  navToggle();
});


// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.element-item',
  percentPosition: true,
  masonry: {
    columnWidth: '.grid-sizer',
    gutter: 5
  }
});
// layout Isotope after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.isotope('layout');
});  

// filter items on button click
$('.filter-button-group').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  $grid.isotope({ filter: filterValue });
});

LottieInteractivity.create({
player:'#firstLottie',
mode:"scroll",
container: "#lottie-div",
    actions: [
    {
        visibility:[0, 1],
        type: "seek",
        frames: [0, 86]
    },
    ]
});
LottieInteractivity.create({
  player:'#secondLottie',
  mode:"scroll",
      actions: [
      {
          visibility:[0, 1],
          type: "seek",
          frames: [0, 69],
      },
      ]
  });