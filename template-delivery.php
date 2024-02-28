<?php 
/*template name: Сторінка "Доставка та Оплата"*/
get_header() ?>
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
<?php 
get_footer() ?>