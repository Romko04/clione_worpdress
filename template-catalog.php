<?php 
/*template name: Сторінка "Каталог"*/
get_header() ?>
<section class="goods goods__catalog">
                <div class="container goods__container">
                    <div class="goods__content">
                        <div class="goods__content-left">
                            <img src="<?php the_field('photo-catalog-cl') ?>" alt="product">
                        </div>
                        <div class="vertical-text">
                            <span>clione fit</span>
                            <span>clione fit</span>
                            <span>clione fit</span>
                            <span>clione fit</span>
                            <span>clione fit</span>
                            <span>clione fit</span>
                            <span>clione fit</span>
                            <!-- Додайте більше слів за потреби -->
                        </div>
                        <div class="ticker ticker--mobile">
                            <div class="ticker__wrapper">
                                <div class="ticker-animation">
                                    <h6>clione fit</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>clione fit</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>clione fit</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>clione fit</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>clione fit</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>clione fit</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>clione fit</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>clione fit</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>clione fit</h6>
                                </div>
                            </div>
                        </div>
                        <div class="goods__content-about">
                            <h3 class="goods__content-about__title">
                                <?php the_field('catalog-cl-title') ?>
                            </h3>
                            <?php $catalog_subsubtitle =  get_field('catalog-cl-subtitle');
                            
                            if ($catalog_subsubtitle) { ?>
                                <span>
                                    <?php echo $catalog_subsubtitle?>
                                </span>
                            <?php  }
                            
                            ?>

                            <p>
                                <?php the_field('catalog-cl-subsubtitle') ?>
                            </p>
                            <ul class="about-specifications__list">
                            <?php
                                $specifications_list = get_field('details-catalog-clione');
                                foreach ($specifications_list as $value) {?>
                                    <li><?php echo $value['text'] ?></li>
                            <?php } ?>
                            </ul>
                            <div class="goods__content-about__buttons">
                            <a href="<?php echo home_url('') ?>/clione-fit"><button class="second--button button--hover-grey">Детальніше</button></a>
                                <button class="button  cart--button button--hover-grey " data-id="566" >Замовити<img class="popup--circle" src="<?php echo get_template_directory_uri() . "/assets/img/circle-white.svg"; ?>" alt="product"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="goods goods__catalog">
                <div class="container goods__container">
                    <div class="goods__content goods__content--left">
                        <div class="goods__content-left">
                            <img src="<?php the_field('photo-catalog-mt') ?>" alt="product">
                        </div>
                        <div class="vertical-text">
                            <span>Meta LT</span>
                            <span>Meta LT</span>
                            <span>Meta LT</span>
                            <span>Meta LT</span>
                            <span>Meta LT</span>
                            <span>Meta LT</span>
                            <span>Meta LT</span>
                            <!-- Додайте більше слів за потреби -->
                        </div>
                        <div class="ticker ticker--mobile">
                            <div class="ticker__wrapper">
                                <div class="ticker-animation">
                                    <h6>Meta LT</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>Meta LT</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>Meta LT</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>Meta LT</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>Meta LT</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>Meta LT</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>Meta LT</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>Meta LT</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>Meta LT</h6>
                                </div>
                            </div>
                        </div>
                        <div class="goods__content-about">
                            <h3 class="goods__content-about__title">
                                <?php the_field('catalog-mt-title') ?>
                            </h3>
                            <?php $catalog_subsubtitle_mt =  get_field('catalog-mt-subtitle');
                            
                            if ($catalog_subsubtitle_mt) { ?>
                                <span>
                                    <?php echo $catalog_subsubtitle_mt?>
                                </span>
                            <?php  }
                            
                            ?>
                            <p>
                                <?php the_field('catalog-mt-subsubtitle') ?>
                            </p>
                            <ul class="about-specifications__list">
                                <?php
                                $specifications_list_mt = get_field('details-catalog-metalt');
                                foreach ($specifications_list_mt as $value) {?>
                                    <li><?php echo $value['text'] ?></li>
                            <?php } ?>
                            </ul>
                            <div class="goods__content-about__buttons">
                                <a href="<?php echo home_url('') ?>/meta-lt"> <button class="second--button  button--hover-grey">Детальніше</button></a>
                                <button class="button  cart--button button--hover-grey" data-id="567">Замовити<img class="popup--circle" src="<?php echo get_template_directory_uri() . "/assets/img/circle-white.svg"; ?>" alt="product"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="goods goods__catalog goods__catalog--last">
                <div class="container goods__container">
                    <div class="goods__content">
                        <div class="goods__content-left">
                            <img src="<?php the_field('photo-catalog-pl') ?>" alt="product">
                        </div>
                        <div class="vertical-text">
                            <span>PLAMINE</span>
                            <span>PLAMINE</span>
                            <span>PLAMINE</span>
                            <span>PLAMINE</span>
                            <!-- Додайте більше слів за потреби -->
                        </div>
                        <div class="ticker ticker--mobile">
                            <div class="ticker__wrapper">
                                <div class="ticker-animation">
                                    <h6>PLAMINE</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>PLAMINE</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>PLAMINE</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>PLAMINE</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>PLAMINE</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>PLAMINE</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>PLAMINE</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>PLAMINE</h6>
                                </div>
                                <div class="ticker-animation">
                                    <h6>PLAMINE</h6>
                                </div>
                            </div>
                        </div>
                        <div class="goods__content-about">
                            <h3 class="goods__content-about__title">
                                <?php the_field('catalog-pl-title') ?>
                            </h3>
                            <?php $catalog_subsubtitle_pl =  get_field('catalog-pl-subtitle');
                            
                            if ($catalog_subsubtitle_pl) { ?>
                                <span>
                                    <?php echo $catalog_subsubtitle_pl?>
                                </span>
                            <?php  }
                            
                            ?>
                            <p>
                                <?php the_field('catalog-mt-subsubtitle') ?>
                            </p>
                            <ul class="about-specifications__list">
                            <?php
                                $specifications_list_pls = get_field('details-catalog-plamine');
                                foreach ($specifications_list_pls as $value) {?>
                                    <li><?php echo $value['text'] ?></li>
                            <?php } ?>
                            </ul>
                            <div class="goods__content-about__buttons">
                                <a href="<? echo home_url('')?>/plamine">
                                    <button class="second--button button--hover-grey">Детальніше</button>
                                </a>
                            </div>
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