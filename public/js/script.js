

(function ($) {
    'use strict';

    // Preloader js    
    $(window).on('load', function () {
        $('.preloader').fadeOut(700);
    });
    // qoute form 
    $(document).ready(function(){
        $(".files").attr('data-before',"Drag file here or click the above button");
        $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $(".files").attr('data-before',fileName);
        
        });
        });

    // switch
    var firstDiv = $("#div-1-1");
var secondDiv = $("#div-1-2");

$(document).ready(function() {
  //On Click of 1st Div, we're also toggling the 2nd DIV in case if it was open
  // Can handle in a better way as well
  // Same goes for the 2nd div
  firstDiv.click(() => {
    $(".dc-11").addClass("open");
    $(".dc-12").removeClass("open");
  });

  secondDiv.click(() => {
    $(".dc-12").addClass("open");
    $(".dc-11").removeClass("open");
  });
});
// pop
function closeForm() {
    $('.form-popup-bg').removeClass('is-visible');
  }
  
  $(document).ready(function($) {
    
    /* Contact Form Interactions */
    $('#btnOpenForm').on('click', function(event) {
      event.preventDefault();
  
      $('.form-popup-bg').addClass('is-visible');
    });
    
      //close popup when clicking x or off popup
    $('.form-popup-bg').on('click', function(event) {
      if ($(event.target).is('.form-popup-bg') || $(event.target).is('#btnCloseForm')) {
        event.preventDefault();
        $(this).removeClass('is-visible');
      }
    });
    
    
    
    });
  
    
    
