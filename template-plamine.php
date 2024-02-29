<?php 
/*template name: Сторінка "PLAMINE"*/
get_header() ?>
<section class="plamine__about">
                <div class="container plamine__about-container">
                    <ul class="plamine__about-list">
                        <li class="plamine__about-list__item plamine__about-list__item--img">
                            <div class="plamine__about-img__wrapper">
                                <img src="<?php the_field('plamine_top-img') ?>" alt="plamine photo">
                            </div>
                        </li>
                        <?php
                        $acc_list = get_field('plamine_accordeon');
                        foreach ($acc_list as $value) {?>
                            <li class="plamine__about-list__item">
                                <h3 class="plamine__about-list__item-title title"><?php echo $value['title']?></h3>
                                <div class="plamine__about-list__item-text">
                                    <?php if(isset($value['sub'])): ?>
                                        <span class="plamine__about-list__item-subtitle">
                                            <?php echo $value['sub']?>
                                        </span>
                                    <?php endif; ?>
                                    <div class="text">
                                        <?php echo $value['text']?>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </section>
             <section class="plamine__brand">
                <div class="ticker">
                    <div class="ticker__wrapper">
                        <div class="ticker-animation">
                            <h6>PlAMINE</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>PlAMINE</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>PlAMINE</h6>
                        </div><div class="ticker-animation">
                            <h6>PlAMINE</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>PlAMINE</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>PlAMINE</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>PlAMINE</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>PlAMINE</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>PlAMINE</h6>
                        </div>
                    </div>
                </div> 
                <div class="container plamine__brand-container">
                    <div class="plamine__brand-content">
                        <div class="plamine__brand-content__left">
                            <div class="plamine__brand-content__left-images">
                                <img src="<?php the_field('br_pl_img_1')?>" alt="plamine product">
                                <img src="<?php the_field('br_pl_img_2')?>" alt="plamine product">
                            </div>
                            <h4 class="title plamine__brand-content__left-title"><?php the_field('br_pl_title_1')?></h4>
                            <p class="text plamine__brand-content__left-text">
                                <?php the_field('br_pl_text_1')?>
                            </p>
                        </div>
                        <div class="plamine__brand-content__right">
                            <h4 class="title plamine__brand-content__right-title"><?php the_field('br_pl_title_2')?></h4>
                            <p class="text plamine__brand-content__right-text">
                                <?php the_field('br_pl_text_2')?>
                            </p>
                            <div class="plamine__brand-content__right-img__wrapper">
                                <img src="<?php the_field('br_pl_img_3')?>" alt="products img">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="products__slider products__slider--plamine">
                <h2 class="title products__title">Косметичні засоби</h2>
                <div class="container products__container--plamine">
                    <div class="swiper  products__slider--plamine__cosmeticks">
                        <div class="swiper-wrapper">
                        <?php
                            $args = array(
                                'orderby' => 'ID',
                                'limit' => -1,
                                'category' => 'косметика', // Replace 'your_category_slug_or_id' with the slug or ID of your category
                            );
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
                            <div class="swiper-button-next swiper-button-next--cosmeticks"></div>
                            <div class="swiper-button-prev swiper-button-prev--cosmeticks"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="products__slider products__slider--plamine">
                <h2 class="title products__title">Добавки & АКСЕСУАРИ</h2>
                <div class="container products__container--plamine">
                    <div class="swiper products__slider--plamine__accessories">
                        <div class="swiper-wrapper">
                        <?php
                            $args = array(
                                'orderby' => 'ID',
                                'limit' => -1,
                                'category' => 'добавки-аксесуари', // Replace 'your_category_slug_or_id' with the slug or ID of your category
                            );

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
                            <div class="swiper-button-next swiper-button-next--accessories"></div>
                            <div class="swiper-button-prev swiper-button-prev--accessories"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="products__slider products__slider--plamine">
                <h2 class="title products__title">відео розпаковка</h2>
                <div class="container products__container--plamine">
                    <div class="swiper products__slider--plamine__videos">
                        <div class="swiper-wrapper">
                            <?php
                                $video_list = get_field('video_plamine');
                                foreach ($video_list as $value) {?>
                                    <div class="swiper-slide">
                                        <div class="swiper__slide-content__videos">
                                            <video width="100%" height="100%"  controls>
                                            <source src="<?php echo $value['video']?>" type="video/mp4">
                                            Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    </div>
                                <?php } ?>
                        </div>
                    </div>
                    <div class="swiper__buttons">
                        <div class="swiper__buttons-wrapper">
                            <div class="swiper-button-next swiper-button-next--videos"></div>
                            <div class="swiper-button-prev swiper-button-prev--videos"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="plamine__company">
                <div class="container plamine__company-container">
                    <div class="plamine__company-content">
                        <div class="plamine__company-content__left">
                            <div class="plamine__company-content__left-top">
                                <h3 class="title plamine__company-content__left-top__title">
                                    <?php the_field('regal_title_1')?>
                                </h3>
                                <ul class="about-specifications__list">
                                <?php
                                $regal_list = get_field('regal_list_1');
                                foreach ($regal_list as $value) {?>
                                    <li><?php echo $value['text']?></li>
                                <?php } ?>
                                </ul>
                            </div>
                            <div class="plamine__company-content__left-img__wrapper">
                                <img src="<?php the_field('regal_img_1')?>" alt="product img">
                            </div>
                        </div>
                        <div class="plamine__company-content__right">
                            <div class="plamine__company-content__right-top">
                                <div class="plamine__company-content__right-img__wrapper">
                                    <img src="<?php the_field('regal_img_2')?>" alt="product img">
                                </div>
                            </div>
                            <div class="plamine__company-content__left-right-bottom">
                                <h3 class="title plamine__company-content__right-bottom__title">
                                    <?php the_field('regal_title_2')?>
                                </h3>
                                <ul class="about-specifications__list">
                                <?php
                                $regal_list = get_field('regal_list_2');
                                foreach ($regal_list as $value) {?>
                                    <li><?php echo $value['text']?></li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<?php 
get_footer() ?>