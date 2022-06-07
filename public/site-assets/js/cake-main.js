
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}



$(document).ready(function(){
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
// scroll body to 0px on click
$('#back-to-top').click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 400);
    return false;
});
});





$('.cake-main-carousel').owlCarousel({
    loop:true,
    rewind:true,
    nav:true,
    dots:false,
    autoplay:true,
    lazyLoad:true,
    animateOut: 'fadeOut',
    autoplayTimeout:25000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        480:{
            items:1,
        },
        768:{
            items:1,
        },
        1024:{
            items:1,
        },
        1380:{
            items:1,
        },
        1580:{
            items:1,
        }
    }
})





$('.cake-carousel').owlCarousel({
    loop:true,
    rewind:true,
    margin:20,
    nav:true,
    dots:false,
    autoplay:true,
    lazyLoad:true,
    autoplayTimeout:12000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        480:{
            items:1,
        },
        768:{
            items:2,
        },
        1024:{
            items:4,
        },
        1380:{
            items:4,
        },
        1580:{
            items:4,
        }
    }
})





$('.cake-type-carousel').owlCarousel({
    loop:true,
    rewind:true,
    margin:20,
    nav:true,
    dots:false,
    autoplay:true,
    lazyLoad:true,
    autoplayTimeout:12000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        480:{
            items:1,
        },
        768:{
            items:2,
        },
        1024:{
            items:4,
        },
        1380:{
            items:4,
        },
        1580:{
            items:4,
        }
    }
})



$('.other-food-carousel').owlCarousel({
    loop:true,
    rewind:true,
    margin:20,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:15000,
    responsiveClass:true,
    responsive:{
       0:{
        items:1,
    },
    480:{
        items:1,
    },
    768:{
        items:2,
    },
    1024:{
        items:4,
    },
    1380:{
        items:4,
    },
    1580:{
        items:4,
    }
}
})