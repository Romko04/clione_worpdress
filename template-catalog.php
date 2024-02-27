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
                            <span>
                                <?php the_field('catalog-cl-subsubtitle') ?>
                            </span>
                            <p>
                                <?php the_field('catalog-cl-subsubtitle') ?>
                            </p>
                            <ul class="about-specifications__list">
                            <?php
                                $specifications_list = get_field('details-catalog-clione');
                                foreach ($specifications_list as $value) {?>
                                <div class="swiper-slide">
                                    <li><?php echo $value['text'] ?></li>
                                </div>
                            <?php } ?>
                            </ul>
                            <div class="goods__content-about__buttons">
                                <button class="second--button single--button">Детальніше</button>
                                <button class="button  cart--button">Замовити</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="goods goods__catalog">
                <div class="container goods__container">
                    <div class="goods__content goods__content--left">
                        <div class="goods__content-left">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/catalog/photo2.jpg" alt="product">
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
                                Meta LT
                            </h3>
                            <p>
                                Meta LT - новий багатофункціональний пристрій, який завдяки своїй технології, дає результат інтенсивного підтягування не тільки обличчя, а в цілому - всього тіла. 
                            </p>
                            <ul class="about-specifications__list">
                                <li>підтягує шкіру</li>
                                <li>звужує пори/чорні цятки</li>
                                <li>зменшує рубці</li>
                                <li>стимулює метаболізм</li>
                                <li>зменшує зморшки</li>
                                <li>зменшує носогубні складки</li>
                            </ul>
                            <div class="goods__content-about__buttons">
                                <button class="second--button single--button">Детальніше</button>
                                <button class="button  cart--button">Замовити</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="goods goods__catalog goods__catalog--last">
                <div class="container goods__container">
                    <div class="goods__content">
                        <div class="goods__content-left">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/plamine/photo 1.jpg" alt="product">
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
                                PLAMINE
                            </h3>
                            <p>
                                Бренд Plamine представлений в Україні 4 роки. ВІн пропагує ідеальне поєднання рослин, японських мінералів і технологій для відновлення здоровоı̈ та красивоı̈ шкіри за допомогою сили природи та чистоı̈ енергіı̈.
                            </p>
                            <ul class="about-specifications__list">
                                <li>звужує пори</li>
                                <li>підвищує еластичність</li>
                                <li>зменшує зморшки</li>
                                <li>зволожує шкіру</li>
                            </ul>
                            <div class="goods__content-about__buttons">
                                <button class="second--button single--button">Детальніше</button>
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