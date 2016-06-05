/* jshint browser: true */
jQuery(function($){

    function sizeSet(div,percentage) {
        var adminHeight = 0;
        if($('#wpadminbar').length){
            adminHeight=$('#wpadminbar').height();
        }
        $(div).width($(window).width());
        console.log($(window).height());
        $(div).height((percentage * $(window).height())-adminHeight);
        console.log($(div).width()+div+$(div).height());
        

    }
    function headerfadeIn() {
        $('#anchor').animate({
            width: '9%',
            bottom: 0,
            left: '69.5%'
        }, 2000);
        $('#fadeInHeader, .infoLogobg, .tides').delay(1000).fadeIn(3000);
    }

    function logofadeIn() {

        $('#anchor').delay(1000).fadeIn(3000, function() {
            headerfadeIn();
        });
    }

    function scrollNumber() {
            console.log( $(document).scrollTop() );
    }

    var fixed=0;

    function navFix(){
    var navOffset = $('nav').offset().top;
            var tideHeight  = $('.tides').height();
            $(window).scroll(function(){
                    var nav = $('nav'),
                            scroll = $(window).scrollTop(),
                            tide = $('.tides'),
                            ourMag = $('.ourMag'),
                            navHeight = nav.height();

                    if (scroll >= navOffset) {
                            nav.addClass('navbar-fixed-top');
                            tide.addClass('static');
                            ourMag.css('margin-top', navHeight);
                    }
                    else {
                            nav.removeClass('navbar-fixed-top');
                            tide.removeClass('static');
                            ourMag.css('margin-top', 'initial');
                    }

                    console.log(navOffset + ',' + scroll);

            });

    }

    function adPageNavFix(){
    var navOffset = $('nav').offset().top;
            $(window).scroll(function(){
                    var nav = $('nav'),
                        scroll = $(window).scrollTop(),
                        adText = $('.advertising-text'),
                        navHeight = nav.height();

                    if (scroll >= navOffset) {
                            nav.addClass('navbar-fixed-top');
                            adText.css('margin-top', navHeight);
                    }
                    else {
                            nav.removeClass('navbar-fixed-top');
                            adText.css('margin-top', 'initial');
                    }

                    console.log(navOffset + ',' + scroll);

            });

    }

    function setSizes(){
    sizeSet('.landing', 0.8);
    sizeSet('.tunnel-cropped', 0.5);
    }

    $(document).ready(function() {
        
        setSizes();
        $(window).resize(function() {
            setSizes();
            console.log('resize');
        });
        if((window.location.pathname =='/index.html')||(window.location.pathname=='/')){
            navFix();
            console.log('index');
        }
        if(window.location.pathname == '/advertise.html'){
            adPageNavFix();
            console.log('advert');
        }
        logofadeIn();
    });
});
