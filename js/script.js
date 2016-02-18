
/*-------------GOOGLE MAPS-----------------*/

/*function initialize() {

    var myLatlng = new google.maps.LatLng(59.934602, 30.334607);
    var mapOptions = {
        center: new google.maps.LatLng(59.934602, 30.334607),
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"),
        mapOptions);
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title:"Ditlogistic"
    });
}

function loadScript() {
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE&callback=initialize";
    document.body.appendChild(script);
}

window.onload = loadScript;
*/


$(function() {

    $(window).scroll(function() {
        if($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').click(function() {
        $('body,html').animate({scrollTop: 0}, 1000);
    });

    $('.smoothScroll').click(function(event) {
        event.preventDefault();
        var href=$(this).attr('href');
        var target=$(href);
        var top=target.offset().top;
        $('html,body').animate({
            scrollTop: top
        }, 1000);
    });
});
$( document ).ready(function() {

    var swiper_arr = [];

   var swiper = new Swiper('.reviews__carousel', {
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 3,
        initialSlide: 1,
        roundLengths: true,
        spaceBetween: 20,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
         slidesPerView: 'auto',
         loop: true
    });

   var swiper_new = new Swiper('.video-reviews__carousel', {
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 1,
        initialSlide: 0,
        roundLengths: true,
        spaceBetween: 20,
        nextButton: '.swiper-button-next-sec',
        prevButton: '.swiper-button-prev-sec',
         slidesPerView: 'auto',
         loop: true
    });
});

