jQuery ( document ).ready( function( $ ) {


  $(function runParticle() {
    particlesJS("particles-js", {
      "particles": {
        "number": {
          "value": 80,
          "density": {
            "enable": true,
            "value_area": 3000
          }
        },
        "color": {
          "value": "#68c52e"
        },
        "shape": {
          "type": "polygon",
          "stroke": {
            "width": 1,
            "color": "#d0edc1"
          },
          "polygon": {
            "nb_sides": 12
          },
          "image": {
            "src": "img/github.svg",
            "width": 100,
            "height": 100
          }
        },
        "opacity": {
          "value": 0,
          "random": true,
          "anim": {
            "enable": false,
            "speed": 1,
            "opacity_min": 0,
            "sync": false
          }
        },
        "size": {
          "value": 1,
          "random": true,
          "anim": {
            "enable": false,
            "speed": 2.2,
            "size_min": 1,
            "sync": false
          }
        },
        "line_linked": {
          "enable": true,
          "distance": 700,
          "color": "#55616a",
          "opacity": 0.3,
          "width": 1
        },
        "move": {
          "enable": true,
          "speed": 0.5,
          "direction": "bottom-right",
          "random": true,
          "straight": false,
          "out_mode": "out",
          "bounce": false,
          "attract": {
            "enable": false,
            "rotateX": 600,
            "rotateY": 1200
          }
        }
      },
      "interactivity": {
        "detect_on": "canvas",
        "events": {
          "onhover": {
            "enable": true,
            "mode": "bubble"
          },
          "onclick": {
            "enable": true,
            "mode": "push"
          },
          "resize": true
        },
        "modes": {
          "grab": {
            "distance": 400,
            "line_linked": {
              "opacity": 1
            }
          },
          "bubble": {
            "distance": 200,
            "size": 3,
            "duration": 8,
            "opacity": 0.3,
            "speed": 2
          },
          "repulse": {
            "distance": 200,
            "duration": 0.2
          },
          "push": {
            "particles_nb": 1
          },
          "remove": {
            "particles_nb": 2
          }
        }
      },
      "retina_detect": true
    });
  });

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

  var tabs = $('.tabs');

  tabs.each(function(){
    var tab = $(this),
    tabItems = tab.find('ul.tabs-navigation'),
    tabContentWrapper = tab.children('ul.tabs-content'),
    tabNavigation = tab.find('nav');

    tabItems.on('click', 'li', function(event){
      event.preventDefault();
      var selectedItem = $(this);
      if( !selectedItem.hasClass('selected') ) {
        var selectedTab = selectedItem.data('content'),
        selectedContent = tabContentWrapper.find('li[data-content="'+selectedTab+'"]'),
        slectedContentHeight = selectedContent.innerHeight();

        tabItems.find('li.selected').removeClass('selected');
        selectedItem.addClass('selected');
        selectedContent.addClass('selected').siblings('li').removeClass('selected');
        //animate tabContentWrapper height when content changes 
        tabContentWrapper.animate({
          'height': slectedContentHeight
        }, 200);
      }
    });
    checkScrolling(tabNavigation);
    tabNavigation.on('scroll', function(){ 
      checkScrolling($(this));
    });
  });

  $(window).on('resize', function(){
    tabs.each(function(){
      var tab = $(this);
      checkScrolling(tab.find('nav'));
      tab.find('.tabs-content').css('height', 'auto');
    });
  });

  function checkScrolling(tabs){
    var totalTabWidth = parseInt(tabs.children('.tabs-navigation').width()),
    tabsViewport = parseInt(tabs.width());
    if( tabs.scrollLeft() >= totalTabWidth - tabsViewport) {
      tabs.parent('.tabs').addClass('is-ended');
    } else {
      tabs.parent('.tabs').removeClass('is-ended');
    }
  }
} ); //end