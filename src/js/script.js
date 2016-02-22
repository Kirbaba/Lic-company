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

   jQuery(function ($) {

        jQuery('.documents__carousel').slick({
            dots: false,
            infinite: true,
            speed: 500,
            arrows: true,        
            slidesToShow: 3,
            slidesToScroll: 1
        });

    });



});

ymaps.ready(init);
        
function init() {
    var myMap = new ymaps.Map('map', {
            center: [55.818245, 37.718307],
            zoom: 16,
            controls: [],
            
        })  ,
        myPlacemark = new ymaps.Placemark([55.818245, 37.723071], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Это красивая метка'
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: img.url + 'Pointer_2.png',
            // Размеры метки.
            iconImageSize: [37, 45],
            iconImageOffset: [-17, -55]

            
        });
    

    
    myMap.behaviors.disable('scrollZoom');
    myMap.geoObjects.add(myPlacemark);
}