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
                        <a class="popup__close" href="">
                            <svg class="popup__close-svg" width="36" height="36" viewBox="0 0 36 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="18" cy="18" r="17.625" stroke="#B0B0B0" stroke-width="0.75" />
                                <path
                                    d="M23.2498 12.75C23.0858 12.5859 22.8632 12.4938 22.6312 12.4938C22.3992 12.4938 22.1767 12.5859 22.0126 12.75L17.9998 16.7627L13.9871 12.75C13.823 12.5859 13.6005 12.4938 13.3685 12.4938C13.1364 12.4938 12.9139 12.5859 12.7498 12.75C12.5858 12.914 12.4937 13.1366 12.4937 13.3686C12.4937 13.6006 12.5858 13.8231 12.7498 13.9872L16.7626 18L12.7498 22.0127C12.5858 22.1768 12.4937 22.3993 12.4937 22.6313C12.4937 22.8634 12.5858 23.0859 12.7498 23.25C12.9139 23.414 13.1364 23.5062 13.3685 23.5062C13.6005 23.5062 13.823 23.414 13.9871 23.25L17.9998 19.2372L22.0126 23.25C22.1767 23.414 22.3992 23.5062 22.6312 23.5062C22.8632 23.5062 23.0858 23.414 23.2498 23.25C23.4139 23.0859 23.506 22.8634 23.506 22.6313C23.506 22.3993 23.4139 22.1768 23.2498 22.0127L19.2371 18L23.2498 13.9872C23.4139 13.8231 23.506 13.6006 23.506 13.3686C23.506 13.1366 23.4139 12.914 23.2498 12.75Z"
                                    fill="#747474" />
                            </svg>
                        </a>
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
                        <a class="popup__close" href="">
                            <svg class="popup__close-svg" width="36" height="36" viewBox="0 0 36 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="18" cy="18" r="17.625" stroke="#B0B0B0" stroke-width="0.75" />
                                <path
                                    d="M23.2498 12.75C23.0858 12.5859 22.8632 12.4938 22.6312 12.4938C22.3992 12.4938 22.1767 12.5859 22.0126 12.75L17.9998 16.7627L13.9871 12.75C13.823 12.5859 13.6005 12.4938 13.3685 12.4938C13.1364 12.4938 12.9139 12.5859 12.7498 12.75C12.5858 12.914 12.4937 13.1366 12.4937 13.3686C12.4937 13.6006 12.5858 13.8231 12.7498 13.9872L16.7626 18L12.7498 22.0127C12.5858 22.1768 12.4937 22.3993 12.4937 22.6313C12.4937 22.8634 12.5858 23.0859 12.7498 23.25C12.9139 23.414 13.1364 23.5062 13.3685 23.5062C13.6005 23.5062 13.823 23.414 13.9871 23.25L17.9998 19.2372L22.0126 23.25C22.1767 23.414 22.3992 23.5062 22.6312 23.5062C22.8632 23.5062 23.0858 23.414 23.2498 23.25C23.4139 23.0859 23.506 22.8634 23.506 22.6313C23.506 22.3993 23.4139 22.1768 23.2498 22.0127L19.2371 18L23.2498 13.9872C23.4139 13.8231 23.506 13.6006 23.506 13.3686C23.506 13.1366 23.4139 12.914 23.2498 12.75Z"
                                    fill="#747474" />
                            </svg>
                        </a>
						
                        <div class="cart__content">
                            <form class="cart__form" action="">
                                <h3 class="cart__title">Кошик</h3>
                                <div class="products__wrapper">
                                    <div class="products">
                                    </div>
                                </div>
                                <div class="count">
                                    <span>Сума: 510$</span>
                                </div>
                                <div class="cart__inputs-wrapper">
                                    <div class="input__wrapper">
                                        <label for="name">Ваше імʼя</label>
                                        <input id="name" class="cart__input cart__input-name" type="text"
                                            placeholder="Введіть ваше імʼя">
                                    </div>
                                    <div class="input__wrapper">
                                        <label for="phone">Номер телефону</label>
                                        <input class="cart__input cart__input-phone" id="phone" type="tel">
                                        <span id="error-msg" class="hide">fdsfdsfsdsf</span>
                                        <span id="valid-msg" class="hide">✓ Valid</span>
                                    </div>
                                </div>
                                <div class="cart__buttons-wrapper">
                                    <p>
                                        Натискаючи кнопку, ви даєте згоду на обробку персональних даних і погоджуєтесь
                                        з політикою конфіденційності
                                    </p>
                                    <button class="button--submit">
                                        Оформити замовлення
                                    </button>
                                </div>
                            </form>
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
                            Plamine, goods Fit,
                            Meta LT - японська якість та результативність
                        </h5>
                        <ul class="footer__menu">
                            <li><a href="">головна</a></li>
                            <li class="header__menu-item--catalog">
                                <a class="menu--link menu--link-catalog" href="./catalog.html">каталог</a>
                                <ul class="sub-menu sub-menu--mobile">
                                    <li>
                                        <a href="">
                                            Clione Fit
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Meta Lt
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            Косметика Plamine
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="">відгуки</a></li>
                            <li><a href="">FAQ</a></li>
                            <li><a href="">партнерам</a></li>
                            <li><a href="">контакти</a></li>
                            <li class="cart">
                                <a href="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/card.svg" alt="cartIcon">
                                    <span>кошик (0)</span>
                                </a>
                            </li>
                            <li><a href="">доставка та оплата</a></li>
                            <li><a href="">публічна оферта</a></li>
                        </ul>
                        <div class="footer__feadback">
                            <a href="tel:+38(099)1793287">+ 38 (099) 179 32 87</a>
                            <p>
                                Адреса офісу: Київ, вул. Трьохсвятительська, 3
                            </p>
                        </div>
                        <div class="socials footer__socials">
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/inst.svg" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/telegram.svg" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/viber.svg" alt="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/facebook.svg" alt="icon">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer__content-bottom">
                        <p>Дизайн та розробка сайту - <a href="">@v.karrina</a></p>
                        <p>© 2024. Всі права захищені</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
<?php wp_footer(); ?>

</body>
</html>
