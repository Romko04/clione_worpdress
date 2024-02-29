<?php 
/*template name: Сторінка "Партнерам"*/
get_header() ?>
<section class="about partneram__about">
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
                                <img src="<?php the_field('partn_about_img1')?>" alt="product">
                            </div>
                            <div class="about__content-middle about__content-middle--partneram">
                                <div class="about__content-middle__top">
                                    <h3 class="about__content-middle__top-title ">
                                        <?php the_field('partn_year')?>
                                    </h3>
                                    <p>
                                        <?php the_field('partn_text3')?>
                                    </p>
                                    <div class="about__content-middle__bottom">
                                        <div class="about__content-middle__bottom-img">
                                            <img src="<?php the_field('partn_about_img2')?>" alt="women">
                                        </div>
                                        <!-- <button class="second--button">Більше про нас</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about__content-right about__content-right--partneram">
                            <h3 class="about__content-middle__top-title mobile">
                                <?php the_field('partn_year')?>
                            </h3>
                            <p class="mobile">
                                <?php the_field('partn_text3')?>
                            </p>
                            <div class="about__content-right__img">
                                <img src="<?php the_field('partn_about_img3')?>" alt="women">
                            </div>
                            <p>
                                <?php the_field('partn_text4')?>
                            </p>
                            <div class="about__content-right__button-wrapper--mobile mobile">
                                <button class="second--button">Більше про нас</button>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
             <section class="brands">
                <div class="ticker">
                    <div class="ticker__wrapper">
                        <div class="ticker-animation">
                            <h6>Бренди</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Бренди</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Бренди</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Бренди</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Бренди</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Бренди</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Бренди</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Бренди</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>Бренди</h6>
                        </div>
                    </div>
                </div>
                <div class="container">
                <div class="brands__content">
                        <div class="brands__content-left">
                            <ul class="brands__content-left__list">
                            <?php
                                $brands_photoes_list = get_field('partn_list_photoes');
                                $firstPhoto = $brands_photoes_list[0];
                                foreach ($brands_photoes_list as $value) { ?>
                                <li class="brands__content-left__list-item">
                                    <img src="<?php echo $value['img']?>" alt="product img">
                                </li>
                            <?php } ?>
                            </ul>
                            <h2 class="title brands__content-left__title">
                                <?php the_field('brands_title')?>
                            </h2>
                            <div class="text">
                                <?php the_field('brands_text')?>
                                </div>
                        </div>
                        <div class="brands__content-right">
                            <div class="circle brands--circle">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/circel.svg" alt="circle words">
                            </div>
                            <img src="<?php echo $firstPhoto['img'] ?>" alt="product img">
                        </div>
                    </div>
                </div>
            </section>
            <section class="cooperation">
                <div class="ticker">
                    <div class="ticker__wrapper">
                        <div class="ticker-animation">
                            <h6>З ким співпрацюємо</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>З ким співпрацюємо</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>З ким співпрацюємо</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>З ким співпрацюємо</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>З ким співпрацюємо</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>З ким співпрацюємо</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>З ким співпрацюємо</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>З ким співпрацюємо</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>З ким співпрацюємо</h6>
                        </div>
                    </div>
                </div>
                <div class="container">
                        <div class="cooperation__content">
                            <div class="cooperation__content-left">
                                <h4>
                                    <?php the_field('partn_title')?>
                                </h4>
                                <p class="text">
                                    <?php the_field('partn_text1')?>
                                </p>
                            </div>
                            <div class="cooperation__content-right">
                                <p class="text">
                                    <?php the_field('partn_text2')?>
                                </p>
                            </div>
                                
                        </div>
                </div>
                    <div class="swiper swiper--cooperation">
                        <div class="swiper-wrapper swiper-wrapper--cooperation">
                        <?php
                                $logoes_list = get_field('logoes_list');
                                foreach ($logoes_list as $value) {?>
                                <div class="swiper-slide">
                                    <div class="cooperation__content">
                                        <img src="<?php echo $value['logo']?>" alt="rewiev">
                                     </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="swiper__buttons cooperation__swiper-buttons">
                        <div class="swiper__buttons-wrapper">
                            <div class="swiper-button-next swiper-button-next--cooperation"></div>
                            <div class="swiper-button-prev swiper-button-prev--cooperation "></div>
                        </div>
                    </div>
            </section>
            <section class="partners">
                <div class="container partners__container">
                    <div class="swiper partners__slider">
                        <div class="swiper-wrapper swiper-wrapper--partners">
                            <?php
                                $partners_list = get_field('reviews_list-partn');
                                foreach ($partners_list as $value) {?>
                                <div class="swiper-slide">
                                    <div class="partners__content">
                                        <img src="<?php echo $value['review']?>" alt="rewiev">
                                     </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                        <div class="swiper__buttons partners__swiper-buttons">
                            <div class="swiper__buttons-wrapper">
                                <div class="swiper-button-next swiper-button-next--partners"></div>
                                <div class="swiper-button-prev swiper-button-prev--partners "></div>
                            </div>
                        </div>
                </div>
            </section>
            <section class="feadback">
                <div class="container">
                    <div class="goods__content feadback__content">
                        <div class="feadback__content-img__wrapper">
                            <img src="<?php the_field('form_img') ?>" alt="feadback image">
                        </div>
                        <div class="vertical-text">
                            <span class="animation__vertical--long">зв'язатися з нами</span>
                            <span class="animation__vertical--long">зв'язатися з нами</span>
                            <span class="animation__vertical--long">зв'язатися з нами</span>
                            <!-- Додайте більше слів за потреби -->
                        </div>
                        <div class="ticker ticker--mobile">
                            <div class="ticker__wrapper">
                                <div class="ticker-animation">
                                    <h6>зв'язатися з нами</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>зв'язатися з нами</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>зв'язатися з нами</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>зв'язатися з нами</h6>
                                </div>
                            </div>
                        </div>
                        <div class="feadback__form-wrapper">
                            <div class="feadback__form-top">
                                <h3 class="title feadback__form-title"><?php the_field('form_title') ?></h3>
                                <p class="text"><?php the_field('form_text') ?></p>
                            </div>
                            <?php echo do_shortcode('[contact-form-7 id="3b7c72e" title="Форма на сторінці Партнерам"]') ?>
                        </div>
                    </div>
                </div>
            </section>
<?php 
get_footer() ?>