// window.onscroll = function() {myFunction()};

// var header = document.getElementById("myHeader");
// var sticky = header.offsetTop;

// function myFunction() {
//     if (window.pageYOffset > sticky) {
//         header.classList.add("sticky");
//     } else {
//         header.classList.remove("sticky");
//     }
// }

window.onscroll = function () {
    myFunction();
};
var header = document.getElementById("header");
var sticky = header.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("headerSticky");
    } else {
        header.classList.remove("headerSticky");
    }
}

$("#surprise-home-content").hide();
$("#btnToggle").on("click", function () {
    $("#main-home-content, #surprise-home-content").toggle();
    window.scrollTo(0, 0);
});

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $("#back-to-top").fadeIn();
        } else {
            $("#back-to-top").fadeOut();
        }
    });
    // scroll body to 0px on click
    $("#back-to-top").click(function () {
        $("body,html").animate(
            {
                scrollTop: 0,
            },
            400
        );
        return false;
    });
});

$(function (e) {
    var $open = $(".js-searchOpen");
    var $close = $(".js-searchClose");
    var $body = $("body");
    var $lay = $(".search-overlay");
    var $input = $(".search-form > .search");

    $open.on("click", function (e) {
        e.preventDefault();
        $body.addClass("-hide");
        $lay.addClass("-show");
        $input.focus(); // focus
    });
    // .js-searchClose
    $close.on("click", function (e) {
        e.preventDefault();
        $body.removeClass("-hide");
        $lay.removeClass("-show"); // .search-overlay .-show
    });
});


$(".filter-active").on("click", function (e) {
    e.preventDefault();
    $(".filter-wrapper").slideToggle();
});

$(".add-note").on("click", function (e) {
    e.preventDefault();
    $(".add-textarea").slideToggle();
});

function showPassword(id, el) {
    let x = document.getElementById(id);
    if (x.type === 'password') {
        x.type = 'text';
        el.innerHTML =
            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg> ';
    } else {
        x.type = 'password';
        el.innerHTML =
            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>';
    }
};

$(document).ready(function () {
    $("#hide").click(function () {
        $(".search-icon-display").hide();
    });
    $("#show").click(function () {
        $(".search-icon-display").show();
    });
});

(function ($) {
    $.fn.spinner = function () {
        this.each(function () {
            var el = $(this);

            // add elements
            el.wrap('<span class="spinner"></span>');
            el.before('<span class="sub">-</span>');
            el.after('<span class="add">+</span>');

            // substract
            el.parent().on("click", ".sub", function () {
                if (el.val() > parseInt(el.attr("min")))
                    el.val(function (i, oldval) {
                        return --oldval;
                    });
            });

            // increment
            el.parent().on("click", ".add", function () {
                if (el.val() < parseInt(el.attr("max")))
                    el.val(function (i, oldval) {
                        return ++oldval;
                    });
            });
        });
    };
})(jQuery);

$("input[type=number]").spinner();

// $(".addon-total").hide();
// $(".show-total").click(function() {
//     if($(this).is(":checked")) {
//         $(".addon-total").show();
//     }
// });

$('input[type="checkbox"]').change(function () {
    $("div.addon-total")[
        $("input[type=checkbox]:checked").length ? "slideDown" : "slideUp"
    ]("fast");
});

$(".cart-btn").on("click", function (event) {
    event.preventDefault();
    event.stopPropagation();
    $("#overlayCart").toggleClass("active");
});

$(".btn-close").click(function () {
    $("#overlayCart").removeClass("active");
});

function openFiler() {
    document.getElementById("mb-view").style.width = "100%";
    document.getElementById("overlaySide").style.display = "block";
}

function closeFiler() {
    document.getElementById("mb-view").style.width = "0";
    document.getElementById("overlaySide").style.display = "none";
}

$(window).resize(function () {
    if ($(window).width() > 992) {
        document.getElementById("mb-view").style.width = "100%";
    }
});
$(window).resize(function () {
    if ($(window).width() < 991) {
        document.getElementById("mb-view").style.width = "0";
    }
});

// user login
$("#header #loginBtn > a").on("click", function (event) {
    event.preventDefault();
    event.stopPropagation();
    $("#loginBtn, .login-section").toggleClass("active");
});

