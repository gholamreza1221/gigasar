
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    $('.nav-contact').attr('href', 'tel:'+$('.nav-contact').attr('data'));
}
$('.nav-contact').mouseover(function(){
    $('.nav-contact span').text($(this).attr('data'));
});

$('.nav-contact').mouseout(function(){
    $('.nav-contact span').text($(this).attr('data1'));
});



/*   ---------------- For Menu Of Header --------------- */
var menu_swiper = new Swiper('.swiper-container_menu', {

    slidesPerView: 11,
    spaceBetween: 10,
    freeMode: false,

    breakpoints: {
        1400: {
            slidesPerView: 11,
            spaceBetween: 40,
        },
        991: {
            slidesPerView: 7,
            spaceBetween: 40,
        },
        768: {
            slidesPerView: 5,
            spaceBetween: 30,
        },
        640: {
            slidesPerView: 4,
            spaceBetween: 20,
        }
    }
});


/*   ---------------- For Slider Homepage --------------- */
var top_swiper = new Swiper('.swiper_container_top', {
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    slidesPerView: 1,
    spaceBetween: 40,
    freeMode: false,

    //pagination: true,
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    },
    breakpoints: {
        1400: {
            slidesPerView: 1,
            spaceBetween: 40,
        },
        991: {
            slidesPerView: 1,
            spaceBetween: 40,
        },
        768: {
            slidesPerView: 1,
            spaceBetween: 30,
        },
        640: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        320: {
            slidesPerView: 1,
            spaceBetween: 10,
        }
    }
});


/*   ---------------- For Slider About Page --------------- */
var personal_swiper = new Swiper('.swiper_container_pesonal', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    slidesPerView: 3,
    spaceBetween: 10,
    freeMode: false,

    breakpoints: {
        1400: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
        991: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        640: {
            slidesPerView: 1,
            spaceBetween: 20,
        }
    }
});




