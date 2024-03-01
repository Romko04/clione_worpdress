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
                <div class="container bfaf__container">
                    <div class="swiper bfaf__slider">
                        <div class="swiper-wrapper swiper-wrapper--bfaf">
                            <?php
                                $after_list = get_field('after_photoes');
                                foreach ($after_list as $value) {?>
                                <div class="swiper-slide">
                                <div class="bfaf__content">
                                    <img src="<?php echo $value['img']?>" alt="rewiev">
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="swiper__buttons bfaf__swiper-buttons">
                        <div class="swiper__buttons-wrapper">
                            <div class="swiper-button-next swiper-button-next--bfaf"></div>
                            <div class="swiper-button-prev swiper-button-prev--bfaf "></div>
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