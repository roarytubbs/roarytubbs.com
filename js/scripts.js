(function($) {
    $(function() {
        // Swiper
        var mySwiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            slidesPerView: 1,
            paginationClickable: true,
            spaceBetween: 30,
            loop: true,
            effect: 'fade'
        });

        // change href for password protected posts
        // $(function() {
        //     if ($('.work-item-wrapper').hasClass('is-password-protected')) {
        //         $('.work-item-wrapper.is-password-protected').find('a').attr("href", "#");
        //     }
        // });
        // // test for protected posts
        // $('.work-item-wrapper').on('click', function(event) {
        //     if ($(this).hasClass('is-password-protected')) {
        //         alert("this is password protected");
        //     }
        // });

        // add new html to title of experience
        $('.page-template-experience #experience-counter').each(function() {
            var $this = $(this),
                countTo = (new Date).getFullYear() - (2006);
            $({ countNum: $this.text() }).animate({
                    countNum: countTo
                },
                {
                    duration: 2000,
                    easing: 'linear',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                        //alert('finished');
                    }
                });
        });

        // jribbble
        $.jribbble.setToken('0b4980a630216df0469d8ae93c45e745586e0558a8d35f9c327b054550f280e3');

        $.jribbble.users('roary_tubbs').shots({ per_page: 25 }).then(function(shots) {
            var html = [];
            shots.forEach(function(shot) {
                html.push('<img class="shot" src="' + shot.images.normal + '">');
            });
            $('.dribbble-shots').html(html.join(''));
        });

    });
})(jQuery) //end