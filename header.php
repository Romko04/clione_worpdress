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
                        <?php
                            wp_nav_menu( array( 
                                'theme_location' => 'menu-1', 
                                'menu_class' => 'header__menu-items',
                                'container' => 'nav',
                                'container_class' => 'menu__body'
                                
                                ) ); 
                            ?>
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