"use strict";

(function ($) {
  "use strict";

  

  /*--------------------------------------------------------------
  CUSTOM PRE DEFINE FUNCTION
  ------------------------------------------------------------*/
  /* is_exist() */
  jQuery.fn.is_exist = function () {
    return this.length;
  };
  $(function () {

    /*--------------------------------------------------------------
    optech FOUR COLUMN SLIDER INIT
    --------------------------------------------------------------*/
    var four_column_slider = $('.optech-4column-slider');
    if (four_column_slider.is_exist()) {
      four_column_slider.slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: false,
        centerMode: true,
        centerPadding: '300px',
        responsive: [{
          breakpoint: 1600,
          settings: {
            slidesToShow: 3,
            centerPadding: '250px'
          }
        }, {
          breakpoint: 1399,
          settings: {
            slidesToShow: 3,
            centerPadding: '150px'
          }
        }, {
          breakpoint: 1199,
          settings: {
            slidesToShow: 3,
            centerPadding: '100px'
          }
        }, {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            centerPadding: '100px'
          }
        }, {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            centerPadding: '100px'
          }
        }, {
          breakpoint: 575,
          settings: {
            slidesToShow: 1,
            centerPadding: '0px'
          }
        }]
      });
    }

    /*--------------------------------------------------------------
    optech THREE COLUMN SLIDER INIT
    --------------------------------------------------------------*/
    var three_column_slider = $('.optech-3column-slider');
    if (three_column_slider.is_exist()) {
      three_column_slider.slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: false,
        centerMode: true,
        centerPadding: '100px',
        responsive: [{
          breakpoint: 1399,
          settings: {
            slidesToShow: 2
          }
        }, {
          breakpoint: 850,
          settings: {
            slidesToShow: 1,
            centerPadding: '70px'
          }
        }, {
          breakpoint: 575,
          settings: {
            slidesToShow: 1,
            centerPadding: '0px'
          }
        }]
      });
    }

    /*--------------------------------------------------------------
    optech FOUR COLUMN SLIDER TWO INIT
    --------------------------------------------------------------*/
    var four_column_slider2 = $('.optech-4column-slider2');
    if (four_column_slider2.is_exist()) {
      four_column_slider2.slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: false,
        responsive: [{
          breakpoint: 1399,
          settings: {
            slidesToShow: 3
          }
        }, {
          breakpoint: 1199,
          settings: {
            slidesToShow: 2
          }
        }, {
          breakpoint: 768,
          settings: {
            slidesToShow: 1
          }
        }]
      });
    }

    /*--------------------------------------------------------------
    optech TWO COLUMN SLIDER INIT
    --------------------------------------------------------------*/
    var two_column_slider = $('.optech-2column-slider');
    if (two_column_slider.is_exist()) {
      two_column_slider.slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: false,
        responsive: [{
          breakpoint: 991,
          settings: {
            slidesToShow: 1
          }
        }]
      });
    }

    /*--------------------------------------------------------------
    optech ONE COLUMN SLIDER INIT
    --------------------------------------------------------------*/
    var t_one_column_slider = $('.optech-1column-slider');
    if (t_one_column_slider.is_exist()) {
      t_one_column_slider.slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        autoplay: false,
        speed: 800,
        prevArrow: '<button class="slide-arrow optech-t-next"><i class="ri-arrow-left-s-line"></i></button>',
        nextArrow: '<button class="slide-arrow optech-t-prev"><i class="ri-arrow-right-s-line"></i></button>'
      });
    }

    /*--------------------------------------------------------------
    optech THREE COLUMN SLIDER TWO INIT
    --------------------------------------------------------------*/
    var three_column_slider2 = $('.optech-3column-slider2');
    if (three_column_slider2.is_exist()) {
      three_column_slider2.slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: false,
        responsive: [{
          breakpoint: 1299,
          settings: {
            slidesToShow: 2
          }
        }, {
          breakpoint: 768,
          settings: {
            slidesToShow: 1
          }
        }]
      });
    }

    /*--------------------------------------------------------------
    optech BRAND SLIDER INIT
    --------------------------------------------------------------*/
    var optech_brand_slider = $('.optech-brand-slider');
    if (optech_brand_slider.is_exist()) {
      optech_brand_slider.slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 6000,
        cssEase: 'linear',
        pauseOnHover: true,
        adaptiveHeight: true,
        responsive: [{
          breakpoint: 1199,
          settings: {
            slidesToShow: 3
          }
        }, {
          breakpoint: 767,
          settings: {
            slidesToShow: 2
          }
        }]
      });
    }

    /*--------------------------------------------------------------
    optech COUNTER JS INIT
    --------------------------------------------------------------*/
    var optech_counter = $('#optech-counter');
    if (optech_counter.is_exist()) {
      var a = 0;
      $(window).scroll(function () {
        var oTop = $(optech_counter).offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
          $('.optech-counter').each(function () {
            var $this = $(this),
              countTo = $this.attr('data-percentage');
            $({
              countNum: $this.text()
            }).animate({
              countNum: countTo
            }, {
              duration: 4000,
              easing: 'swing',
              step: function step() {
                $this.text(Math.floor(this.countNum));
              },
              complete: function complete() {
                $this.text(this.countNum);
              }
            });
          });
          a = 1;
        }
      });
    }

    /*--------------------------------------------------------------
    optech COUNTER JS TWO INIT
    --------------------------------------------------------------*/
    var optech_counter2 = $('#optech-counter2');
    if (optech_counter2.is_exist()) {
      var a = 0;
      $(window).scroll(function () {
        var oTop = $(optech_counter2).offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
          $('.optech-counter2').each(function () {
            var $this = $(this),
              countTo = $this.attr('data-percentage');
            $({
              countNum: $this.text()
            }).animate({
              countNum: countTo
            }, {
              duration: 4000,
              easing: 'swing',
              step: function step() {
                $this.text(Math.floor(this.countNum));
              },
              complete: function complete() {
                $this.text(this.countNum);
              }
            });
          });
          a = 1;
        }
      });
    }
  }); /*End document ready*/


 
})(jQuery);