'use strict';
$(window).load( function() {



    //PRELOADER
        /** Loader */
    var loader = $(".loader");
    var wHeight = $(window).height();
    var wWidth = $(window).width();
    var o = 0;

    loader.css({
        top: wHeight / 2 - 2.5,
        left: wWidth / 2 - 200
    })

    do {
        loader.animate({
            width: o
        }, 10)
        o += 3;
    } while (o <= 400)
    if (o === 402) {
        loader.animate({
            left: 0,
            width: '100%'
        })
        loader.animate({
            top: '0',
            height: '100vh'
        })
    }

    setTimeout(function() {
        $(".loader-wrapper").fadeOut('fast');
        (loader).fadeOut('fast');
    }, 3500);



    // PORTFOLIO ISOTOPE
if ($('.isotope_items').length) {

     var $container = $('.isotope_items');
     $container.isotope();

    $('.portfolio_filter ul li').on("click", function(){
        $(".portfolio_filter ul li").removeClass("select-cat");
        $(this).addClass("select-cat");
        var selector = $(this).attr('data-filter');
        $(".isotope_items").isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false,
            }
    });
        return false;
    });

}

}); // window load end



$(document).ready( function() {


    // WOW JS
    new WOW({ mobile: false }).init();



    //PORTFOLIO WOW CANCEL
    $(".portfolio_filter li").click(function(){
        $('.wow').addClass('wow-removed').removeClass('wow').removeClass('fadeInUp');
    });


    //SMOOTH SCROLL
    $(document).on("scroll", onScroll);
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");

        $('a').each(function () {
            $(this).removeClass('active');
             if ($(window).width() < 768) {
                 $('.nav-menu').slideUp();
             }
        });

        $(this).addClass('active');

        var target = this.hash,
        menu = target;
        target = $(target);
        $('html, body').stop().animate({
            'scrollTop': target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target.selector;
            $(document).on("scroll", onScroll);
        });
    });


        function onScroll(event){
          if ($('#home').length) {
    var scrollPos = $(document).scrollTop();
    $('nav ul li a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('nav ul li a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
   }
}




    //NAVBAR SHOW - HIDE
    $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    var homeheight = $(".home").height() -86;

    if (scroll > homeheight ) {
        $("nav").slideDown(100);
        } else {
        $("nav").slideUp(100);
        }
     });


 // RESPONSIVE MENU
$('.responsive').on('click', function (e) {
        $('.nav-menu').slideToggle();
    });


    // HOME PAGE HEIGHT
     function centerInit() {
        var hometext = $('.home')

        hometext.css({
            "height": $(window).height() + "px"
        });
    }
    centerInit();
    $(window).resize(centerInit);


    // HOME TYPED JS
    if ($('.element').length) {
        $('.element').each(function () {
            $(this).typed({
                strings: [$(this).data('text1'), $(this).data('text2')],
                loop: $(this).data('loop') ? $(this).data('loop') : false ,
                backDelay: $(this).data('backdelay') ? $(this).data('backdelay') : 2000 ,
                typeSpeed: 10,
            });
        });
    }



    // MAGNIFIC POPUP FOR PORTFOLIO PAGE
    $('.link').magnificPopup({
        type:'image',
        gallery:{enabled:true},
        zoom:{enabled: true, duration: 300}
    });

       // OWL CAROUSEL GENERAL JS
    var owlcar = $('.owl-carousel');
    if (owlcar.length) {
        owlcar.each(function () {
            var $owl = $(this);
            var itemsData = $owl.data('items');
            var autoPlayData = $owl.data('autoplay');
            var paginationData = $owl.data('pagination');
            var navigationData = $owl.data('navigation');
            var stopOnHoverData = $owl.data('stop-on-hover');
            var itemsDesktopData = $owl.data('items-desktop');
            var itemsDesktopSmallData = $owl.data('items-desktop-small');
            var itemsTabletData = $owl.data('items-tablet');
            var itemsTabletSmallData = $owl.data('items-tablet-small');
            $owl.owlCarousel({
                items: itemsData
                , pagination: paginationData
                , navigation: navigationData
                , autoPlay: autoPlayData
                , stopOnHover: stopOnHoverData
                , navigationText: ["<", ">"]
                , itemsCustom: [
                    [0, 1]
                    , [500, itemsTabletSmallData]
                    , [710, itemsTabletData]
                    , [992, itemsDesktopSmallData]
                    , [1199, itemsDesktopData]
                ]
            , });
        });
    }

    /* Contact Form*/
    var email = document.getElementById("con_email");
    var form = document.querySelector(".contact-form");
    var name = document.getElementById("con_name");
    var message = document.getElementById("con_message");
    var button = document.getElementById("con_submit");
    var mail = $_GET('mail');

    if(mail != null){
      if(mail == 'true'){
        button.classList.add("ok");
      }
    }

    function $_GET(param) {
    	var vars = {};
    	window.location.href.replace( location.hash, '' ).replace(
    		/[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
    		function( m, key, value ) { // callback
    			vars[key] = value !== undefined ? value : '';
    		}
    	);

    	if ( param ) {
    		return vars[param] ? vars[param] : null;
    	}
    	return vars;
    }

    function surligne(champ, erreur)
    {
       if(erreur)
          champ.classList.add("reqError");
       else
          champ.classList.remove("reqError");
    }

    function emailValide(email){
      var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

      if(!regex.test(email.value)){
        surligne(email, true);
        return false;
      } else {
        surligne(email, false);
        return true;
      }
    }

    function nameValide(name)
    {
       if(name.value.length < 2 || name.value.length > 25)
       {
          surligne(name, true);
          return false;
       }
       else
       {
          surligne(name, false);
          return true;
       }
    }

    function messageValide(message)
    {
       if(message.value.length < 2)
       {
          surligne(message, true);
          return false;
       }
       else
       {
          surligne(message, false);
          return true;
       }
    }

    email.addEventListener('input', function (event) {
        emailValide(email);
    }, false);

    name.addEventListener('input', function (event) {
        nameValide(name);
    }, false);

    message.addEventListener('input', function (event) {
        messageValide(message);
    }, false);

    form.addEventListener('submit', function (event) {
      var emailOk = emailValide(email);
      var nameOk = nameValide(name);
      var messageOk = messageValide(message);

      if(!emailOk || !nameOk || !messageOk){
        button.classList.remove("ok");
        event.preventDefault();
      } else{
        button.classList.add("ok");
      }
    }, false);

}); // document ready end
