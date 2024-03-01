// Перевірка наявності елементів перед створенням swiper
const swiperElement1 = document.querySelector('.swiper--products');
if (swiperElement1) {
    const swiper = new Swiper(swiperElement1, {
        slidesPerView: 1,
        spaceBetween: 10,
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

const swiperElement2 = document.querySelector('.bfaf__slider');
if (swiperElement2) {
    const swiper2 = new Swiper(swiperElement2, {
        slidesPerView: 2,
        spaceBetween: 20,
        breakpoints: {
            1024: {
                slidesPerView: 4.2,
            }
        },
        navigation: {
            nextEl: '.swiper-button-next--bfaf',
            prevEl: '.swiper-button-prev--bfaf',
        },
    });
}

const swiperElement3 = document.querySelector('.swiper--metalt');
if (swiperElement3) {
    const swiper3 = new Swiper(swiperElement3, {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: '.swiper-pagination--metalt',
        },
    });
}

const swiperElement4 = document.querySelector('.swiper--instagram');
if (swiperElement4) {
    const swiper4 = new Swiper(swiperElement4, {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: '.swiper-pagination--instagram',
        },
    });
}

const swiperElement5 = document.querySelector('.reviews__slider');
if (swiperElement5) {
    const swiper5 = new Swiper(swiperElement5, {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next--reviews',
            prevEl: '.swiper-button-prev--reviews',
        },
        slidesPerView: 1,
        spaceBetween: 20,
        breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 20,
            }
        }
    });
}


const swiperElement6 = document.querySelector('.products__slider--plamine__cosmeticks');

if (swiperElement6) {
    const swiper6 = new Swiper(swiperElement6, {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next--cosmeticks',
            prevEl: '.swiper-button-prev--cosmeticks',
        },
        breakpoints: {
            1024: {
                slidesPerView: 4.1,
                spaceBetween: 20,
            }
        }
    });
}


const swiperElement7 = document.querySelector('.products__slider--plamine__accessories');

if (swiperElement7) {
    const swiper7 = new Swiper(swiperElement7, {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next--accessories',
            prevEl: '.swiper-button-prev--accessories',
        },
        breakpoints: {
            1024: {
                slidesPerView: 4.1,
                spaceBetween: 20,
            }
        }
    });
}

const swiperElement8 = document.querySelector('.products__slider--plamine__videos')

if (swiperElement8) {
    const swiper8 = new Swiper(swiperElement8, {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next--videos',
            prevEl: '.swiper-button-prev--videos',
        },
        breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 20,
            }
        }
    });
}


const swiperElement9 = document.querySelector('.modes__slider')

if (swiperElement9) {
    const swiper9 = new Swiper(swiperElement9, {
        slidesPerView: 2,
        spaceBetween: 20,
        navigation: {
            nextEl: '.swiper-button-next--modes',
            prevEl: '.swiper-button-prev--modes',
        },
    });
}


const swiperElement10 = document.querySelector('.swiper--cooperation')

if (swiperElement10) {
    const swiper10 = new Swiper(swiperElement10, {
        slidesPerView: 2.5,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next--cooperation',
            prevEl: '.swiper-button-prev--cooperation',
        },
        breakpoints: {
            1024: {
                slidesPerView: 6.2,
                spaceBetween: 20,
            }
        }
    });
}


const swiperElement11 = document.querySelector('.advantages__slider--mobile')

if (swiperElement11) {
    const swiper11 = new Swiper(swiperElement11, {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next--advantages',
            prevEl: '.swiper-button-prev--advantages',
        },
    });
}


const swiperElement12 = document.querySelector('.recommend__slider--mobile')

if (swiperElement12) {
    const swiper12 = new Swiper(swiperElement12, {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next--recommend',
            prevEl: '.swiper-button-prev--recommend',
        },
        breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 20,
            }
        }
    });
}


const swiperElement13 = document.querySelector('.characteristics__slider--mobile')

if (swiperElement13) {
    const swiper13 = new Swiper(swiperElement13, {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: '.swiper-pagination--characteristics',
        },
    });
}


const swiperElement14 = document.querySelector('.recommend__slider--mobile-2')

if (swiperElement14) {
    const swiper14 = new Swiper(swiperElement14, {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next--recommend-2',
            prevEl: '.swiper-button-prev--recommend-2',
        },
    });
}


const swiperElement15 = document.querySelector('.payment__slider--mobile')

if (swiperElement15) {
    const swiper15 = new Swiper(swiperElement15, {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: '.swiper-pagination--payment',
        },
    });
}

const swiperElement16 = document.querySelector('.delivery__slider--mobile')

if (swiperElement16) {
    const swiper16 = new Swiper(swiperElement16, {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: '.swiper-pagination--delivery',
        },
    });
}

const swiperElement17 = document.querySelector('.partners__slider')

if (swiperElement17) {
    const swiper17 = new Swiper(swiperElement17, {
        slidesPerView: 1.4,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next--partners',
            prevEl: '.swiper-button-prev--partners',
        },
        breakpoints: {
            1024: {
                slidesPerView: 4.1,
                spaceBetween: 20,
            },
        }
    });
}








