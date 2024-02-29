<?php 
/*template name: Сторінка "META LT"*/
get_header() ?>
<section class="metalt__about">
                <div class="container">
                        <ul class="metalt__about-list">
                        <?php
                        $metalt_about_list = get_field('about_melt');
                        foreach ($metalt_about_list as $item):
                            if (!empty($item['img'])) { ?>
                                <li class="metalt__about-list__item metalt__about-list__item-img">
                                    <div class="metalt__about-list__item-img__wrapper">
                                        <img src="<?php echo $item['img']; ?>" alt="product photo">
                                    </div>
                                </li>
                            <?php } else { ?>
                                <li class="metalt__about-list__item <?php echo (empty($item['list'])) ? 'metalt__about-list__item--text' : ''; ?> metalt__about-list__item--increment">
                                <div class="metalt__star-wrapper">
                                    <img class="metalt__star" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/Star2.svg" alt="star icon">
                                </div>
                                <h2 class="title metalt__about-list__title"><?php echo $item['title']; ?></h2>

                                <?php if (!empty($item['list'])): ?>
                                    <ul class="about-specifications__list">
                                        <?php foreach ($item['list'] as $list_item): ?>
                                            <li><?php echo $list_item['Text']; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php else: ?>
                                    <div class="text metalt__text">
                                        <?php echo $item['text']; ?>
                                </div>
                                <?php endif; ?>
                            </li>
                            <?php }
                        endforeach; ?>
                        </ul>
                    <div class="metalt__btn-wrapper">
                        <button class="button cart--button">
                            Замовити
                        </button>
                    </div>
                </div>
            </section>
            <section class="advantages">
                <div class="ticker ">
                    <div class="ticker__wrapper">
                        <div class="ticker-animation">
                            <h6>Переваги апарата</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Переваги апарата</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Переваги апарата</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Переваги апарата</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Переваги апарата</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Переваги апарата</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Переваги апарата</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Переваги апарата</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Переваги апарата</h6>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <ul class="advantages__list">
                    <?php   
                    $adv_metalt_list = get_field('adv-metalt-list');
                    $firstItem_adv = 1;
                    foreach ($adv_metalt_list as $value) { ?>
                        <li class="advantages__list-item advantages__list-item--<?php echo $firstItem_adv?>">
                            <div class="advantages__list-item__img-wrapper">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/Star2.svg" alt="star icon">
                            </div>
                            <h4 class="advantages__list-item__title">
                                <?php echo $value['title']; ?>
                            </h4>
                            <p class="text">
                                <?php echo $value['Text']; ?>
                            </p>
                        </li>
                    <?php
                    $firstItem_adv++;
                    } ?>
                    </ul>
                    <div class="swiper advantages__slider--mobile">
                        <div class="swiper-wrapper swiper-wrapper--advantages">
                            <?php
                                foreach ($adv_metalt_list as $value) { ?>
                            <div class="swiper-slide">
                                        <div class="advantages__content">
                                        <div class="advantages__list-item__img-wrapper">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/Star2.svg" alt="star icon">
                                        </div>
                                            <h3 class="advantages__clione-title">
                                                <?php echo $value['title']; ?>
                                            </h3>
                                            <p>
                                                <?php echo $value['Text']; ?>
                                            </p>
                                        </div>
                                    </div>
                            <?php
                            } ?>
                        </div>
                    </div>
                    <div class="swiper__buttons advantages__swiper-buttons">
                        <div class="swiper__buttons-wrapper">
                            <div class="swiper-button-next swiper-button-next--advantages"></div>
                            <div class="swiper-button-prev swiper-button-prev--advantages "></div>
                        </div>
                    </div>
                    <div class="advantages__metalt-bottom">
                        <img src="<?php the_field('adv_photo_1')?>" alt="metalt photo">
                        <img src="<?php the_field('adv_photo_2')?>" alt="metalt photo">
                    </div>
                </div>
            </section>
            <section class="instruction">
                <h2 class="title instruction__title">
                    15-хвилинна вправа для шкіри
                </h2>
                <div class="container instruction__container">
                    <ul class="instruction__list">
                        <?php
                                $instr_metalt_list = get_field('instruction_list');
                                foreach ($instr_metalt_list as $value) { ?>
                                    <li class="instruction__list-item">
                                    <div class="instruction__list-item__img-wrapper">
                                        <img class="instruction__star" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/Star2.svg" alt="start">
                                        <img class="instruction__img" src="<?php echo $value['img']?>" alt="start icon">
                                    </div>
                                    <div class="instruction__text-content">
                                        <h4><?php echo $value['count']?></h4>
                                        <p>
                                            <?php echo $value['Text']?>
                                        </p>
                                    </div>
                                </li>
                            <?php
                            } ?>
                    </ul>
                    <div class="swiper recommend__slider--mobile recommend__slider--mobile__instruction">
                        <div class="swiper-wrapper swiper-wrapper--recommend">
                            <?php
                            foreach ($instr_metalt_list as $value) { ?>
                            <div class="swiper-slide">
                                <div class="instruction__content">
                                    <div class="instruction__list-item__img-wrapper">
                                        <img class="instruction__star" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/Star2.svg" alt="start">
                                        <img class="instruction__img" src="<?php echo $value['img']?>" alt="start icon">
                                    </div>
                                    <div class="instruction__text-content">
                                                <h4><?php echo $value['count']?></h4>
                                                <p>
                                                <?php echo $value['Text']?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                } ?>
                        </div>
                    </div>
                    <div class="swiper__buttons recommend__swiper-buttons recommend__swiper-buttons--instruction">
                        <div class="swiper__buttons-wrapper">
                            <div class="swiper-button-next swiper-button-next--recommend"></div>
                            <div class="swiper-button-prev swiper-button-prev--recommend "></div>
                        </div>
                    </div>
                    <div class="metalt__btn-wrapper">
                        <button class="button cart--button">
                            Замовити
                        </button>
                    </div>
                </div>
            </section>
            <section class="comparator metalt__compatator">
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
            <section class="reviews">
                <div class="ticker ">
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
                                $page_review_list = get_field('metalt_reviews');
                                foreach ($page_review_list as $value) {?>
                                <div class="swiper-slide">
                                    <div class="reviews__content">
                                        <img src="<?php echo $value['img']?>" alt="rewiev">
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
                </div>>
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
                    <?php the_field('metalt_video')?>
                </div>
                <div class="button-wrapper">
                    <button class="button cart--button">Замовити</button>
                </div>
            </section>
            <section class="modes">
                <div class="ticker ">
                    <div class="ticker__wrapper">
                        <div class="ticker-animation">
                            <h6>Має 5 режимів</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Має 5 режимів</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Має 5 режимів</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Має 5 режимів</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Має 5 режимів</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Має 5 режимів</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Має 5 режимів</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Має 5 режимів</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Має 5 режимів</h6>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="swiper modes__slider">
                        <div class="swiper-wrapper swiper-wrapper--modes">
                        <?php
                        
                        $reshumes_list = get_field('reshumes_list');
                         foreach ($reshumes_list as $value) {
                            ?>
                            <div class="swiper-slide">
                                <div class="modes__content">
                                    <div class="modes__content-img__wrapper">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/Star2.svg" alt="">
                                    </div>
                                    <div class="modes__content-text">
                                        <h4 class="modes__content-text__title">
                                            <?php echo $value['title']?>
                                        </h4>
                                        <div class="text">
                                            <?php echo $value['Text']?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        </div>
                    </div>
                    <div class="swiper__buttons modes__swiper-buttons">
                        <div class="swiper__buttons-wrapper">
                            <div class="swiper-button-next swiper-button-next--modes"></div>
                            <div class="swiper-button-prev swiper-button-prev--modes "></div>
                        </div>
                    </div>

                    <div class="swiper recommend__slider--mobile-2">
                        <div class="swiper-wrapper swiper-wrapper--recommend">
                            <div class="swiper-slide">
                                <div class="recommend__content recommend__content--metalt">
                                    <div class="recommend__list-item__img-wrapper">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/Star.svg" alt="start icon">
                                    </div>
                                    <h4 class="recommend__content--metalt__title">TF Mode (Тепловий фракційний режим)
                                    </h4>
                                    <p>
                                        Ліфтінг без використання скальпеля. Локальне підвищення метаболізму шкіри. <br><br>
                                        Випромінюює радіохвилі у формі голки. Розподіл енергії випромінювання має форму
                                        акупунктурної голки в кожній точці
                                        та збільшується, коли вона йде від поверхні до глибших частин шкіри, мінімізуючи
                                        навантаження на поверхню шкіри.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="recommend__content recommend__content--metalt">
                                    <div class="recommend__list-item__img-wrapper">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/Star.svg" alt="start icon">
                                    </div>
                                    <h4 class="recommend__content--metalt__title">TF Mode (Тепловий фракційний режим)
                                    </h4>
                                    <p>
                                        Пропускаючи високочастотний струм через шкіру, кровотік і лімфоток посилює метаболізм шкіри. <br><br>
                                        Відтік крові і лімфи стає більш плавним. Надлишок води та продукти життєдіяльності легко виводяться, що ефективно при набряках. Він також сприяє основному обміну речовин і виробленню колагену, ГК і еластину, надаючи шкірі пружність і життєву силу. Має високу релаксуючу дію і регулює вегетативну нервову систему. 
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="recommend__content recommend__content--metalt">
                                    <div class="recommend__list-item__img-wrapper">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/Star.svg" alt="start icon">
                                    </div>
                                    <h4 class="recommend__content--metalt__title">TF Mode (Тепловий фракційний режим)
                                    </h4>
                                    <p>
                                        Ліфтінг без використання скальпеля. Локальне підвищення метаболізму шкіри.
                                        Випромінюює радіохвилі у формі голки. Розподіл енергії випромінювання має форму
                                        акупунктурної голки в кожній точці
                                        та збільшується, коли вона йде від поверхні до глибших частин шкіри, мінімізуючи
                                        навантаження на поверхню шкіри.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="recommend__content recommend__content--metalt">
                                    <div class="recommend__list-item__img-wrapper">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/Star.svg" alt="start icon">
                                    </div>
                                    <h4 class="recommend__content--metalt__title">TF Mode (Тепловий фракційний режим)
                                    </h4>
                                    <p>
                                        Ліфтінг без використання скальпеля. Локальне підвищення метаболізму шкіри.
                                        Випромінюює радіохвилі у формі голки. Розподіл енергії випромінювання має форму
                                        акупунктурної голки в кожній точці
                                        та збільшується, коли вона йде від поверхні до глибших частин шкіри, мінімізуючи
                                        навантаження на поверхню шкіри.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="recommend__content recommend__content--metalt">
                                    <div class="recommend__list-item__img-wrapper">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/Star.svg" alt="start icon">
                                    </div>
                                    <h4 class="recommend__content--metalt__title">TF Mode (Тепловий фракційний режим)
                                    </h4>
                                    <p>
                                        Ліфтінг без використання скальпеля. Локальне підвищення метаболізму шкіри.
                                        Випромінюює радіохвилі у формі голки. Розподіл енергії випромінювання має форму
                                        акупунктурної голки в кожній точці
                                        та збільшується, коли вона йде від поверхні до глибших частин шкіри, мінімізуючи
                                        навантаження на поверхню шкіри.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper__buttons recommend__swiper-buttons">
                        <div class="swiper__buttons-wrapper">
                            <div class="swiper-button-next swiper-button-next--recommend-2"></div>
                            <div class="swiper-button-prev swiper-button-prev--recommend-2 "></div>
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
                                <img src="<?php the_field('result_list-photo-mt') ?>" alt="photo">
                            </div>
                        </li>
                    <?php
                        $prot_list = get_field('metalt_prot_list');
                        if ($prot_list) {
                            foreach ($prot_list as $value) {
                                ?>
                                <li class="indications__list-item">
                                <div class="indications__list-item__content">
                                    <h6><?php echo $value['title']?></h6>
                                    <?php
                                        if ($value['sub']) { ?>
                                            <p>
                                            <?php echo $value['sub']?>
                                            </p>
                                       <?php }
                                    ?>
                                    <ul class="about-specifications__list">
                                    <?php
                                    $prot_spec_list = $value['список'];
                                    if ($prot_spec_list) {
                                     foreach ($prot_spec_list as $value) {
                                            ?>
                                            <li><?php echo $value['text']?></li>
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
                        <div class="ticker-animation animation--long">
                            <h6>Технічні характеристики Clione Fit</h6>
                        </div>
                        <div class="ticker-animation animation--long">
                            <h6>Технічні характеристики Clione Fit</h6>
                        </div>
                        <div class="ticker-animation animation--long">
                            <h6>Технічні характеристики Clione Fit</h6>
                        </div>
                        <div class="ticker-animation animation--long">
                            <h6>Технічні характеристики Clione Fit</h6>
                        </div>

                    </div>
                </div>
                <div class="container characteristics__container">
                    <ul class="characteristics__list">
                    <?php
                    $tech_list = get_field('metalt_techical');
                    $tech_counter = 1;
                    if ($tech_list) {
                        foreach ($tech_list as $value) {
                            ?>
                            <li class="characteristics__list-item item-<?php echo $tech_counter?>">
                                <div class="characteristics__img-wrapper">
                                    <img src="<?php echo esc_url($value['icon']); ?>" alt="icon">
                                </div>
                                <span><?php echo esc_html($value['title']); ?></span>
                                <p><?php echo esc_html($value['text']); ?></p>
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
                                        <span><?php echo esc_html($value['title']); ?></span>
                                        <p><?php echo esc_html($value['text']); ?></p>
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
                            <img src="<?php the_field('result_mt_img')?>" alt="product">
                        </div>
                        <div class="vertical-text">
                            <span>замовити свіжість</span>
                            <span>замовити свіжість</span>
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

                            </div>
                        </div>
                        <div class="goods__content-about">
                            <h3 class="goods__content-about__title">
                                <?php the_field('result_bottom_mt_title')?>
                            </h3>
                            <ul class="about-specifications__list">
                            <?php
                                $result_list = get_field('result_bottom_mt_list');
                                foreach ($result_list as $value) {
                                    ?>
                                        <li><?php echo $value['text']?></li>
                                    <?php
                                }
                                ?>
                            </ul>
                            <div class="goods__content-sale">
                                <span class="price"><?php the_field('result_mt_price')?></span>
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