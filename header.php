<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clione
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body >
<?php wp_body_open(); ?>
<div class="wrapper">
	<header class="header">
            <div class="header__container container">
                <button class="header__burger"></button>
                <nav class="header__menu">
                    <nav class="menu__body">
                        <ul class="header__menu-items">
                            <li class="header__menu-item">
                                <a class="header__menu-link menu__link-active" href="#about">головна</a>
                            </li>
                            <li class="header__menu-item header__menu-item--catalog">
                                <a class="header__menu-link menu--link  menu--link-catalog" href="./catalog.html">каталог</a>
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
                            <li class="header__menu-item">
                                <a class="header__menu-link" href="#blog">відгуки</a>
                            </li>
                            <li class="header__menu-item">
                                <a class="header__menu-link" href="#team">FAQ</a>
                            </li>
                            <li class="header__menu-item">
                                <a class="header__menu-link" href="#price">партнерам</a>
                            </li>
                            <li class="header__menu-item">
                                <a class="header__menu-link" href="#contacts">контакти</a>
                            </li>
                            <li class="header__menu-item">
                                <a class="header__menu-link" href="#contacts">доставка та оплата</a>
                            </li>
                        </ul>
                    </nav>
                </nav>
                <div class="socials">
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
                <div class="cart">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/card.svg" alt="cartIcon">
                        <div class="cart__count">
                            кошик
                            (<span><?php global $woocommerce; echo '' . $woocommerce->cart->cart_contents_count . ''; ?></span>)
                        </div>
                          
                        </span>
                    </a>
                </div>
            </div>
        </header>
		<main class="main">