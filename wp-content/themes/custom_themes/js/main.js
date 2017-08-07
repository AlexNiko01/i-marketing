$(document).ready(function () {

    $("img[alt='video']").hover(function () {
        var video_iframe = $(this).parent('a.Image_Wrapper').find('.description').html();
        $(this).parent('a.Image_Wrapper').attr("href", video_iframe);
    });

    $("img[alt='comment']").parent('a.Image_Wrapper').addClass("fa fa-comments");
    $("img[alt='video']").parent('a.Image_Wrapper').addClass("fa fa-file-video-o");
    $("img[alt='picture']").parent('a.Image_Wrapper').addClass("fa fa-file-image-o");
    $("img[alt='video']").parent('a.Image_Wrapper').prepend('<i class="fa fa-play-circle"></i>');

    $(".standart-submit").click(function () {
        $(".liqpay-ident").val('Без оплаты');
    });
    $(".liqpay-submit").click(function () {
        $(".liqpay-ident").val('Оплата картой');
    });
    $(".title-promo").click(function () {
        $(".promocode-field").toggleClass("hide-field");
        $(".send-promo").toggleClass("hide-field");
    });
    $(".inputmask").inputmask("+38 (099) 999-99-99");
    $(".event-data").val($('.event-data-load').html());
    $(".event_label").val($('.event-load').html());

    var pay_val = $(".pay-val").html();

    if (isNaN(pay_val)) {
        pay_val = $(".pay-val .ss-price__amount").html();

    }
    pay_val_num = parseInt(pay_val);

    $(".price-pay").text(parseInt(pay_val));
    $("#liqpay_price").val(pay_val);

    $("#numberInput").change(function () {
        promocode();
    });

    $(".send-promo").click(function () {
        promocode();
    });

    function promocode() {
        code = ($(".promocode-field").val());
        discount = ($('#' + code).html());


        var count = $("#numberInput").val();
        if (discount !== undefined) {
            discount_pay = parseInt(pay_val) * count;
        } else {
            if (count == 2) {
                discount_pay = parseInt(pay_val) * 1 * count;
            } else if (count > 2) {
                discount_pay = parseInt(pay_val) * 1 * count;
            } else {
                discount_pay = parseInt(pay_val) * count;
            }

        }
        pay_val_num = discount_pay;

        if (discount !== undefined) {
            end_discount = discount;
            $(".discount-data").val(end_discount);
            end_price = pay_val_num - ((pay_val_num * end_discount) / 100);
        } else {
            $(".promocode-field").val('Промокод введен неверно');
            end_discount = 1;
            end_price = pay_val_num;
        }
        ;
        $(".price-pay").text(end_price + ' грн.');
        $("#liqpay_price").val(end_price);
    }
    ;

    $(".wpcf7-submit").click(function () {
        var url = "http://i-marketing.ua/amocrm/handler.php";
        $.ajax({
            type: "POST",
            url: url,
            data: $(".wpcf7-form").serialize(),
            success: function (data) {
            }
        });
        e.preventDefault();
    });

    $(".menu_button").click(function () {
        $('.main_menu_mob').toggleClass('openType');
        $(".menu_button").toggleClass('openType');
        console.log("+");
    });

    $(window).resize(function () {
        $('.main_menu_mob').removeClass('openType');
        $(".menu_button").removeClass('openType');
    });


    $('.review_row').each(function () { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'inline',
            showCloseBtn: true,
            closeBtnInside: true
        });
    });

    $('.learn-w-list').each(function () { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'inline',
            showCloseBtn: true,
            closeBtnInside: true
        });
    });

    $('.subscribe-popup').each(function () { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'inline',
            showCloseBtn: true,
            closeBtnInside: true
        });
    });

    if ($('.js-accordion-item').size() > 0) {
        $('.js-accordion-item').Accordion({onlyOneOpen: 'true'});
    }

    $('.js-reg-form').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: 'input',
    });

    $('#show-ask-form').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: 'input',
        // modal: true,
        // closeOnBgClick:true
    });

    if ($('.payment_issue').size() > 0) {
        flyingBlock();
    }
});


$(window).scroll(function () {
    if ($('.payment_issue').size() > 0) {
        flyingBlock();
    }
});
function flyingBlock() {
    var blockWidth = $('.payment_issue').first().outerWidth();
    var criticalPoint = $('.subscribe-sec.subscribe__side-bar').offset().top + $('.subscribe-sec.subscribe__side-bar').outerHeight();
    var criticalPointMax = $('.main-content').offset().top + $('.main-content').outerHeight();

    if ($(window).scrollTop() > criticalPoint) {
        $('body').addClass('fly-bitch-fly');
        $('.payment_issue.flyer').css('max-width', blockWidth + 'px');
        if (($(window).scrollTop() + $('.payment_issue.flyer').outerHeight()) > criticalPointMax) {
            $('.payment_issue.flyer').css({
                'top': criticalPointMax - $('.payment_issue.flyer').outerHeight() + 'px',
                'position': 'absolute',
                'transition': 'all 0s'
            });
        } else {
            $('.payment_issue.flyer').css({
                'top': '15px',
                'position': 'fixed'
            });
        }
    } else {
        $('.payment_issue.flyer').removeAttr('style');
        $('.payment_issue.flyer').css({
            'transition': 'top 1s',
            'max-width': blockWidth + 'px'
        });
        $('body').removeClass('fly-bitch-fly');

    }
}

$(window).load(function () {
    collage();
    $('.Collage').removeWhitespace().collagePlus({
        'targetHeight': 200
    });
});
function collage() {
    $('.Collage').removeWhitespace().collagePlus(
        {
            'fadeSpeed': 2000,
            'targetHeight': 200

        }
    );
}
;
var resizeTimer = null;
$(window).bind('resize', function () {
    $('.Collage .Image_Wrapper').css("opacity", 0);
    if (resizeTimer)
        clearTimeout(resizeTimer);
    resizeTimer = setTimeout(collage, 200);
});