// whatsapp
$(document).on("click", "#send-it", function() {
    var a = document.getElementById("chat-input");
    if ("" != a.value) {
      var b = $("#get-number").text(),
        c = document.getElementById("chat-input").value,
        d = "https://web.whatsapp.com/send",
        e = b,
        f = "&text=" + c;
      if (
        /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
          navigator.userAgent
        )
      )
        var d = "whatsapp://send";
      var g = d + "?phone=+966533850888" + e + f;
      window.open(g, "_blank");
    }
  }),
    $(document).on("click", ".informasi", function() {
      (document.getElementById("get-number").innerHTML = $(this)
        .children(".my-number")
        .text()),
        $(".start-chat,.get-new")
          .addClass("show")
          .removeClass("hide"),
        $(".home-chat,.head-home")
          .addClass("hide")
          .removeClass("show"),
        (document.getElementById("get-nama").innerHTML = $(this)
          .children(".info-chat")
          .children(".chat-nama")
          .text()),
        (document.getElementById("get-label").innerHTML = $(this)
          .children(".info-chat")
          .children(".chat-label")
          .text());
    }),
    $(document).on("click", ".close-chat", function() {
      $("#whatsapp-chat")
        .addClass("hide")
        .removeClass("show");
    }),
    $(document).on("click", ".blantershow-chat", function() {
      $("#whatsapp-chat")
        .addClass("show")
        .removeClass("hide");
    });
    
     
    // Background-images
    $('[data-background]').each(function () {
        $(this).css({
            'background-image': 'url(' + $(this).data('background') + ')'
        });
    });

    //  Search Form Open
    $('#searchOpen').on('click', function () {
        $('.search-wrapper').addClass('open');
    });
    $('#searchClose').on('click', function () {
        $('.search-wrapper').removeClass('open');
    });

    //Hero Slider
    $('.hero-slider').slick({
        autoplay: true,
        infinite: true,
        arrows: true,
        prevArrow: '<button type=\'button\' class=\'prevArrow\'></button>',
        nextArrow: '<button type=\'button\' class=\'nextArrow\'></button>',
        dots: false,
        autoplaySpeed: 7000,
        pauseOnFocus: false,
        pauseOnHover: false
    });
    $('.hero-slider').slickAnimation();

    //  Count Up
    function counter() {
        var oTop;
        if ($('.count').length !== 0) {
            oTop = $('.count').offset().top - window.innerHeight;
        }
        if ($(window).scrollTop() > oTop) {
            $('.count').each(function () {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                }, {
                    duration: 1000,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $this.text(this.countNum);
                    }
                });
            });
        }
    }
    $(window).on('scroll', function () {
        counter();
    });

    // venobox popup
    $('.venobox').venobox();



    //testimonial slider
    $('.testimonial-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 6000,
        dots: false,
        arrows: true,
        prevArrow: '<button type=\'button\' class=\'prevArrow\'></button>',
        nextArrow: '<button type=\'button\' class=\'nextArrow\'></button>',
        pauseOnFocus: false,
        pauseOnHover: false
    });

    //testimonial slider 2
    $('.testimonial-slider-2').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 6000,
        fade: false,
        dots: true,
        arrows: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        customPaging: function (slider, i) {
            var dotImage = $(slider.$slides[i]).data('dot-image');
            return '<a><img src="' + dotImage + '"></a>';
        }
    });


    // filter
    // $(document).ready(function () {
    //     var containerEl = document.querySelector('.filtr-container');
    //     var filterizd;
    //     if (containerEl) {
    //         filterizd = $('.filtr-container').filterizr({});
    //     }
    //     //Active changer
    //     $('.filter-controls li').on('click', function () {
    //         $('.filter-controls li').removeClass('active');
    //         $(this).addClass('active');
    //     });
    // });


    // Accordions
    // $('.collapse').on('shown.bs.collapse', function () {
    //     $(this).parent().find('.fa-plus').removeClass('fa-plus').addClass('fa-minus');
    // }).on('hidden.bs.collapse', function () {
    //     $(this).parent().find('.fa-minus').removeClass('fa-minus').addClass('fa-plus');
    // });

    // -----------------------------------------------------------------------
    // Pricing table
    // -----------------------------------------------------------------------

    //hide the subtle gradient layer (.pricing-list > li::after) when pricing table has been scrolled to the end (mobile version only)
    // checkScrolling($('.pricing-body'));
    // $(window).on('resize', function () {
    //     window.requestAnimationFrame(function () {
    //         checkScrolling($('.pricing-body'));
    //     });
    // });
    // $('.pricing-body').on('scroll', function () {
    //     var selected = $(this);
    //     window.requestAnimationFrame(function () {
    //         checkScrolling(selected);
    //     });
    // });

    // function checkScrolling(tables) {
    //     tables.each(function () {
    //         var table = $(this),
    //             totalTableWidth = parseInt(table.children('.pricing-features').width()),
    //             tableViewport = parseInt(table.width());
    //         if (table.scrollLeft() >= totalTableWidth - tableViewport - 1) {
    //             table.parent('li').addClass('is-ended');
    //         } else {
    //             table.parent('li').removeClass('is-ended');
    //         }
    //     });
    // }

    //switch from monthly to annual pricing tables
    // bouncy_filter($('.pricing-container'));

    // function bouncy_filter(container) {
    //     container.each(function () {
    //         var pricing_table = $(this);
    //         var filter_list_container = pricing_table.children('.pricing-switcher'),
    //             filter_radios = filter_list_container.find('input[type="radio"]'),
    //             pricing_table_wrapper = pricing_table.find('.pricing-wrapper');

    //         //store pricing table items
    //         var table_elements = {};
    //         filter_radios.each(function () {
    //             var filter_type = $(this).val();
    //             table_elements[filter_type] = pricing_table_wrapper.find('li[data-type="' + filter_type + '"]');
    //         });

    //         //detect input change event
    //         filter_radios.on('change', function (event) {
    //             event.preventDefault();
    //             //detect which radio input item was checked
    //             var selected_filter = $(event.target).val();

    //             //give higher z-index to the pricing table items selected by the radio input
    //             show_selected_items(table_elements[selected_filter]);

    //             //rotate each pricing-wrapper 
    //             //at the end of the animation hide the not-selected pricing tables and rotate back the .pricing-wrapper

    //             if (!Modernizr.cssanimations) {
    //                 hide_not_selected_items(table_elements, selected_filter);
    //                 pricing_table_wrapper.removeClass('is-switched');
    //             } else {
    //                 pricing_table_wrapper.addClass('is-switched').eq(0).one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function () {
    //                     hide_not_selected_items(table_elements, selected_filter);
    //                     pricing_table_wrapper.removeClass('is-switched');
    //                     //change rotation direction if .pricing-list has the .bounce-invert class
    //                     if (pricing_table.find('.pricing-list').hasClass('bounce-invert')) pricing_table_wrapper.toggleClass('reverse-animation');
    //                 });
    //             }
    //         });
    //     });
    // }

    function show_selected_items(selected_elements) {
        selected_elements.addClass('is-selected');
    }

    function hide_not_selected_items(table_containers, filter) {
        $.each(table_containers, function (key, value) {
            if (key !== filter) {
                $(this).removeClass('is-visible is-selected').addClass('is-hidden');

            } else {
                $(this).addClass('is-visible').removeClass('is-hidden is-selected');
            }
        });
    }

    //Active changer
    $('.pricing-duration').on('click', function () {
        $('.pricing-duration').removeClass('active');
        $(this).addClass('active');
    });

    // -----------------------------------------------------------------------
    // Pricing table end
    // -----------------------------------------------------------------------

})(jQuery);


