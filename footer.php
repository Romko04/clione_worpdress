<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clione
 */

?>

		
<div id="single" class="popup--form popup--single-product  ">
                <div class="popup__body">
                    <div class="popup__content">
                        <div class="popup__close">
                            <svg class="popup__close-svg" width="36" height="36" viewBox="0 0 36 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="18" cy="18" r="17.625" stroke="#B0B0B0" stroke-width="0.75" />
                                <path
                                    d="M23.2498 12.75C23.0858 12.5859 22.8632 12.4938 22.6312 12.4938C22.3992 12.4938 22.1767 12.5859 22.0126 12.75L17.9998 16.7627L13.9871 12.75C13.823 12.5859 13.6005 12.4938 13.3685 12.4938C13.1364 12.4938 12.9139 12.5859 12.7498 12.75C12.5858 12.914 12.4937 13.1366 12.4937 13.3686C12.4937 13.6006 12.5858 13.8231 12.7498 13.9872L16.7626 18L12.7498 22.0127C12.5858 22.1768 12.4937 22.3993 12.4937 22.6313C12.4937 22.8634 12.5858 23.0859 12.7498 23.25C12.9139 23.414 13.1364 23.5062 13.3685 23.5062C13.6005 23.5062 13.823 23.414 13.9871 23.25L17.9998 19.2372L22.0126 23.25C22.1767 23.414 22.3992 23.5062 22.6312 23.5062C22.8632 23.5062 23.0858 23.414 23.2498 23.25C23.4139 23.0859 23.506 22.8634 23.506 22.6313C23.506 22.3993 23.4139 22.1768 23.2498 22.0127L19.2371 18L23.2498 13.9872C23.4139 13.8231 23.506 13.6006 23.506 13.3686C23.506 13.1366 23.4139 12.914 23.2498 12.75Z"
                                    fill="#747474" />
                            </svg>
                        </div>
                        <div class="popup__content--single">
                            <div class="popup__gallery">
                                <div class="popup__main-photo">
                                    <img src="./img/product/photo.jpg" alt="Main Photo">
                                </div>
                                <div class="popup__thumbnails">
                                </div>
                            </div>

                            <div class="popup__content-info">
                                <h4 class="single__title">
                                </h4>
                                <span class="price">
                                </span>
                                <p>
                                </p>
                                <p>
                                </p>
                                <div class="single__button-wrapper">
                                    <button data-id="" class="button cart--button single__cart-button">
                                        В кошик <img class="popup--circle" src="<?php echo get_template_directory_uri() . "/assets/img/circle-white.svg"; ?>" alt="product">
                                    </button>
                                </div>
                                <div class="single__full-description">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="cart" class=" popup--form cart--form">
                <div class="popup__body">
                    <div class="popup__content">
						<div class="cart-overlay"></div>
                        <div class="popup__close">
                            <svg class="popup__close-svg" width="36" height="36" viewBox="0 0 36 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="18" cy="18" r="17.625" stroke="#B0B0B0" stroke-width="0.75" />
                                <path
                                    d="M23.2498 12.75C23.0858 12.5859 22.8632 12.4938 22.6312 12.4938C22.3992 12.4938 22.1767 12.5859 22.0126 12.75L17.9998 16.7627L13.9871 12.75C13.823 12.5859 13.6005 12.4938 13.3685 12.4938C13.1364 12.4938 12.9139 12.5859 12.7498 12.75C12.5858 12.914 12.4937 13.1366 12.4937 13.3686C12.4937 13.6006 12.5858 13.8231 12.7498 13.9872L16.7626 18L12.7498 22.0127C12.5858 22.1768 12.4937 22.3993 12.4937 22.6313C12.4937 22.8634 12.5858 23.0859 12.7498 23.25C12.9139 23.414 13.1364 23.5062 13.3685 23.5062C13.6005 23.5062 13.823 23.414 13.9871 23.25L17.9998 19.2372L22.0126 23.25C22.1767 23.414 22.3992 23.5062 22.6312 23.5062C22.8632 23.5062 23.0858 23.414 23.2498 23.25C23.4139 23.0859 23.506 22.8634 23.506 22.6313C23.506 22.3993 23.4139 22.1768 23.2498 22.0127L19.2371 18L23.2498 13.9872C23.4139 13.8231 23.506 13.6006 23.506 13.3686C23.506 13.1366 23.4139 12.914 23.2498 12.75Z"
                                    fill="#747474" />
                            </svg>
                        </div>
						
                        <div class="cart__content">
                            <div class="cart__form">
                                <h3 class="cart__title">Кошик</h3>
                                <div class="products__wrapper">
                                <div class="products">
                                    <?php
                                    foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item ) {

                                        $product = $cart_item['data'];
                                        $product_id = $product->get_id(); // Получаем ID товара
                                        $cart_item_key = $cart_item['key'];
                                        $name = $product->get_name();
                                        $image_id = $product->get_image_id();
                                        $image_url = wp_get_attachment_image_url( $image_id, 'full' );
                                        $price = WC()->cart->get_product_price( $product );
                                        $subtotal = WC()->cart->get_product_subtotal( $product, $cart_item['quantity'] );
                                        $quantity = $cart_item['quantity'];
                                        // $product = wc_get_product( $product_id ); // $product_id - ідентифікатор товару
                                        $totalProducts = WC()->cart->get_total();
                                        ?>
                                        <div data-id="<?php echo $product_id?>" class="product__item">
                                            <div class="product__image">
                                                    <img src="<?php echo $image_url ?>" alt="product image">
                                            </div>
                                            <div class="product__info">
                                                <div class="product__info-left">
                                                    <h4 class="product__title">
                                                            <?php echo $name?>
                                                    </h4>
                                                    <span><?php echo $price?></span>
                                                    <div class="product__content--mobile">
                                                        <div class="">
                                                            <span><?php echo $price?></span>
                                                            <span class="product__delete" data-key="<?php echo $cart_item_key?>">Видалити</span>
                                                        </div>
                                                        <div class="product__quantity">
                                                            <button class="quantity__btn minus" data-key="<?php echo $cart_item_key?>">
                                                                <img class="svg__minus cart__icon" src="<?php echo get_template_directory_uri()?>/assets/img/cart/minus.svg" alt="plus icon">
                                                            </button>
                                                            <input type="text" class="quantity__input" value="<?php echo $quantity?>">
                                                            <button class="quantity__btn plus" data-key="<?php echo $cart_item_key?>" >
                                                                <img class="svg__plus cart__icon" src="<?php echo get_template_directory_uri()?>/assets/img/cart/plus.svg" alt="minus icon">
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__quantity">
                                                    <button class="quantity__btn minus" data-key="<?php echo $cart_item_key?>">
                                                        <img class="svg__minus cart__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/cart/minus.svg" alt="minus icon">
                                                    </button>
                                                    <input type="text" class="quantity__input" value="<?php echo $quantity?>">
                                                    <button class="quantity__btn plus" data-key="<?php echo $cart_item_key?>">
                                                        <img class="svg__plus cart__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/cart/plus.svg" alt="plus icon">
                                                    </button>
                                                </div>
                                                <p class="product__total"><?php echo $subtotal ?></p>
                                                <button class="product__delete" data-key="<?php echo $cart_item_key?>">
                                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/cart/cancel.svg" alt="cancel icon">
                                                </button>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    </div>

                                </div>
                                <div class="count">
                                <?php
                                    if (!empty($totalProducts)) {
                                ?>
                                        <span><?php echo $totalProducts?></span>
                                <?php
                                    }
                                ?>
                                </div>
                                <?php echo do_shortcode('[contact-form-7 id="5c87578" title=""]');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </main>
        <footer class="footer">
            <div class="container">
                <div class="footer__content">
                    <div class="footer__content-top">
                        <div class="circle">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/circel.svg" alt="circle words">
                        </div>
                        <h5 class="footer__title">
                            <?php the_field('text_footer', 'option'); ?>
                        </h5>
                        <?php
                        wp_nav_menu( array( 
                            'theme_location' => 'menu-1', 
                            'menu_class' => 'footer__menu',
                            'container' => '',
                            'container_class' => '',
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s
                                                    <li class="cart">
                                                    <a href="">
                                                        <img src="' . get_template_directory_uri() . '/assets/img/icons/card.svg" alt="cartIcon">
                                                        <div class="cart__count">
                                                            кошик
                                                            (<span>' . WC()->cart->get_cart_contents_count() . '</span>)
                                                        </div>
                                                    </a>
                                                </li>
                                                <li><a target="_blank" href="'. home_url() .'/offer">Публічна оферта</a></li>
                                            </ul>'
                        ) ); 
                        ?>


                        <div class="footer__feadback">
                            <a href="tel:<?php the_field('nomer_neotf', 'option'); ?>"><?php the_field('nomer_otf', 'option'); ?></a>
                            <p>
                                <?php the_field('addres', 'option'); ?>
                            </p>
                        </div>
                        <div class="socials footer__socials">
                            <ul>
                                <li>
                                    <a target="_blank" href="<?php the_field('insta_link', 'option') ?>">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="12" cy="12" r="11.75" stroke="#202020" stroke-width="0.5" />
                                            <path
                                                d="M11.6651 17.7589C10.6115 17.7589 9.55796 17.822 8.56636 17.7589C7.14093 17.6328 6.58315 17.1281 6.33525 15.6142C6.02538 13.848 5.90143 12.1449 6.08736 10.3786C6.14933 9.74784 6.2113 9.05396 6.33525 8.42316C6.52118 7.09849 7.07896 6.53078 8.38044 6.21538C8.93821 6.08922 9.43402 6.02613 9.99179 6.08921C11.1693 6.15229 12.3468 6.15229 13.5244 6.02613C14.0821 5.96305 14.5779 6.02613 15.1357 6.08921C16.1893 6.21537 16.933 6.7831 17.057 7.85545C17.4288 10.5048 17.7387 13.1541 17.2429 15.8035C16.995 17.0651 16.4372 17.5697 15.1977 17.822C14.0821 17.8851 12.9046 17.822 11.6651 17.7589ZM11.913 9.30627C10.4876 9.24319 9.24809 10.3156 9.12413 11.6402C9.00018 13.2803 9.99179 14.3526 11.6651 14.4788C12.9666 14.5419 14.2061 13.4065 14.3301 11.9556C14.454 10.631 13.3384 9.36935 11.913 9.30627ZM15.7555 8.297C15.6935 7.91852 15.5076 7.6662 15.0738 7.6662C14.578 7.6662 14.3301 7.98161 14.3301 8.42316C14.3301 8.86472 14.578 9.18011 15.0738 9.18011C15.5696 9.11703 15.7555 8.80163 15.7555 8.297Z"
                                                fill="#202020" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="<?php the_field('telega_link', 'option'); ?>">
                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="12" cy="12" r="11.75" stroke="#202020" stroke-width="0.5" />
                                            <path
                                                d="M5 12.7432C6.3836 11.8627 7.38985 11.2338 8.45899 10.6049C10.9746 9.22131 13.4274 7.83772 15.8801 6.32835C16.8235 5.76233 17.075 5.8881 17.075 7.02013C17.0121 7.83771 16.8863 8.59241 16.7606 9.40999C16.3832 11.7369 15.943 14.0639 15.5656 16.3909C15.4399 17.0827 15.1883 17.2713 14.5594 16.894C14.2449 16.7053 13.9305 16.6424 13.616 16.5166C11.9809 15.8248 11.7922 15.8248 10.5973 17.1455C10.3457 17.3971 10.2828 17.7744 9.7797 17.8373C9.59102 16.6424 9.33946 15.5733 10.2199 14.5041C11.1004 13.3721 11.918 12.303 12.8613 11.1709C13.1129 10.8565 13.3016 10.542 13.4274 10.1647C11.9809 11.108 10.5344 12.1143 9.33946 13.3721C8.89923 13.8752 8.52188 13.9381 7.89298 13.6865C7.0754 13.3721 6.19492 13.1205 5 12.7432Z"
                                                fill="#202020" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="<?php the_field('viber_link', 'option') ?>">
                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="12" cy="12" r="11.75" stroke="#202020" stroke-width="0.5" />
                                            <path
                                                d="M12.1733 18.1487C11.5902 18.0904 10.9487 18.1488 10.3655 17.9155C9.4324 17.5073 8.49932 17.5072 7.56623 18.0904C7.33296 18.2071 7.04137 18.382 6.8081 18.0904C6.63315 17.9155 6.74979 17.6239 6.8081 17.4489C7.33296 16.2826 7.04137 15.2912 6.57483 14.1248C5.64175 11.8504 5.75838 9.63436 7.56623 7.76819C9.37408 5.96033 11.6485 5.66875 14.0395 6.31024C14.7976 6.54351 15.4391 7.01004 16.0223 7.59322C18.8216 10.5674 18.9382 15.5828 14.6227 17.6822C13.8062 18.0904 12.9898 18.0904 12.1733 18.1487ZM7.56623 17.3906C8.79091 16.4575 9.95726 17.099 11.1236 17.274C12.8148 17.5073 14.4477 17.4489 15.8474 16.1659C17.3053 14.7663 17.7135 12.3753 17.0137 10.4508C16.139 8.05976 14.1561 6.77678 11.9401 6.77678C9.37408 6.77678 6.69147 8.87621 6.8081 11.3839C6.86642 12.3753 6.92474 13.3667 7.4496 14.2414C8.03278 15.1745 8.14941 16.1076 7.56623 17.3906Z"
                                                fill="#202020" />
                                            <path
                                                d="M12.5233 13.425C12.5816 13.3667 12.6982 13.3084 12.7565 13.25C12.9898 12.9001 13.1064 12.4336 13.6896 12.5502C14.2145 12.7252 14.681 13.1334 14.856 13.6583C15.0309 14.1831 14.681 14.533 14.3311 14.8246C13.573 15.4078 12.8149 15.2328 12.115 14.8829C10.5405 14.0082 9.66569 12.5502 9.14083 10.859C8.96588 10.2175 9.19915 9.69266 9.84064 9.34275C10.2489 9.10948 10.5988 9.10948 10.832 9.45939C11.1819 9.92593 11.9401 10.3342 11.2986 11.0923C11.007 11.4422 11.1236 11.7921 11.3569 12.0837C11.6485 12.6086 11.9401 13.1334 12.5233 13.425Z"
                                                fill="#202020" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="<?php the_field('face_link', 'option') ?>">
                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="12" cy="12" r="11.75" stroke="#202020" stroke-width="0.5" />
                                            <path
                                                d="M10.5731 15.417C10.5116 14.6177 10.5116 13.8184 10.4501 12.9576C10.4501 12.5272 10.2656 12.2198 9.77376 12.2198C9.46633 12.2198 9.15891 12.2812 9.09742 11.8508C9.03594 11.2975 8.91297 10.6826 9.09742 10.1293C9.09742 10.0678 9.34336 9.94481 9.46633 9.94481C10.3886 10.1293 10.5731 9.63738 10.5731 8.89956C10.5731 6.93203 12.2332 5.88677 14.3851 6.00974C15 6.07123 15 6.56311 15 6.99351C14.9385 7.42391 15.1845 8.03877 14.3851 8.03877C13.7088 7.97728 13.2169 8.22323 13.2169 9.02253C13.2169 9.5759 13.2784 10.0063 13.9548 10.0678C14.9385 10.1293 14.7541 10.8056 14.7541 11.4819C14.8155 12.2198 14.4466 12.4657 13.7703 12.4657C13.094 12.4657 12.971 12.8346 12.971 13.4495C12.971 14.8021 12.971 16.0933 12.9095 17.446C12.848 18.3068 12.6636 18.3683 11.4953 18.3068C10.696 18.3068 10.5731 17.9379 10.6346 17.2615C10.5116 16.7082 10.5116 16.0933 10.5731 15.417Z"
                                                fill="#202020" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer__content-bottom">
                        <p>Дизайн та розробка сайту - <a target="_blank" href="https://www.instagram.com/v.karrina/">@v.karrina</a></p>
                        <p>© 2024. Всі права захищені</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
<?php wp_footer(); ?>

</body>
</html>
