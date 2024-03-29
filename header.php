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
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta property="og:title" content="Японська косметика Plamine | Косметологічні апарати Clione Fit, MetaLT | Офіційний дистриб'ютор ефективних та популярних японських beauty-ґаджетів">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Косметика та апарати для домашнього догляду. Продаж косметологічного обладнання та професійної косметики для клінік естетичної медицини і салонів краси.">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/clione.jpg">
    <meta property="og:url" content="<?php echo esc_url( get_permalink() ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="description" content="Косметика та апарати для домашнього догляду. Продаж косметологічного обладнання та професійної косметики для клінік естетичної медицини і салонів краси.">
	<?php wp_head(); ?>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body >
<?php wp_body_open(); ?>
<div class="wrapper">
	<header class="header">
            <div class="header__container container">
                <button class="header__burger"></button>
                <nav class="header__menu">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-1',
                        'menu_class' => 'header__menu-items',
                        'container' => 'nav',
                        'container_class' => 'menu__body',
                        'items_wrap' => '<div class="menu__content-top">
                                            <span class="menu__content-top__text">Меню</span>
                                            <img class="header__menu-cancel" src="' . get_template_directory_uri() . '/assets/img/icons/cancel2.svg" alt="cancel icon">
                                        </div><ul id="%1$s" class="%2$s">%3$s</ul>',
                    ));
                ?>

            </nav>
            <div class="socials">
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
            <?php 
            if (!is_page_template('template-home.php')) {?>
                <div class="page__top">
                    <div class="container">
                        <div class="page__top-content">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="<?php echo home_url()?>">Головна</a></li>
                                    <li><span><?php echo the_title()?></span></li>
                                </ul>
                            </div>
                            <div class="page--title_wrapper">
                                <h1 class="title">
                                    <?php the_title()?>
                                </h1>
                            </div>
                        </div>

                    </div>
                </div>
            <?php }

            ?>