// forEach function
var forEach = function (array, callback, scope) {
    for (var i = 0; i < array.length; i++) {
        callback.call(scope, i, array[i]); // passes back stuff we need
    }
}

// select all slider parent div.tartist-tiny-slider
var sliders = document.querySelectorAll('.tartist-tiny-slider');

// chunk function to make groups for every slider's childrens
var chunk = function ( array, size ) {
    let arr = [];
    for ( let i = 0; i < array.length; i += size ) {
        let newSlicedArray = Array.prototype.slice.call( array, i, i + size );
        arr.push(newSlicedArray);
    }
    return arr;
}

// applying foreach function to the sliders
forEach(sliders, function (index, value) {

    //selecting childrens
    let childrens = value.querySelectorAll(".tartist-tiny-slider__item");

    //getting chunksize from the parent
    let chunkSize = value.dataset.chunksize;

    //making final arrays for the children with chunk size
    let final = chunk( childrens, parseInt(chunkSize) );

    //wrapping the chunks with div.wrap
    let newHTML = final.map( towrap => towrap.reduce( (acc, el) => (acc.appendChild(el),acc) , document.createElement('div') ) ).forEach( el => {
        el.className ="wrap";
        value.appendChild(el)
    })

    //initialize tiny slider    
    let slider = tns({
        container: value,
        items: 1,
        slideBy: "page",
        autoplay: true,
        autoplayButtonOutput: false,
        loop: true,
        mouseDrag: true,
        gutter: 20,
        controls: false,
        navPosition: "bottom",
        nav: true,
    });

});

new WOW().init();

wow = new WOW(
{
boxClass:     'wow',      // default
animateClass: 'animated', // default
offset:       0,          // default
mobile:       true,       // default
live:         true        // default
}
)
wow.init();


jQuery.event.special.touchstart = {
    setup: function( _, ns, handle ) {
        this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
    }
};
jQuery.event.special.touchmove = {
    setup: function( _, ns, handle ) {
        this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
    }
};
jQuery.event.special.wheel = {
    setup: function( _, ns, handle ){
        this.addEventListener("wheel", handle, { passive: true });
    }
};
jQuery.event.special.mousewheel = {
    setup: function( _, ns, handle ){
        this.addEventListener("mousewheel", handle, { passive: true });
    }
};


function patchScrollBlockingListeners() {
  let supportsPassive = false;
  const x = document.createElement("x");
  x.addEventListener("cut", () => 1, {
    get passive() { supportsPassive = true; return !!1 }
  });
  x.remove();
  if (supportsPassive) {
    const originalFn = EventTarget.prototype.addEventListener;
    EventTarget.prototype.addEventListener = function(...args) {
      if (
        ['scroll', 'touchmove', 'touchstart'].includes(args[0]) &&
        (typeof args[2] !== 'object' || args[2].passive === undefined)
      ) {
        args[2] = {
          ...(typeof args[2] === 'object' ? args[2] : {}),
          passive: false
        };
      }
      originalFn.call(this, ...args);
    }
  }
}
patchScrollBlockingListeners();