// mobile menu
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".sidebar .nav-link").forEach(function (element) {
        element.addEventListener("click", function (e) {
            let nextEl = element.nextElementSibling;
            let parentEl = element.parentElement;

            if (nextEl) {
                e.preventDefault();
                let mycollapse = new bootstrap.Collapse(nextEl);

                if (nextEl.classList.contains("show")) {
                    mycollapse.hide();
                } else {
                    mycollapse.show();
                    // find other submenus with class=show
                    var opened_submenu =
                        parentEl.parentElement.querySelector(".submenu.show");
                    // if it exists, then close all of them
                    if (opened_submenu) {
                        new bootstrap.Collapse(opened_submenu);
                    }
                }
            }
        }); // addEventListener
    }); // forEach
});
// DOMContentLoaded  end

function showDiv() {
    var x = document.getElementById("qty");
    if (x.style.display === "none") {
        x.style.display = "flex";
    } else {
        x.style.display = "none";
    }
    // document.getElementById('qty').style.display = "flex";
}

$(".home-main-carousel").owlCarousel({
    loop: true,
    rewind: false,
    margin: 0,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 10000,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        480: {
            items: 1,
        },
        768: {
            items: 1,
        },
        1024: {
            items: 1,
        },
        1380: {
            items: 1,
        },
        1580: {
            items: 1,
        },
    },
});

$(".addvertise-carousel").owlCarousel({
    loop: true,
    rewind: false,
    margin: 30,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 15000,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        480: {
            items: 1,
        },
        768: {
            items: 2,
        },
        1024: {
            items: 3,
        },
        1380: {
            items: 3,
        },
        1580: {
            items: 3,
        },
    },
});

$(".special-food-carousel").owlCarousel({
    loop: true,
    rewind: false,
    margin: 30,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 10000,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        480: {
            items: 1,
        },
        768: {
            items: 2,
        },
        1024: {
            items: 3,
        },
        1380: {
            items: 3,
        },
        1580: {
            items: 3,
        },
    },
});

$(".menu-carousel").owlCarousel({
    loop: false,
    rewind: false,
    margin: 30,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 15000,
    responsiveClass: true,
    responsive: {
        0: {
            items: 3,
        },
        480: {
            items: 3,
        },
        768: {
            items: 4,
        },
        1024: {
            items: 7,
        },
        1380: {
            items: 7,
        },
        1580: {
            items: 7,
        },
    },
});

$(".testimonial-carousel").owlCarousel({
    loop: true,
    rewind: false,
    margin: 30,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 15000,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        480: {
            items: 1,
        },
        768: {
            items: 1,
        },
        1024: {
            items: 1,
        },
        1380: {
            items: 1,
        },
        1580: {
            items: 1,
        },
    },
});

$(".other-food-carousel").owlCarousel({
    loop: true,
    rewind: false,
    margin: 10,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 13000,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        480: {
            items: 1,
        },
        768: {
            items: 2,
        },
        1024: {
            items: 5,
        },
        1380: {
            items: 5,
        },
        1580: {
            items: 5,
        },
    },
});

$(".favourites-carousel").owlCarousel({
    loop: true,
    rewind: false,
    margin: 5,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 15000,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        480: {
            items: 1,
        },
        768: {
            items: 2,
        },
        1024: {
            items: 3,
        },
        1380: {
            items: 3,
        },
        1580: {
            items: 3,
        },
    },
});

$(".list-category-slider").owlCarousel({
    loop: true,
    rewind: false,
    margin: 0,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 15000,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        480: {
            items: 1,
        },
        768: {
            items: 2,
        },
        1024: {
            items: 3,
        },
        1380: {
            items: 3,
        },
        1580: {
            items: 3,
        },
    },
});

$(".quick-view-slide").owlCarousel({
    loop: true,
    rewind: false,
    margin: 0,
    nav: true,
    dots: false,
    autoplay: false,
    autoplayTimeout: 15000,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        480: {
            items: 1,
        },
        768: {
            items: 1,
        },
        1024: {
            items: 1,
        },
        1380: {
            items: 1,
        },
        1580: {
            items: 1,
        },
    },
});


// accordion
$(".accordion")
    .find(".accordion-title")
    .on("click", function () {
        $(this).toggleClass("active");
        $(this).next().slideToggle("fast");
        $(".accordion-content").not($(this).next()).slideUp("fast");
        $(".accordion-title").not($(this)).removeClass("active");
    });
