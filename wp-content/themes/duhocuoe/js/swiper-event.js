
(function ($) {
    if ($( window ).width() > 425) {
        var swiper_event= new Swiper(".swiper-event", {
            slidesPerView: 2,
            spaceBetween: 30,
            slidesPerGroup: 2,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".posts-event-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".posts-event-button-next",
                prevEl: ".posts-event-button-prev",
            },
        });
    } else {
        var swiper_event= new Swiper(".swiper-event", {
            slidesPerView: 1,
            spaceBetween: 30,
            slidesPerGroup: 2,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".posts-event-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".posts-event-button-next",
                prevEl: ".posts-event-button-prev",
            },
        });
    }



    let maxHeight = 0;
    let postContainerEvent = $('.post-container-event');
    postContainerEvent.each(function () {
        if ($(this).height() > maxHeight) {
            maxHeight = $(this).height();
        }
    })
    postContainerEvent.each(function () {
        $(this).height(maxHeight);
    })
})(jQuery);



