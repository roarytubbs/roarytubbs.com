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

        if ($('body').hasClass('work-passwort-protected')) {
            $("#password-protected-works").modal({
                fadeDuration: 100,

                escapeClose: false,
                clickClose: false,
                showClose: false
            });
        }

        // add new html to title of experience
        $('.page-template-experience #experience-counter').each(function() {
            var $this = $(this),
                countTo = (new Date).getFullYear() - (2007);
            $({ countNum: $this.text() }).animate({
                countNum: countTo
            }, {
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

        // Get a list of your shots and display them in the DOM.
        jribbble.shots({ token: "392f704752c3393168f41f2cd15d05a84e89628199bd47f66247fb7c54a0d72e", per_page: 30 }, function(shotsArray) {
            document.querySelector(".dribbble-shots").innerHTML = shotsArray.reduce(function(html, shot) {
                return html + '<img class="shot" src="' + shot.images.normal + '">';
            }, "");
        });

    });
})(jQuery) //end