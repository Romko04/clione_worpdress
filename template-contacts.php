<?php 
/*template name: Сторінка "Контакти"*/
get_header() ?>
<section class="contacts">
                <div class="container">
                    <div class="contacts__content">
                        <div class="contacts__content-left">
                            <h2 class="title contacts__content-left__title"><?php the_field('cont_title') ?></h2>
                            <p class="text">
                                <?php the_field('Text') ?>
                            </p>
                            <div class="contacts__block">
                                <div class="contacts__block-info">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/phone.svg" alt="contacts icon">
                                    <a href="tel:<?php the_field('nomer_neotf', 'option'); ?>"><?php the_field('nomer_otf', 'option'); ?></a>
                                </div>
                                <div class="contacts__block-info">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/location.svg" alt="contacts icon">
                                    <span><?php the_field('addres', 'option'); ?></span>
                                </div>
                            </div>
                            <div class="contacts__socials">
                                <h2 class="title contacts__socials-title">соціальні мережі:</h2>
                                <div class="contacts__socials-icons">
                                    <a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/inst.svg" alt="socials icon"></a>
                                    <a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/telegram.svg" alt="socials icon"></a>
                                    <a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/viber.svg" alt="socials icon"></a>
                                    <a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/facebook.svg" alt="socials icon"></a>
                                </div>
                            </div>
                        </div>
                        <div class="contacts__content-right">
                            <?php the_field('cart_screan')?>
                        </div>
                    </div>
                </div>
            </section>
             <section class="delivery">
                <div class="ticker">
                    <div class="ticker__wrapper">
                        <div class="ticker-animation">
                            <h6>доставка</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>доставка</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>доставка</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>доставка</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>доставка</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>доставка</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>доставка</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>доставка</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>доставка</h6>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <ul class="delivery__list">
                    <?php
                        $delivery_list = get_field('methods_delivery');
                        $delivery_counter = 1;
                        if ($delivery_list) {
                        foreach ($delivery_list as $value) {
                            ?>
                             <li class="delivery__list-item delivery__list-item--<?php echo $delivery_counter?>">
                                <img src="<?php echo $value['icon']?>" alt="">
                                <span><?php echo $value['method']?></span>
                             </li>
                            <?php
                            $delivery_counter++;
                        } }
                        ?>
                    </ul>
                    <div class="swiper delivery__slider--mobile">
                        <div class="swiper-wrapper swiper-wrapper--delivery">
                        <?php
                            if ($delivery_list) {
                            foreach ($delivery_list as $value) {
                                ?>
                                <div class="swiper-slide">
                                    <div class="delivery__content">
                                    <img src="<?php echo $value['icon']?>" alt="icon">
                                    <span><?php echo $value['method']?></span>
                                    </div>
                                </div>
                                <?php
                            } }
                            ?>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination--delivery swiper-pagination--custom"></div>
                </div>
            </section> 
             
            <section class="payment">
                <div class="ticker">
                    <div class="ticker__wrapper">
                        <div class="ticker-animation">
                            <h6>оплата</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>оплата</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>оплата</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>оплата</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>оплата</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>оплата</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>оплата</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>оплата</h6>
                        </div>
                        <div class="ticker-animation">
                            <h6>оплата</h6>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <ul class="payment__list">
                        <?php
                        $payment_list = get_field('methods_payment');
                        $payment_counter = 1;
                        if ($payment_list) {
                        foreach ($payment_list as $value) {
                            ?>
                            <li class="payment__list-item payment__list-item-<?php echo $payment_counter?>">
                                <img src="<?php echo $value['icon']?>" alt="icon">
                                <span><?php echo $value['method']?></span>
                            </li>
                            <?php
                            $payment_counter++;
                        } }
                        ?>
                    </ul>
                    <div class="swiper payment__slider--mobile">
                        <div class="swiper-wrapper swiper-wrapper--payment">
                        <?php
                        if ($payment_list) {
                        foreach ($payment_list as $value) {
                            ?>
                            <div class="swiper-slide">
                                <div class="payment__content">
                                <img src="<?php echo $value['icon']?>" alt="icon">
                                <span><?php echo $value['method']?></span>
                                </div>
                            </div>
                            <?php
                        } }
                        ?>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination--payment swiper-pagination--custom"></div>
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