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
                                <a href="<?php echo home_url()?>/catalog/">
                                    <button class="button">Усі товари</button>
                                </a>
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
                                        <a href="<?php echo home_url()?>/partners">
                                            <button class="second--button">
                                            Більше про нас
                                            </button>
                                        </a>
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
                            <a href="<?php echo home_url()?>/partners">
                                            <button class="second--button">
                                            Більше про нас
                                            </button>
                                        </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            
            <section class="goods goods--right goods--margin">
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
                            <a href="<?php echo home_url('') ?>/clione-fit"><button class="second--button button--hover-grey">Детальніше</button></a>
                            <button class="button   cart--button button--hover-grey" data-id="566">Замовити <img class="popup--circle" src="<?php echo get_template_directory_uri() . "/assets/img/circle-white.svg"; ?>" alt="product"></button>
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
                                <a href="<?php echo home_url('') ?>/clione-fit"><button class="second--button button--hover-grey">Детальніше</button></a>
                                <button class="button  cart--button" data-id="567">Замовити<img class="popup--circle" src="<?php echo get_template_directory_uri() . "/assets/img/circle-white.svg"; ?>" alt="product"></button>
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
                                    <button style="width: auto;" class="button   cart--button" data-id="566">Замовити <img style="width: 2.6rem; height: 2.6rem;" class="popup--circle" src="<?php echo get_template_directory_uri() . "/assets/img/circle-white.svg"; ?>" alt="product"></button>
                                    </div>
                                </div>
                            </div>
                            <div class="metalt__grid-content__left-bottom">
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
                                            <a href="<?php echo home_url('') ?>/meta-lt"> <button class="second--button">Детальніше</button></a>
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
            <section class="goods goods--margin">
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
                            <a href="<?php echo home_url('') ?>/plamine"><button class="second--button  button--hover-grey">Детальніше</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="products__slider products__slider--home">
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
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram/inst1.jpg" alt="product image">
                            </li>
                            <li>
                                <a class="instagram__link instagram__link--text" href="">
                                    Підпишись, аби відчути нашу атмосферу
                                </a>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram/inst2.jpg" alt="product image">
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram/inst3.jpg" alt="product image">
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram/inst5.jpg" alt="product image">
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram/inst4.jpg" alt="product image">
                            </li>
                            <li>
                                <a class="instagram__link" href="">
                                    <div class="circle">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/circel.svg" alt="circle words">
                                        <span>Підписатися</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram/inst7.jpg" alt="product image">
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
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram/inst1.jpg" alt="photo with instagram">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper__instagram-content">
                                    <a class="instagram__link instagram__link--text" href="">
                                        Підпишись, аби відчути нашу атмосферу
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper__instagram-content">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram/inst2.jpg" alt="photo with instagram">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper__instagram-content swiper__instagram-content--circle">
                                    <a class="instagram__link" href="">
                                        <div class="circle">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/circel.svg" alt="circle words">
                                            <span>Підписатися</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="swiper-slide">
                                <div class="swiper__instagram-content">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram/inst3.jpg" alt="photo with instagram">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper__instagram-content">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram/inst4.jpg" alt="photo with instagram">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper__instagram-content">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram/inst5.jpg" alt="photo with instagram">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper__instagram-content">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram/inst6.jpg" alt="photo with instagram">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper__instagram-content">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram/inst7.jpg" alt="photo with instagram">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination--instagram swiper-pagination--custom"></div>
                </div>
            </section>


<?php 
get_footer() ?>