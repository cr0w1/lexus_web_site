// Header Type = Fixed
$(window).on("scroll", function () {
    var window_top = $(window).scrollTop() + 1;
    if (window_top > 120) {
        //
        $(".navbar").addClass("fixed-top bg-light");
    } else {
        $(".navbar").removeClass("fixed-top bg-light");
    }
});

$("#single-car").sliderPro({
    width: 570,
    height: 450,
    fade: true,
    arrows: true,
    buttons: false,
    fullScreen: true,
    shuffle: true,
    smallSize: 500,
    mediumSize: 1000,
    largeSize: 3000,
    thumbnailArrows: true,
    autoplay: false,
});

// Jquery validate
$(document).ready(function () {
    // login
    $("#login").validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
            senha: {
                required: true,
            },
        },
        highlight: function (element) {
            $(element).removeClass("is-valid").addClass("is-invalid");
        },
        unhighlight: function (element) {
            $(element).removeClass("is-invalid").addClass("is-valid");
        },
        errorPlacement: function (error, element) {
            error.insertAfter("");
        },
    });

    // Registration
    $("#registration").validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
            },
            telefone: {
                required: true,
            },
        },
        highlight: function (element) {
            $(element).removeClass("is-valid").addClass("is-invalid");
        },
        unhighlight: function (element) {
            $(element).removeClass("is-invalid").addClass("is-valid");
        },
        errorPlacement: function (error, element) {
            error.insertAfter("");
        },
    });

    //new car
    $("#new_car").validate({
        rules: {
            marca: {
                minlength: 3,
                required: true,
            },
            modelo: {
                required: true,
            },
            ano: {
                required: true,
            },
            cor: {
                required: true,
            },
            portas: {
                required: true,
            },
            cambio: {
                required: true,
            },
            velocidade: {
                required: true,
            },
            KmRodados: {
                required: true,
            },
            combustivel: {
                required: true,
            },
            motor: {
                required: true,
            },
            valor: {
                required: true,
            },
        },
        highlight: function (element) {
            $(element).removeClass("is-valid").addClass("is-invalid");
        },
        unhighlight: function (element) {
            $(element).removeClass("is-invalid").addClass("is-valid");
        },
        errorPlacement: function (error, element) {
            error.insertAfter(""); //So i putted it after the .form-group so it will not include to your append/prepend group.
        },
    });
});
