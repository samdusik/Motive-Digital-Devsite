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

// change is-checked class on buttons
$('.button-group').each(function(i, buttonGroup) {
  var $buttonGroup = $(buttonGroup);
  $buttonGroup.on('click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $(this).addClass('is-checked');
  });
});

//****************************
// Isotope Load more button
//****************************
$(document).ready(function() {
 
  // init Isotope
  var $container = $('.grid').isotope({
      itemSelector: '.element-item',
      //layoutMode: 'fitRows'
  });

  var initShow = 10; //number of items loaded on init & onclick load more button
  var counter = initShow; //counter for load more button
  var iso = $container.data('isotope'); // get Isotope instance

  loadMore(initShow); //execute function onload

  function loadMore(toShow) {
  $container.find(".hidden").removeClass("hidden");

  var hiddenElems = iso.filteredItems.slice(toShow, iso.filteredItems.length).map(function(item) {
      return item.element;
  });
  $(hiddenElems).addClass('hidden');
  $container.isotope('layout');

  //when no more to load, hide show more button
  if (hiddenElems.length == 0) {
      jQuery("#load-more").hide();
  } else {
      jQuery("#load-more").show();
  };

  }

  //append load more button
  $container.after('<button id="load-more">View More</button>');

  //when load more button clicked
  $("#load-more").click(function() {
  if ($('#filters').data('clicked')) {
      //when filter button clicked, set initial value for counter
      counter = initShow;
      $('#filters').data('clicked', false);
  } else {
      counter = counter;
  };

  counter = counter + initShow;

  loadMore(counter);
  });

  //when filter button clicked
  $("#filters").click(function() {
  $(this).data('clicked', true);

  loadMore(initShow);
  });
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
  container: "#lottie-div-2",
      actions: [
      {
          visibility:[0, 1],
          type: "seek",
          frames: [0, 69]
      },
      ]
  });

LottieInteractivity.create({
  player:'#thirdLottie',
  mode:"scroll",
  container: "#lottie-div3",
      actions: [
      {
          visibility:[0, 1],
          type: "seek",
          frames: [0, 92]
      },
      ]
  });

LottieInteractivity.create({
  player:'#forthLottie',
  mode:"scroll",
  container: "#video_5",
      actions: [
      {
          visibility:[0, 1],
          type: "seek",
          frames: [0, 62]
      },
      ]
  });