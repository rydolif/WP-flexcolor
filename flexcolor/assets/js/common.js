$(function() {

//------------------------------гамбургер-----------------------------
  $('.hamburger').click(function() {
    $(this).toggleClass('hamburger--active');
    $('nav').toggleClass('nav--active');
    $('header').toggleClass('header--menu');
  });

//-------------------------------попандер---------------------------------------
  $('.modal').popup({transition: 'all 0.3s'});

//-----------------------------------togle-------------------------
  $('.header__toggle').click(function() {
    $(this).toggleClass('header__toggle--active');
    $('.header__catalog').toggleClass('header__catalog--active');
  });

//----------------------------------------fixed----------------------------------
  $(window).scroll(function(){
      if($(this).scrollTop()>20){
          $('.header').addClass('header--active');
      }
      else if ($(this).scrollTop()<20){
          $('.header').removeClass('header--active');
      }
  });

//-------------------------скорость якоря---------------------------------------
  $(".click").on("click","a", function (event) {
      event.preventDefault();
      var id  = $(this).attr('href'),
          top = $(id).offset().top;
      $('body,html').animate({scrollTop: top - 60}, 'slow', 'swing');
  });

//-------------swiper---------------------------------------
  var swiper = new Swiper('.hits__slider', {
    scrollbar: {
      el: '.hits__scrollbar',
    },
    freeMode: true,
    slidesPerView: 3,
    spaceBetween: 50,
    breakpoints: {
    480: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    992: {
      slidesPerView: 2,
      spaceBetween: 20
    }
  }
  });

  var swiper = new Swiper('.textile__slider', {
    scrollbar: {
      el: '.textile__scrollbar',
    },
    freeMode: true,
    slidesPerView: 3,
    spaceBetween: 50,
    breakpoints: {
    480: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    992: {
      slidesPerView: 2,
      spaceBetween: 20
    }
  }
  });

  var swiper = new Swiper('.polegrf__slider', {
    scrollbar: {
      el: '.polegrf__scrollbar',
    },
    freeMode: true,
    slidesPerView: 3,
    spaceBetween: 50,
    breakpoints: {
    480: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    992: {
      slidesPerView: 2,
      spaceBetween: 20
    }
  }
  });

  var swiper = new Swiper('.inter__slider', {
    scrollbar: {
      el: '.inter__scrollbar',
    },
    freeMode: true,
    slidesPerView: 3,
    spaceBetween: 50,
    breakpoints: {
    480: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    992: {
      slidesPerView: 2,
      spaceBetween: 20
    }
  }
  });

  var swiper = new Swiper('.suver__slider', {
    scrollbar: {
      el: '.suver__scrollbar',
    },
    freeMode: true,
    slidesPerView: 3,
    spaceBetween: 50,
    breakpoints: {
    480: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    992: {
      slidesPerView: 2,
      spaceBetween: 20
    }
  }
  });

//---------------tab--------------------
  $('.tabs__wrap').hide();
  $('.tabs__wrap:first').show();
  $('.tabs ul a:first').addClass('active');
   $('.tabs ul a').click(function(event){
    event.preventDefault();
    $('.tabs ul a').removeClass('active');
    $(this).addClass('active');
    $('.tabs__wrap').hide();
     var selectTab = $(this).attr('href');
    $(selectTab).fadeIn();
  });

//--------------------------------------scroll------------------------------
  $('.chat__content').jScrollPane();

});

$(window).resize(function(event) {
  $('.chat__content').jScrollPane();
});