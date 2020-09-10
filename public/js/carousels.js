$(document).ready(function () {
    var owl = $(".owl-carousel");
    owl.owlCarousel({
        pagination: false,
        paginationNumbers: false,
        autoplay: true,
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1,
            },
            400: {
                items: 2,
            },
            600: {
                items: 3,
            },
            800: {
                items: 4,
            },
            1000: {
                items: 5,
            },
        },
    });
    $(".owl-next").click(function () {
        owl.trigger("next.owl.carousel");
    });
    $(".owl-prev").click(function () {
        owl.trigger("prev.owl.carousel", [300]);
    });
});
