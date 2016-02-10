/* ==============================================================
    Calendar Page
============================================================== */
$(function() {
  var cal = $( '#calendar' ).calendario( {
    onDayClick : function( $el, $contentEl, dateProperties ) {

      for( var key in dateProperties ) {
        console.log( key + ' = ' + dateProperties[ key ] );
      }

    },
    caldata : canvasEvents
  } ),
  $month = $( '#calendar-month' ).html( cal.getMonthName() ),
  $year = $( '#calendar-year' ).html( cal.getYear() );

  $( '#calendar-next' ).on( 'click', function() {
    cal.gotoNextMonth( updateMonthYear );
  } );
  $( '#calendar-prev' ).on( 'click', function() {
    cal.gotoPreviousMonth( updateMonthYear );
  } );
  $( '#calendar-current' ).on( 'click', function() {
    cal.gotoNow( updateMonthYear );
  } );

  function updateMonthYear() {
    $month.html( cal.getMonthName() );
    $year.html( cal.getYear() );
  }
});
/* ==============================================================
    Contact Page
============================================================== */
//  Contact Form Script
$("#template-contactform").validate({
  submitHandler: function(form) {
    $('.form-process').fadeIn();
    $(form).ajaxSubmit({
      target: '#contact-form-result',
      success: function() {
        $('.form-process').fadeOut();
        $(form).find('.sm-form-control').val('');
        $('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');
        SEMICOLON.widget.notifications($('#contact-form-result'));
      }
    });
  }
});

/* ==============================================================
    Home Page
============================================================== */
// Hero Slider Script
jQuery(window).load(function(){
  var swiperSlider = new Swiper('.swiper-parent',{
    paginationClickable: false,
    slidesPerView: 1,
    grabCursor: true,
    loop: true,
    autoplay: 5000,
    onSwiperCreated: function(swiper){
      $('[data-caption-animate]').each(function(){
        var $toAnimateElement = $(this);
        var toAnimateDelay = $(this).attr('data-caption-delay');
        var toAnimateDelayTime = 0;
        if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
        if( !$toAnimateElement.hasClass('animated') ) {
          $toAnimateElement.addClass('not-animated');
          var elementAnimation = $toAnimateElement.attr('data-caption-animate');
          setTimeout(function() {
            $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
          }, toAnimateDelayTime);
        }
      });
      SEMICOLON.slider.swiperSliderMenu();
    },
    onSlideChangeStart: function(swiper){
      $('[data-caption-animate]').each(function(){
        var $toAnimateElement = $(this);
        var elementAnimation = $toAnimateElement.attr('data-caption-animate');
        $toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
      });
      SEMICOLON.slider.swiperSliderMenu();
    },
    onSlideChangeEnd: function(swiper){
      $('#slider').find('.swiper-slide').each(function(){
        if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
        if($(this).find('.yt-bg-player').length > 0) { $(this).find('.yt-bg-player').pauseYTP(); }
      });
      $('#slider').find('.swiper-slide:not(".swiper-slide-active")').each(function(){
        if($(this).find('video').length > 0) {
          if($(this).find('video').get(0).currentTime !== 0 ) $(this).find('video').get(0).currentTime = 0;
        }
        if($(this).find('.yt-bg-player').length > 0) {
          $(this).find('.yt-bg-player').getPlayer().seekTo( $(this).find('.yt-bg-player').attr('data-start') );
        }
      });
      if( $('#slider').find('.swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('video').get(0).play(); }
      if( $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').playYTP(); }

      $('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
        var $toAnimateElement = $(this);
        var toAnimateDelay = $(this).attr('data-caption-delay');
        var toAnimateDelayTime = 0;
        if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
        if( !$toAnimateElement.hasClass('animated') ) {
          $toAnimateElement.addClass('not-animated');
          var elementAnimation = $toAnimateElement.attr('data-caption-animate');
          setTimeout(function() {
            $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
          }, toAnimateDelayTime);
        }
      });
    }
  });

  $('#slider-arrow-left').on('click', function(e){
    e.preventDefault();
    swiperSlider.swipePrev();
  });

  $('#slider-arrow-right').on('click', function(e){
    e.preventDefault();
    swiperSlider.swipeNext();
  });
});

// Plan Your Trip Script
jQuery(window).load(function(){
  var $container = $('#portfolio');
  $container.isotope({ transitionDuration: '0.65s' });
  $(window).resize(function() {
    $container.isotope('layout');
  });
});

// Recent News & Updates Script
jQuery(document).ready(function($) {
  var ocImages2 = $("#oc-images2");
  ocImages2.owlCarousel({
    responsive:{
      0:{ items:1 },
      480:{ items:2 },
      768:{ items:3 },
      992:{ items:4 },
      1200:{ items:5 }
    },
    margin: 20,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    rewindNav: true,
    dots: false
  });
});

/* ==============================================================
    Island Pages
============================================================== */
// Small Photo Gallery Carousel Script
jQuery(document).ready(function($) {
  var ocImages = $("#oc-images");
  ocImages.owlCarousel({
    margin: 20,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    autoplay: false,
    autoplayHoverPause: true,
    dots: false,
    navRewind: false,
    loop: true,
    responsive:{
      0:{ items:2 },
      600:{ items:3 },
      1000:{ items:4 },
      1200:{ items:5 }
    }
  });
});
/* ==============================================================
    Advertise With Us Page
============================================================== */
// Form Script
jQuery("#template-jobform").validate({
  submitHandler: function(form) {
    jQuery('.form-process').fadeIn();
    jQuery(form).ajaxSubmit({
      target: '#job-form-result',
      success: function() {
        jQuery('.form-process').fadeOut();
        jQuery(form).find('.sm-form-control').val('');
        jQuery('#job-form-result').attr('data-notify-msg', jQuery('#job-form-result').html()).html('');
        SEMICOLON.widget.notifications(jQuery('#job-form-result'));
      }
    });
  }
});

/* ==============================================================
    General Scripts (Headers & Footers)
============================================================== */
// Mobile Offcanvas Menu
$('nav#mobile-menu').mmenu({
  "extensions": [
    "border-full"
  ],
  "navbar": {
    "title": "Menu"
  },
  "offCanvas": {
    "position": "top"
  },
  "counters": true,
  "navbars": [
    {
      "position": "top",
      "content": [
        "prev",
        "title",
        "close"
      ]
    },
    {
      "position": "bottom",
      "content": [
        "<a class='fa fa-facebook' href='#/'></a>",
        "<a class='fa fa-twitter' href='#/'></a>",
        "<a class='fa fa-google-plus' href='#/'></a>",
        "<a class='fa fa-instagram' href='#/'></a>"
      ]
    }
  ]
});

// Subscription Script
jQuery("#widget-subscribe-form").validate({
  submitHandler: function(form) {
    jQuery(form).find('.input-group-addon').find('.icon-email2').removeClass('icon-email2').addClass('icon-line-loader icon-spin');
    jQuery(form).ajaxSubmit({
      target: '#widget-subscribe-form-result',
      success: function() {
        jQuery(form).find('.input-group-addon').find('.icon-line-loader').removeClass('icon-line-loader icon-spin').addClass('icon-email2');
        jQuery('#widget-subscribe-form').find('.form-control').val('');
        jQuery('#widget-subscribe-form-result').attr('data-notify-msg', jQuery('#widget-subscribe-form-result').html()).html('');
        SEMICOLON.widget.notifications(jQuery('#widget-subscribe-form-result'));
      }
    });
  }
});
