<?php 
/*template name: Домашная сторінка*/
get_header() ?>

<section class="hero">
                <div class="container hero__container">
                    <div class="hero__content">

                        <div class="hero__content-left">
                            <div class="hero__content-left__photoes">
                            <?php
                            $banner_photoes = get_field('banner-photoes');
                            foreach ($banner_photoes as $key => $value) {
                                echo '<img src="' . $value . '" alt="product">';
                            }
                            ?>
                            </div>
                            <div class="hero__content-left__middle">
                                <div class="hero__content-left__text">
                                    <?php the_field('banner-text')?>
                                </div>
                                <button class="button">Усі товари</button>
                            </div>
                            <h1 class="title hero__title hero__desktop">
                                <?php the_field('banner-title')?>
                            </h1>
                        </div>
                        <div class="hero__content-right">
                            <img src="<?php the_field('banner-main-photo')?>" alt="product">
                            <h1 class="title hero__title hero__mobile">
                                <?php the_field('banner-title')?>
                            </h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about">
                <div class="ticker">
                    <div class="ticker__wrapper">
                        <div class="ticker-animation">
                            <h6>про нас</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>про нас</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>про нас</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>про нас</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>про нас</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>про нас</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>про нас</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>про нас</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>про нас</h6>
                        </div>
                    </div>
                </div>
                <div class="container about__container">
                    <div class="about__content">
                        <div class="about__content-wrapper">
                            <div class="about__content-left">
                                <img src="<?php the_field('about-photo1') ?>" alt="product">
                            </div>
                            <div class="about__content-middle">
                                <div class="about__content-middle__top">
                                    <h3 class="about__content-middle__top-title ">
                                        <?php the_field('about-years') ?>
                                    </h3>
                                    <p>
                                        <?php the_field('about-text2') ?>
                                    </p>
                                    <div class="about__content-middle__bottom">
                                        <div class="about__content-middle__bottom-img">
                                            <img src="<?php the_field('about-photo2') ?>" alt="women">
                                        </div>
                                        <button class="second--button">Більше про нас</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about__content-right">
                            <h3 class="about__content-middle__top-title mobile">
                                <?php the_field('about-years') ?>
                            </h3>
                            <p class="mobile">
                                 <?php the_field('about-text2') ?>
                            </p>
                            <div class="about__content-right__img">
                                <img src="<?php the_field('about-photo3') ?>" alt="women">
                            </div>
                            <p>
                                <?php the_field('about-text1') ?>
                            </p>
                            <div class="about__content-right__button-wrapper--mobile mobile">
                                <button class="second--button">Більше про нас</button>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            
            <section class="goods goods--right">
                <h2 class="title goods__title"><?php the_field('mas-title-main')?></h2>
                <div class="container">
                    <div class="goods__content">
                        <div class="goods__content-left">
                            <img src="<?php the_field('mas-photo')?>" alt="clione fit">
                        </div>
                        <div class="goods__content-about">
                            <h3 class="goods__content-about__title">
                                <?php the_field('mas-title')?>
                            </h3>
                            <span>
                                <?php the_field('mas-sub-title')?>
                            </span>
                            <p>
                                <?php the_field('mas-sub-text')?>
                            </p>
                            <ul class="about-specifications__list">
                                <?php
                                $mas_spec_list = get_field('mas-details');
                                foreach ($mas_spec_list as $value) {?>
                                    <li><?php echo $value['text']?></li>
                                <?php } ?>
                            </ul>
                            <div class="goods__content-about__buttons">
                                <button class="second--button cart--button">Замовити</button>
                                <button class="button single--button">Детальніше</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="metalt--mobile">
                <h2 class="title metalt__mobile-title">
                    <?php the_field('metalt-home-title')?>
                </h2>
                <div class="container metalt--slider__container">
                    <div class="swiper swiper--metalt swiper--pagination">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="swiper__metalt-content">
                                    <div class="swiper__metalt-img">
                                        <img src="<?php the_field('metalt-home-1-img')?>" alt="product">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper__metalt-content">
                                    <div class="swiper__metalt-img">
                                        <img src="<?php the_field('metalt-home-2-img')?>" alt="product">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper__metalt-content">
                                    <div class="swiper__metalt-img">
                                        <img src="<?php the_field('metalt-home-3-img')?>" alt="product">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper__metalt-content">
                                    <div class="swiper__metalt-img">
                                        <img src="<?php the_field('metalt-home-4-img')?>" alt="product">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper__metalt-content">
                                    <div class="swiper__metalt-img">
                                        <img src="<?php the_field('metalt-home-5-img')?>" alt="product">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination--custom swiper-pagination--metalt"></div>
                </div>
                <div class="metalt__mobile-bottom">
                    <div class="container">
                        <h4 class="metalt__mobile-bottom__title">
                            <?php the_field('metalt-home-text1')?>
                        </h4>
                        <p class="metalt__mobile-bottom__text">
                            <?php the_field('metalt-home-text2')?>
                        </p>
                        <div class="metalt__mobile-bottom__buttons">
                            <button class="button cart--button">Замовити</button>
                            <button class="second--button single--button">Детальніше</button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="metalt">
                <div class="container metalt__container">
                    <h2 class="title metalt__title"><?php the_field('metalt-home-title')?></h2>
                    <div class="metalt__grid-wrapper">
                        <div class="metalt__grid-content__left">
                            <div class="metalt__grid-content__left-top">
                                <div class="metalt__grid-content__left-top__block">
                                    <img src="<?php the_field('metalt-home-1-img')?>" alt="product">
                                </div>
                                <div
                                    class="metalt__grid-content__left-top__block metalt__grid-content__left-top__block--text">
                                    <span>
                                    <?php the_field('metalt-home-text1')?>
                                    </span>
                                    <p>
                                        <?php the_field('metalt-home-text2')?>
                                    </p>
                                    <div class="metalt__btn-wrapper">
                                        <button class="button metalt__btn  cart--button">Замовити</button>
                                    </div>
                                </div>
                            </div>
                            <div class="metalt__grid-content__left-bottom">
                                <div class="metalt__grid-content__left-bottom__block">
                                    <img src="<?php the_field('metalt-home-1-img')?>" alt="product">
                                </div>
                                <div class="metalt__grid-content__left-bottom__block">
                                    <img src="<?php the_field('metalt-home-2-img')?>" alt="product">
                                </div>
                            </div>
                        </div>
                        <div class="metalt__grid-content__right">
                            <div class="metalt__grid-content__right-left">
                                <div class="metalt__grid-content__right-left">
                                    <div class="metalt__grid-content__right-left-top">
                                        <img src="<?php the_field('metalt-home-3-img')?>" alt="product">
                                    </div>
                                    <div class="metalt__grid-content__right-left-bottom">
                                        <div class="metalt__grid-content__right-button__wrapper">
                                            <button class="second--button single--button">Детальніше</button>
                                        </div>
                                        <div class="metalt__grid-content__right-left-bottom__img">
                                            <img src="<?php the_field('metalt-home-4-img')?>" alt="product">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="metalt__grid-content__right-right">
                                <img src="<?php the_field('metalt-home-5-img')?>" alt="product">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="comparator">
                <div class="ticker ">
                    <div class="ticker__wrapper">
                        <div class="ticker-animation">
                            <h6>Результати</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Результати</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Результати</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Результати</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Результати</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Результати</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Результати</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Результати</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Результати</h6>
                        </div>
                    </div>
                </div>
                <div class="container comparator__container">
                    <div class="swiper swiper--comparator__mobile">
                        <div class="swiper-wrapper swiper-wrapper--comparator__mobile">
                            <div class="swiper-slide">
                                <div class="comparator__content">
                                    <div class="containe">
                                        <div class="image-container">
                                            <img class="image-before slider-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/beforeafter/before.jpg"
                                                alt="">
                                            <img class="image-after slider-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/beforeafter/after.jpg"
                                                alt="">
                                        </div>
                                        <input class="slider" type="range" min="0" max="100" value="50">
                                        <div class="slider-line">

                                        </div>
                                        <div class="slider-button" aria-hidden="true">
                                            <svg class="comparator__svg" viewBox="0 0 60 60" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.25" y="0.25" width="59.5" height="59.5" rx="19.75"
                                                    fill="white" />
                                                <rect x="0.25" y="0.25" width="59.5" height="59.5" rx="19.75"
                                                    stroke="#202020" stroke-width="0.5" />
                                                <path
                                                    d="M36 30.0001C35.9951 29.474 35.7832 28.971 35.41 28.6001L31.12 24.3001C30.9326 24.1138 30.6792 24.0093 30.415 24.0093C30.1508 24.0093 29.8974 24.1138 29.71 24.3001C29.6163 24.393 29.5419 24.5036 29.4911 24.6255C29.4403 24.7474 29.4142 24.8781 29.4142 25.0101C29.4142 25.1421 29.4403 25.2728 29.4911 25.3946C29.5419 25.5165 29.6163 25.6271 29.71 25.7201L33 29.0001H23C22.7348 29.0001 22.4804 29.1054 22.2929 29.293C22.1054 29.4805 22 29.7348 22 30.0001C22 30.2653 22.1054 30.5196 22.2929 30.7072C22.4804 30.8947 22.7348 31.0001 23 31.0001H33L29.71 34.2901C29.5217 34.477 29.4154 34.7312 29.4144 34.9965C29.4135 35.2619 29.518 35.5168 29.705 35.7051C29.892 35.8934 30.1461 35.9997 30.4115 36.0006C30.6768 36.0016 30.9317 35.897 31.12 35.7101L35.41 31.4101C35.7856 31.0367 35.9978 30.5296 36 30.0001Z"
                                                    fill="#202020" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="comparator__content">
                                    <div class="containe">
                                        <div class="image-container">
                                            <img class="image-before slider-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/beforeafter/before.jpg"
                                                alt="">
                                            <img class="image-after slider-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/beforeafter/after.jpg"
                                                alt="">
                                        </div>
                                        <input class="slider" type="range" min="0" max="100" value="50">
                                        <div class="slider-line">

                                        </div>
                                        <div class="slider-button" aria-hidden="true">
                                            <svg class="comparator__svg" viewBox="0 0 60 60" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.25" y="0.25" width="59.5" height="59.5" rx="19.75"
                                                    fill="white" />
                                                <rect x="0.25" y="0.25" width="59.5" height="59.5" rx="19.75"
                                                    stroke="#202020" stroke-width="0.5" />
                                                <path
                                                    d="M36 30.0001C35.9951 29.474 35.7832 28.971 35.41 28.6001L31.12 24.3001C30.9326 24.1138 30.6792 24.0093 30.415 24.0093C30.1508 24.0093 29.8974 24.1138 29.71 24.3001C29.6163 24.393 29.5419 24.5036 29.4911 24.6255C29.4403 24.7474 29.4142 24.8781 29.4142 25.0101C29.4142 25.1421 29.4403 25.2728 29.4911 25.3946C29.5419 25.5165 29.6163 25.6271 29.71 25.7201L33 29.0001H23C22.7348 29.0001 22.4804 29.1054 22.2929 29.293C22.1054 29.4805 22 29.7348 22 30.0001C22 30.2653 22.1054 30.5196 22.2929 30.7072C22.4804 30.8947 22.7348 31.0001 23 31.0001H33L29.71 34.2901C29.5217 34.477 29.4154 34.7312 29.4144 34.9965C29.4135 35.2619 29.518 35.5168 29.705 35.7051C29.892 35.8934 30.1461 35.9997 30.4115 36.0006C30.6768 36.0016 30.9317 35.897 31.12 35.7101L35.41 31.4101C35.7856 31.0367 35.9978 30.5296 36 30.0001Z"
                                                    fill="#202020" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="comparator__content">
                                    <div class="containe">
                                        <div class="image-container">
                                            <img class="image-before slider-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/beforeafter/before.jpg"
                                                alt="">
                                            <img class="image-after slider-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/beforeafter/after.jpg"
                                                alt="">
                                        </div>
                                        <input class="slider" type="range" min="0" max="100" value="50">
                                        <div class="slider-line">

                                        </div>
                                        <div class="slider-button" aria-hidden="true">
                                            <svg class="comparator__svg" viewBox="0 0 60 60" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.25" y="0.25" width="59.5" height="59.5" rx="19.75"
                                                    fill="white" />
                                                <rect x="0.25" y="0.25" width="59.5" height="59.5" rx="19.75"
                                                    stroke="#202020" stroke-width="0.5" />
                                                <path
                                                    d="M36 30.0001C35.9951 29.474 35.7832 28.971 35.41 28.6001L31.12 24.3001C30.9326 24.1138 30.6792 24.0093 30.415 24.0093C30.1508 24.0093 29.8974 24.1138 29.71 24.3001C29.6163 24.393 29.5419 24.5036 29.4911 24.6255C29.4403 24.7474 29.4142 24.8781 29.4142 25.0101C29.4142 25.1421 29.4403 25.2728 29.4911 25.3946C29.5419 25.5165 29.6163 25.6271 29.71 25.7201L33 29.0001H23C22.7348 29.0001 22.4804 29.1054 22.2929 29.293C22.1054 29.4805 22 29.7348 22 30.0001C22 30.2653 22.1054 30.5196 22.2929 30.7072C22.4804 30.8947 22.7348 31.0001 23 31.0001H33L29.71 34.2901C29.5217 34.477 29.4154 34.7312 29.4144 34.9965C29.4135 35.2619 29.518 35.5168 29.705 35.7051C29.892 35.8934 30.1461 35.9997 30.4115 36.0006C30.6768 36.0016 30.9317 35.897 31.12 35.7101L35.41 31.4101C35.7856 31.0367 35.9978 30.5296 36 30.0001Z"
                                                    fill="#202020" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper__buttons comparator__swiper-buttons">
                        <div class="swiper__buttons-wrapper">
                            <div class="swiper-button-next swiper-button-next--comparator"></div>
                            <div class="swiper-button-prev swiper-button-prev--comparator"></div>
                        </div>
                    </div>
                    <div class="comparator__content">
                        <div class="comparator__content-left">
                            <div class="containe content__comparator-left">
                                <div class="image-container image-container--left">
                                    <img class="image-before slider-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/beforeafter/before.jpg" alt="">
                                    <img class="image-after slider-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/beforeafter/after.jpg" alt="">
                                </div>
                                <input class="slider" type="range" min="0" max="100" value="50">
                                <div class="slider-line">

                                </div>
                                <div class="slider-button" aria-hidden="true">
                                    <svg class="comparator__svg" viewBox="0 0 60 60" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.25" y="0.25" width="59.5" height="59.5" rx="19.75" fill="white" />
                                        <rect x="0.25" y="0.25" width="59.5" height="59.5" rx="19.75" stroke="#202020"
                                            stroke-width="0.5" />
                                        <path
                                            d="M36 30.0001C35.9951 29.474 35.7832 28.971 35.41 28.6001L31.12 24.3001C30.9326 24.1138 30.6792 24.0093 30.415 24.0093C30.1508 24.0093 29.8974 24.1138 29.71 24.3001C29.6163 24.393 29.5419 24.5036 29.4911 24.6255C29.4403 24.7474 29.4142 24.8781 29.4142 25.0101C29.4142 25.1421 29.4403 25.2728 29.4911 25.3946C29.5419 25.5165 29.6163 25.6271 29.71 25.7201L33 29.0001H23C22.7348 29.0001 22.4804 29.1054 22.2929 29.293C22.1054 29.4805 22 29.7348 22 30.0001C22 30.2653 22.1054 30.5196 22.2929 30.7072C22.4804 30.8947 22.7348 31.0001 23 31.0001H33L29.71 34.2901C29.5217 34.477 29.4154 34.7312 29.4144 34.9965C29.4135 35.2619 29.518 35.5168 29.705 35.7051C29.892 35.8934 30.1461 35.9997 30.4115 36.0006C30.6768 36.0016 30.9317 35.897 31.12 35.7101L35.41 31.4101C35.7856 31.0367 35.9978 30.5296 36 30.0001Z"
                                            fill="#202020" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="comparator__content-middle">
                            <div class="containe content__comparator-middle">
                                <div class="image-container image-container--middle">
                                    <img class="image-before slider-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/beforeafter/before.jpg" alt="">
                                    <img class="image-after slider-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/beforeafter/after.jpg" alt="">
                                </div>
                                <input class="slider" type="range" min="0" max="100" value="50">
                                <div class="slider-line">

                                </div>
                                <div class="slider-button" aria-hidden="true">
                                    <svg class="comparator__svg" viewBox="0 0 60 60" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.25" y="0.25" width="59.5" height="59.5" rx="19.75" fill="white" />
                                        <rect x="0.25" y="0.25" width="59.5" height="59.5" rx="19.75" stroke="#202020"
                                            stroke-width="0.5" />
                                        <path
                                            d="M36 30.0001C35.9951 29.474 35.7832 28.971 35.41 28.6001L31.12 24.3001C30.9326 24.1138 30.6792 24.0093 30.415 24.0093C30.1508 24.0093 29.8974 24.1138 29.71 24.3001C29.6163 24.393 29.5419 24.5036 29.4911 24.6255C29.4403 24.7474 29.4142 24.8781 29.4142 25.0101C29.4142 25.1421 29.4403 25.2728 29.4911 25.3946C29.5419 25.5165 29.6163 25.6271 29.71 25.7201L33 29.0001H23C22.7348 29.0001 22.4804 29.1054 22.2929 29.293C22.1054 29.4805 22 29.7348 22 30.0001C22 30.2653 22.1054 30.5196 22.2929 30.7072C22.4804 30.8947 22.7348 31.0001 23 31.0001H33L29.71 34.2901C29.5217 34.477 29.4154 34.7312 29.4144 34.9965C29.4135 35.2619 29.518 35.5168 29.705 35.7051C29.892 35.8934 30.1461 35.9997 30.4115 36.0006C30.6768 36.0016 30.9317 35.897 31.12 35.7101L35.41 31.4101C35.7856 31.0367 35.9978 30.5296 36 30.0001Z"
                                            fill="#202020" />
                                    </svg>
                                </div>
                            </div>
                            <div class="containe content__comparator-middle">
                                <div class="image-container image-container--middle">
                                    <img class="image-before slider-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/beforeafter/before.jpg" alt="">
                                    <img class="image-after slider-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/beforeafter/after.jpg" alt="">
                                </div>
                                <input class="slider" type="range" min="0" max="100" value="50">
                                <div class="slider-line">

                                </div>
                                <div class="slider-button" aria-hidden="true">
                                    <svg class="comparator__svg" viewBox="0 0 60 60" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.25" y="0.25" width="59.5" height="59.5" rx="19.75" fill="white" />
                                        <rect x="0.25" y="0.25" width="59.5" height="59.5" rx="19.75" stroke="#202020"
                                            stroke-width="0.5" />
                                        <path
                                            d="M36 30.0001C35.9951 29.474 35.7832 28.971 35.41 28.6001L31.12 24.3001C30.9326 24.1138 30.6792 24.0093 30.415 24.0093C30.1508 24.0093 29.8974 24.1138 29.71 24.3001C29.6163 24.393 29.5419 24.5036 29.4911 24.6255C29.4403 24.7474 29.4142 24.8781 29.4142 25.0101C29.4142 25.1421 29.4403 25.2728 29.4911 25.3946C29.5419 25.5165 29.6163 25.6271 29.71 25.7201L33 29.0001H23C22.7348 29.0001 22.4804 29.1054 22.2929 29.293C22.1054 29.4805 22 29.7348 22 30.0001C22 30.2653 22.1054 30.5196 22.2929 30.7072C22.4804 30.8947 22.7348 31.0001 23 31.0001H33L29.71 34.2901C29.5217 34.477 29.4154 34.7312 29.4144 34.9965C29.4135 35.2619 29.518 35.5168 29.705 35.7051C29.892 35.8934 30.1461 35.9997 30.4115 36.0006C30.6768 36.0016 30.9317 35.897 31.12 35.7101L35.41 31.4101C35.7856 31.0367 35.9978 30.5296 36 30.0001Z"
                                            fill="#202020" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="comparator__content-right">
                            <div class="containe content__comparator-right">
                                <div class="image-container image-container--right">
                                    <img class="image-before slider-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/beforeafter/before.jpg" alt="">
                                    <img class="image-after slider-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/beforeafter/after.jpg" alt="">
                                </div>
                                <input class="slider" type="range" min="0" max="100" value="50">
                                <div class="slider-line">

                                </div>
                                <div class="slider-button" aria-hidden="true">
                                    <svg class="comparator__svg" viewBox="0 0 60 60" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.25" y="0.25" width="59.5" height="59.5" rx="19.75" fill="white" />
                                        <rect x="0.25" y="0.25" width="59.5" height="59.5" rx="19.75" stroke="#202020"
                                            stroke-width="0.5" />
                                        <path
                                            d="M36 30.0001C35.9951 29.474 35.7832 28.971 35.41 28.6001L31.12 24.3001C30.9326 24.1138 30.6792 24.0093 30.415 24.0093C30.1508 24.0093 29.8974 24.1138 29.71 24.3001C29.6163 24.393 29.5419 24.5036 29.4911 24.6255C29.4403 24.7474 29.4142 24.8781 29.4142 25.0101C29.4142 25.1421 29.4403 25.2728 29.4911 25.3946C29.5419 25.5165 29.6163 25.6271 29.71 25.7201L33 29.0001H23C22.7348 29.0001 22.4804 29.1054 22.2929 29.293C22.1054 29.4805 22 29.7348 22 30.0001C22 30.2653 22.1054 30.5196 22.2929 30.7072C22.4804 30.8947 22.7348 31.0001 23 31.0001H33L29.71 34.2901C29.5217 34.477 29.4154 34.7312 29.4144 34.9965C29.4135 35.2619 29.518 35.5168 29.705 35.7051C29.892 35.8934 30.1461 35.9997 30.4115 36.0006C30.6768 36.0016 30.9317 35.897 31.12 35.7101L35.41 31.4101C35.7856 31.0367 35.9978 30.5296 36 30.0001Z"
                                            fill="#202020" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="goods">
                <h2 class="title goods__title"><?php the_field('plam-title-main')?></h2>
                <div class="container">
                    <div class="goods__content goods__content--left">
                        <div class="goods__content-left">
                            <img src="<?php the_field('plam-photo')?>" alt="clione fit">
                        </div>
                        <div class="goods__content-about">
                            <h3 class="goods__content-about__title">
                                <?php the_field('plam-title')?>
                            </h3>
                            <span>
                                <?php the_field('plam-sub-title')?>
                            </span>
                            <p>
                                <?php the_field('plam-sub-text')?>
                            </p>
                            <ul class="about-specifications__list">
                                <?php
                                $plam_spec_list = get_field('plam-details');
                                foreach ($plam_spec_list as $value) {?>
                                    <li><?php echo $value['text']?></li>
                                <?php } ?>
                            </ul>
                            <div class="goods__content-about__buttons">
                                <button class="second--button cart--button">Замовити</button>
                                <button class="button single--button">Детальніше</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="products__slider">
                <div class="container products__container">
                    <div class="swiper swiper--products">
                        <div class="swiper-wrapper">
                        <?php
                        $args = array('orderby' => 'ID', 'limit' => -1);
                        $products = wc_get_products($args);
                        foreach ($products as $product) { ?>
                            <div class="swiper-slide">
                                <div class="swiper__slide-content">
                                    <div class="product__img">
                                        <?php
                                        $image_url = wp_get_attachment_image_url($product->get_image_id(), 'full');
                                        if ($image_url) {
                                            echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($product->get_name()) . '">';
                                        } else {
                                            echo '<img src="' . get_template_directory_uri() . '/assets/img/product/photo.jpg" alt="product">';
                                        }
                                        ?>
                                    </div>
                                    <div class="product__content">
                                        <p>
                                            <?php echo $product->get_name(); ?>
                                        </p>
                                        <span>
                                            <?php echo $product->get_price_html(); ?>
                                        </span>
                                    </div>
                                    
                                    <div class="product__buttons">
                                        <button class="second--button single--button" data-id="<?php echo $product->get_id(); ?>">Детальніше <img class="popup--circle" src="<?php echo get_template_directory_uri() . "/assets/img/circle.svg"; ?>" alt="product"></button>
                                        <button class="button cart--button" data-id="<?php echo $product->get_id(); ?>">В кошик <img class="popup--circle" src="<?php echo get_template_directory_uri() . "/assets/img/circle-white.svg"; ?>" alt="product"></button>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                    <div class="swiper__buttons">
                        <div class="swiper__buttons-wrapper">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="instagram">
                <div class="ticker ticker--instagram">
                    <div class="ticker__wrapper">
                        <div class="ticker-animation">
                            <h6>instagram</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>instagram</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>instagram</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>instagram</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>instagram</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>instagram</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>instagram</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>instagram</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>instagram</h6>
                        </div>
                    </div>
                </div>
                <div class="container instagram__container">
                    <div class="instagram__content">
                        <ul>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram/inst1.jpg" alt="product image">
                            </li>
                            <li>
                                <a class="instagram__link instagram__link--text" href="">
                                    Підпишись, аби відчути нашу атмосферу
                                </a>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram/inst2.jpg" alt="product image">
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram/inst3.jpg" alt="product image">
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram/inst5.jpg" alt="product image">
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram/inst4.jpg" alt="product image">
                            </li>
                            <li>
                                <a class="instagram__link" href="">
                                    <div class="circle">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/circel.svg" alt="circle words">
                                        <span>Підписатися</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram/inst7.jpg" alt="product image">
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="instagram--mobile">
                <div class="ticker ticker--instagram">
                    <div class="ticker__wrapper">
                        <div class="ticker-animation">
                            <h6>instagram</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>instagram</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>instagram</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>instagram</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>instagram</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>instagram</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>instagram</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>instagram</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>instagram</h6>
                        </div>
                    </div>
                </div>
                <div class="container instagram--slider__container">
                    <div class="swiper swiper--instagram swiper--pagination">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="swiper__instagram-content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram/inst1.jpg" alt="photo with instagram">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper__instagram-content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram/inst1.jpg" alt="photo with instagram">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper__instagram-content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram/inst1.jpg" alt="photo with instagram">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination--instagram swiper-pagination--custom"></div>
                </div>
            </section>


<?php 
get_footer() ?>