<?php 
/*template name: Сторінка "Відгуки"*/
get_header() ?>
<section class="reviews">
                <div class="container reviews__container">
                    <div class="swiper reviews__slider">
                        <div class="swiper-wrapper swiper-wrapper--reviews">
                            <?php
                                $page_review_list = get_field('page_slider-rewievs');
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
<?php 
get_footer() ?>