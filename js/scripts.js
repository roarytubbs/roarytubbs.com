jQuery ( document ).ready( function( $ ) {
  // Swiper
  var mySwiper = new Swiper ('.swiper-container', {
    pagination: '.swiper-pagination',
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    slidesPerView: 1,
    paginationClickable: true,
    spaceBetween: 30,
    loop: true,
    effect: 'fade'
  });

  // jribbble
  $.jribbble.setToken('0b4980a630216df0469d8ae93c45e745586e0558a8d35f9c327b054550f280e3');

  $.jribbble.users('roary_tubbs').shots({per_page: 25}).then(function(shots) {
    var html = [];
    shots.forEach(function(shot) {
      html.push('<img class="shot" src="' + shot.images.normal + '">');
    });
    $('.dribbble-shots').html(html.join(''));
  });

} ); //end