(function ($) {

    $(document).ready(function () {


        $('.ss-speakers__list').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 7,
            slidesToScroll: 2,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 2
                    }
                },
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
        $('#show_more').on('click', function (e) {
            e.preventDefault();
            var target = $(this).data('target');
            var show = $('.show_more--show');
            var hide = $('.show_more--hide');
            $('#' + target).slideToggle();
            $(this).toggleClass('active');
            show.show();
            hide.hide();
            if ($(this).hasClass('active')) {
                show.hide();
                hide.show();
            }

        });

        $('.phone_button').on('click', function (e) {
            e.preventDefault();
            $('.call_us').slideToggle();
        })

    })

})(jQuery);
