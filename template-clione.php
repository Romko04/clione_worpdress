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

