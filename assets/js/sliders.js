// Перевірка наявності елементів перед створенням swiper
const swiperElement1 = document.querySelector('.swiper--products');
if (swiperElement1) {
    const swiper = new Swiper(swiperElement1, {
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            1024: {
                slidesPerView: 4.1,
                spaceBetween: 20,
            }
        }
    });
}

const swiperElement2 = document.querySelector('.swiper--comparator__mobile');
if (swiperElement2) {
    const swiper2 = new Swiper(swiperElement2, {
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next--comparator',
            prevEl: '.swiper-button-prev--comparator',
        },
        allowTouchMove: false,
    });
}

const swiperElement3 = document.querySelector('.swiper--metalt');
if (swiperElement3) {
    const swiper3 = new Swiper(swiperElement3, {
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination--metalt',
        },
    });
}

const swiperElement4 = document.querySelector('.swiper--instagram');
if (swiperElement4) {
    const swiper4 = new Swiper(swiperElement4, {
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination--instagram',
        },
    });
}

const swiperElement5 = document.querySelector('.reviews__slider');
if (swiperElement5) {
    const swiper5 = new Swiper(swiperElement5, {
        slidesPerView: 4,
        spaceBetween: 20,
        navigation: {
            nextEl: '.swiper-button-next--reviews',
            prevEl: '.swiper-button-prev--reviews',
        },
    });
}

