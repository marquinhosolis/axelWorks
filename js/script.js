function hamburguer() {
    $(".hamburger").click(function() {
        $(this).toggleClass("hamburger--open");

        $(".menuMobile").toggleClass("menuMobile--visible");
        $("body").toggleClass("body--locked");
    });
}

function menuDropdown() {
    $(".hasSubMenu").click(function(e) {
        e.preventDefault();
        $(this)
            .find(".subMenu")
            .slideToggle();
    });

    $(".subMenu li a").click(function() {
        window.location = this.href;
    });
}

function fixedMenu() {
    if ($(window).scrollTop() > 50) {
        $("header").addClass("header--fixed");
    } else if ($(window).scrollTop() < 50) {
        $("header").removeClass("header--fixed");
    }
}

function ajustMarginCertifiedReasonImage() {
    $(".certifiedReason").each(function() {
        var altImagem = $(this)
            .find(".certifiedReasonImage")
            .outerHeight();
        $(this).css({
            "padding-top": altImagem / 2,
            "margin-top": altImagem / 2 + 30
        });
    });
}

function flexslider() {
    if ($(window).width() > 767) {
        $(".testimonialsBoxes .flexslider").addClass("carousel");
    }
    $(".testimonialsBoxes .flexslider").flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 380,
        itemMargin: 30,
        animationLoop: false,
        slideshow: false,
        controlNav: false,
        move: 1
    });

    $(".reconstructionGallery .flexslider").flexslider({
        animation: "slide",
        slideshow: false,
        controlNav: false
    });
}

function readFaqAnswer() {
    $(".faqReadAnswer").click(function(e) {
        e.preventDefault();
        var faq = $(this).closest(".faq");
        faq.siblings().removeClass("faq--open");
        faq.siblings()
            .find(".faqAnswer")
            .slideUp("");

        faq.toggleClass("faq--open");
        faq.find(".faqAnswer").slideToggle();
    });
}

function ajustMarginOurTeamImage() {
    if ($(window).width() < 767) {
        $(".ourTeamBoxesProfile").each(function() {
            var altImagem = $(this)
                .find(".ourTeamBoxesProfileImage")
                .outerHeight();
            $(this).css("margin-top", altImagem / 2 + 30);
            $(this)
                .find(".ourTeamBoxesProfileCopy")
                .css("padding-top", altImagem / 2);
        });
    } else {
        //...
        $(".ourTeamBoxesProfile").each(function() {
            var lgImagem = $(this)
                .find(".ourTeamBoxesProfileImage img")
                .width();
            $(this).css("margin-left", lgImagem / 4 + 20);
            $(this).css("margin-right", lgImagem / 4 + 20);
            $(this)
                .find(".ourTeamBoxesProfileCopy")
                .css({
                    "padding-left": lgImagem / 2 + 20,
                    "margin-right": lgImagem / 2 + 30
                });
        });
    }
}

function submitForm() {
    $(".faqCoverForms select").change(function() {
        this.form.submit();
    });
}

function gallery() {
    $("[data-fancybox]").fancybox({
        toolbar: false,
        transitionEffect: "slide"
    });
}

$(document).ready(function() {
    fixedMenu();

    hamburguer();
    menuDropdown();
    flexslider();
    readFaqAnswer();
    submitForm();
    gallery();
    AOS.init();
});

$(window).load(function() {
    ajustMarginCertifiedReasonImage();
    ajustMarginOurTeamImage();
});

$(window).scroll(function() {
    fixedMenu();
});
