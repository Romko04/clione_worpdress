<?php 
/*template name: Сторінка "Clione Fit"*/
get_header() ?>
<section class="clione__about">
                <div class="container clione__about-container">
                    <div class="clione__about-content">
                        <div class="clione__about-content__wrapper">
                            <img src="<?php the_field('cl-img1')?>" alt="clione img">
                        </div>
                        <div class="goods__content-about clione__about-content__wrapper">
                            <h2 class="goods__content-about__title">
                                <?php the_field('cl-1_title')?>
                            </h2>
                            <p>
                                <?php the_field('cl-1_sub-title')?>
                            </p>
                            <ul class="about-specifications__list">
                            <?php
                                $cl_about_list1 = get_field('cl-adv-list1');
                                foreach ($cl_about_list1 as $value) {?>
                                    <li><?php echo $value['Text']?></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="goods__content-about clione__about-content__wrapper">
                            <h2 class="goods__content-about__title">
                                <?php the_field('cl-2_title')?>
                            </h2>
                            <p>
                                <?php the_field('cl-2_sub-title')?>
                            </p>
                            <ul class="about-specifications__list about-specifications__list--clione">
                                <?php
                                $cl_about_list2 = get_field('cl-adv-list2');
                                foreach ($cl_about_list2 as $value) {?>
                                    <li><?php echo $value['Text']?></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="clione__about-content__wrapper">
                            <img src="<?php the_field('cl-img2')?>" alt="clione img">
                        </div>
                    </div>
                </div>
</section>
 <section class="advantages__clione">
                <div class="ticker">
                    <div class="ticker__wrapper">
                        <div class="ticker-animation">
                            <h6>переваги апарата</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>переваги апарата</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>переваги апарата</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>переваги апарата</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>переваги апарата</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>переваги апарата</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>переваги апарата</h6>
                        </div>
                    </div>
                </div>
                <div class="container advantages__container">
                    <ul class="advantages__clione-list">
                    <?php
                        $cl_adv_list = get_field('cl-adv-list');

                        foreach ($cl_adv_list as $value) {
                            ?>
                            <?php if (!empty($value['Img'])) { ?>
                                <li class="advantages__photo-wrapper">
                                    <img src="<?php echo esc_url($value['Img']); ?>" alt="clione product">
                                </li>
                            <?php } else { ?>
                                <li>
                                    <h3 class="advantages__clione-title"><?php echo esc_html($value['title']); ?></h3>
                                    <p><?php echo esc_html($value['Text']); ?></p>
                                </li>
                            <?php } ?>
                            <?php
                        }
                        ?>
                    </ul>
                    <div class="swiper advantages__slider--mobile">
                        <div class="swiper-wrapper swiper-wrapper--advantages">
                            <?php
                         foreach ($cl_adv_list as $value) {
                            ?>
                            <?php if (!empty($value['Img'])) { ?>
                                <div class="swiper-slide">
                                    <div class="advantages__content advantages__content--photoes">
                                        <img src="<?php echo esc_url($value['Img']); ?>" alt="clione product">
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="swiper-slide">
                                    <div class="advantages__content">
                                        <h3 class="advantages__clione-title"><?php echo esc_html($value['title']); ?></h3>
                                        <p><?php echo esc_html($value['Text']); ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php
                        }
                        ?>
                        </div>
                    </div>
                    <div class="swiper__buttons advantages__swiper-buttons">
                        <div class="swiper__buttons-wrapper">
                            <div class="swiper-button-next swiper-button-next--advantages"></div>
                            <div class="swiper-button-prev swiper-button-prev--advantages "></div>
                        </div>
                    </div>
                    <div class="advantages__clione-content__bottom">
                        <div class="advantages__clione-photo__wrapper">
                            <h2><?php the_field('text-under-photo')?></h2>
                            <img src="<?php the_field('cl-big-photo') ?>" alt="clione photo">
                        </div>
                        <div class="button-wrapper">
                            <button class="button cart--button">Замовити</button>
                        </div>
                    </div>
                </div>
</section>
            <section class="comparator comparator-clione">
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
                                            <img class="image-before slider-image" src="<?php echo get_template_directory_uri() ?>/assets/img/beforeafter/before.jpg"
                                                alt="">
                                            <img class="image-after slider-image" src="<?php echo get_template_directory_uri() ?>/assets/img/beforeafter/after.jpg"
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
                                            <img class="image-before slider-image" src="<?php echo get_template_directory_uri() ?>/assets/img/beforeafter/before.jpg"
                                                alt="">
                                            <img class="image-after slider-image" src="<?php echo get_template_directory_uri() ?>/assets/img/beforeafter/after.jpg"
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
                                            <img class="image-before slider-image" src="<?php echo get_template_directory_uri() ?>/assets/img/beforeafter/before.jpg"
                                                alt="">
                                            <img class="image-after slider-image" src="<?php echo get_template_directory_uri() ?>/assets/img/beforeafter/after.jpg"
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
                                    <img class="image-before slider-image" src="<?php echo get_template_directory_uri() ?>/assets/img/beforeafter/before.jpg" alt="">
                                    <img class="image-after slider-image" src="<?php echo get_template_directory_uri() ?>/assets/img/beforeafter/after.jpg" alt="">
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
                                    <img class="image-before slider-image" src="<?php echo get_template_directory_uri() ?>/assets/img/beforeafter/before.jpg" alt="">
                                    <img class="image-after slider-image" src="<?php echo get_template_directory_uri() ?>/assets/img/beforeafter/after.jpg" alt="">
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
                                    <img class="image-before slider-image" src="<?php echo get_template_directory_uri() ?>/assets/img/beforeafter/before.jpg" alt="">
                                    <img class="image-after slider-image" src="<?php echo get_template_directory_uri() ?>/assets/img/beforeafter/after.jpg" alt="">
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
                                    <img class="image-before slider-image" src="<?php echo get_template_directory_uri() ?>/assets/img/beforeafter/before.jpg" alt="">
                                    <img class="image-after slider-image" src="<?php echo get_template_directory_uri() ?>/assets/img/beforeafter/after.jpg" alt="">
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
            <section class="reviews clione--reviews">
                <div class="ticker">
                    <div class="ticker__wrapper">
                        <div class="ticker-animation">
                            <h6>Відгуки</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Відгуки</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Відгуки</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Відгуки</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Відгуки</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Відгуки</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Відгуки</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Відгуки</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Відгуки</h6>
                        </div>
                    </div>
                </div>
                <div class="container reviews__container">
                    <div class="swiper reviews__slider">
                        <div class="swiper-wrapper swiper-wrapper--reviews">
                        <?php
                                $page_review_list = get_field('cl_list_review');
                                foreach ($page_review_list as $value) {?>
                                <div class="swiper-slide">
                                    <div class="reviews__content">
                                        <img src="<?php echo $value['review']?>" alt="rewiev">
                                     </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="swiper__buttons reviews__swiper-buttons">
                        <div class="swiper__buttons-wrapper">
                            <div class="swiper-button-next swiper-button-next--reviews"></div>
                            <div class="swiper-button-prev swiper-button-prev--reviews "></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="clione-video">
                <div class="ticker ">
                    <div class="ticker__wrapper">
                        <div class="ticker-animation">
                            <h6>Відеогляд</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Відеогляд</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Відеогляд</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Відеогляд</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Відеогляд</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Відеогляд</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Відеогляд</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Відеогляд</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Відеогляд</h6>
                        </div>
                    </div>
                </div>
                <div class="container video-container">
                    <?php the_field('link_video')?>
                </div>
                <div class="button-wrapper">
                    <button class="button cart--button">Замовити</button>
                </div>
            </section>
            <section class="recommend">
                <div class="ticker ">
                    <div class="ticker__wrapper">
                        <div class="ticker-animation">
                            <h6>Рекомендації щодо проведення процедури</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Рекомендації щодо проведення процедури</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Рекомендації щодо проведення процедури</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Рекомендації щодо проведення процедури</h6>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="container recommend__container">
                    <div class="swiper recommend__slider--mobile">
                        <div class="swiper-wrapper swiper-wrapper--recommend">
                        <?php
                                $page_recomend_list = get_field('cl_reccomend-list');
                                foreach ($page_recomend_list as $value) {?>
                                <div class="swiper-slide">
                                <div class="recommend__content">
                                    <div class="recommend__list-item__img-wrapper">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/Star.svg" alt="start icon">
                                    </div>
                                    <p>
                                        <?php echo $value['Text']?>
                                    </p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="swiper__buttons recommend__swiper-buttons">
                        <div class="swiper__buttons-wrapper">
                            <div class="swiper-button-next swiper-button-next--recommend"></div>
                            <div class="swiper-button-prev swiper-button-prev--recommend "></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="indications">
                <div class="container indications__container">
                    <h3 class="title indications__title">Показання та противопоказання</h3>
                    <ul class="indications__list">
                        <li class="indications__list-item">
                            <div class="indications__list-item__img">
                                <img src="<?php the_field('cl-bottom-img1')?>" alt="photo">
                            </div>
                        </li>
                        <?php
                        $prot_list = get_field('cl-bottom-list-prot');
                        if ($prot_list) {
                            foreach ($prot_list as $value) {
                                ?>
                                <li class="indications__list-item">
                                <div class="indications__list-item__content">
                                    <h6><?php echo $value['title']?></h6>
                                    <?php
                                        if ($value['sub-title']) { ?>
                                            <p>
                                            <?php echo $value['sub-title']?>
                                            </p>
                                       <?php }
                                    ?>
                                    <ul class="about-specifications__list">
                                    <?php
                                    $prot_spec_list = $value['list'];
                                    if ($prot_spec_list) {
                                     foreach ($prot_spec_list as $value) {
                                            ?>
                                            <li><?php echo $value['Text']?></li>
                                            <?php
                                        }
                                    } 
                                    ?>
                                    </ul>
                                </div>
                            </li>
                                <?php
                            }
                        } 
                        ?>
                    </ul>
                </div>
            </section>
            <section class="characteristics">
                <div class="ticker ">
                    <div class="ticker__wrapper">
                        <div class="ticker-animation">
                            <h6>Технічні характеристики Clione Fit</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Технічні характеристики Clione Fit</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Технічні характеристики Clione Fit</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Технічні характеристики Clione Fit</h6>
                        </div>
                        
                    </div>
                </div>
                <div class="container characteristics__container">
                    <ul class="characteristics__list">
                    <?php
                    $tech_list = get_field('techical-ch-cl');
                    $tech_counter = 1;
                    if ($tech_list) {
                        foreach ($tech_list as $value) {
                            ?>
                            <li class="characteristics__list-item item-<?php echo $tech_counter?>">
                                <div class="characteristics__img-wrapper">
                                    <img src="<?php echo esc_url($value['icon']); ?>" alt="icon">
                                </div>
                                <span><?php echo esc_html($value['type']); ?></span>
                                <p><?php echo esc_html($value['Text']); ?></p>
                            </li>
                            <?php
                            $tech_counter++;
                        }
                    } else {
                        // Handle the case where $tech_list is empty or not available
                        echo '<li>No technical characteristics available</li>';
                    }
                    ?>
                    </ul>
                    <div class="swiper characteristics__slider--mobile">
                        <div class="swiper-wrapper swiper-wrapper--characteristics">
                            <?php
                            foreach ($tech_list as $value) {
                                ?>
                            <div class="swiper-slide">
                                <div class="characteristics__content">
                                    <div class="characteristics__img-wrapper">
                                        <img src="<?php echo esc_url($value['icon']); ?>" alt="icon">
                                        </div>
                                        <span><?php echo esc_html($value['type']); ?></span>
                                        <p><?php echo esc_html($value['Text']); ?></p>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination--characteristics swiper-pagination--custom"></div>
                </div>
            </section>
            <section class="goods">
                <div class="container">
                    <h2 class="title goods__title">Що ви отримаєте?</h2>
                    <div class="goods__content goods__content--result">
                        <div class="goods__content-left">
                            <img src="<?php  the_field('result_photo')?>" alt="product">
                        </div>
                        <div class="vertical-text">
                            <span>замовити свіжість</span>
                            <span>замовити свіжість</span>
                            <span>замовити свіжість</span>
                            <!-- Додайте більше слів за потреби -->
                        </div>
                        <div class="ticker ticker--mobile">
                            <div class="ticker__wrapper">
                                <div class="ticker-animation">
                                    <h6>замовити свіжість</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>замовити свіжість</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>замовити свіжість</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>замовити свіжість</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>замовити свіжість</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>замовити свіжість</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>замовити свіжість</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>замовити свіжість</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>замовити свіжість</h6>
                                </div>
                            </div>
                        </div>
                        <div class="goods__content-about">
                            <h3 class="goods__content-about__title">
                                <?php the_field('result_title')?>
                            </h3>
                            <ul class="about-specifications__list">
                            <?php
                                $result_list = get_field('result_list');
                                foreach ($result_list as $value) {
                                    ?>
                                        <li><?php echo $value['text']?></li>
                                    <?php
                                }
                                ?>
                            </ul>
                            <div class="goods__content-sale">
                                <span class="price"><?php the_field('result_price')?></span>
                                <div class="product__quantity">
                                    <button class="quantity__btn minus">
                                        <img class="svg__minus cart__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/cart/minus.svg" alt="plus icon">
                                    </button>
                                    <input type="text" class="quantity__input" value="1">
                                    <button class="quantity__btn plus">
                                        <img class="svg__plus cart__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/cart/plus.svg" alt="minus icon">
                                    </button>
                                </div>
                            </div>
                            <div class="goods__content-about__buttons">
                                <button class="button cart--button">Замовити</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
<?php 
get_footer() ?>

