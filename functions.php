<?php
/**
 * clione functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package clione
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function clione_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on clione, use a find and replace
		* to change 'clione' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'clione', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'clione' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'clione_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'clione_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function clione_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'clione_content_width', 640 );
}
add_action( 'after_setup_theme', 'clione_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function clione_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'clione' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'clione' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'clione_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function clione_scripts() {
	// Підключення додаткових скриптів
    wp_enqueue_script( 'clione-swiper', get_template_directory_uri() . '/assets/js/swiper.js', array(), null, true );
    wp_enqueue_script( 'clione-script', get_template_directory_uri() . '/assets/js/script.js', array(), null, true );
    wp_enqueue_script( 'clione-sliders', get_template_directory_uri() . '/assets/js/sliders.js', array(), null, true );
    wp_enqueue_script( 'clione-languages', get_template_directory_uri() . '/assets/js/languages.js', array(), null, true );
    wp_enqueue_script( 'clione-modal', get_template_directory_uri() . '/assets/js/modal.js', array(), null, true );

    // Підключення стилів
    wp_enqueue_style( 'clione-swiper-style', get_template_directory_uri() . '/assets/css/swiper.css', array(), null );
    wp_enqueue_style( 'clione-intl-tel-input-style', 'https://cdn.jsdelivr.net/npm/intl-tel-input@19.2.16/build/css/intlTelInput.css', array(), null );
    wp_enqueue_style( 'clione-custom-style', get_template_directory_uri() . '/assets/css/style.css', array(), null );
}
add_action( 'wp_enqueue_scripts', 'clione_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}




add_action('wp_ajax_get_product_info', 'get_product_info_callback');
add_action('wp_ajax_nopriv_get_product_info', 'get_product_info_callback');

function get_product_info_callback() {
    if (isset($_POST['product_id'])) {
        $product_id = $_POST['product_id'];

        // Отримання об'єкта товару за його ID
        $product = wc_get_product($product_id);

        // Перевірка, чи існує товар з вказаним ID
        if ($product) {
            // Підготовка даних для відправлення на фронтенд
            $product_data = array(
                'name' => $product->get_name(),
                'price' => $product->get_price(),
                'short_description' => $product->get_short_description(),
                'description' => $product->get_description(),
                'main_image' => get_the_post_thumbnail_url($product->get_id(), 'full'), // Отримати URL головного зображення
                'additional_images' => array(), // Масив для зберігання URL додаткових зображень
				'product_id' => $product_id,
            );

            // Отримання URL додаткових зображень товару
            $attachment_ids = $product->get_gallery_image_ids();
            foreach ($attachment_ids as $attachment_id) {
                $image_url = wp_get_attachment_image_url($attachment_id, 'full');
                if ($image_url) {
                    $product_data['additional_images'][] = $image_url;
                }
            }

            // Відправлення успішної відповіді з даними про товар
            wp_send_json_success($product_data);
        } else {
            // Якщо товар з вказаним ID не знайдено
            wp_send_json_error('Товар з вказаним ID не знайдено.');
        }
    } else {
        // Якщо ID товару не передано
        wp_send_json_error('ID товару не передано.');
    }
}





// Добавляєм товар в корзину
add_action('wp_ajax_add_to_cart', 'add_to_cart_callback');
add_action('wp_ajax_nopriv_add_to_cart', 'add_to_cart_callback');

function add_to_cart_callback() {
    // Перевірка, чи передано ID товару в POST-запиті
    if (isset($_POST['product_id'])) {
        // Отримання ID товару з POST-запиту
        $product_id = $_POST['product_id'];
        
        // Додавання товару до кошика
        WC()->cart->add_to_cart($product_id);

        // Отримання вмісту корзини після додавання товару
        $cart_content = '';
        foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
            $product_data = $cart_item['data'];
            $product_name = $product_data->get_name();
            $product_price = $product_data->get_price();
            $product_quantity = $cart_item['quantity'];
            $product_id = $cart_item['product_id'];
			$cart_item_key = $cart_item['key'];
            $product_permalink = get_permalink($product_id);
            $product_image = get_the_post_thumbnail_url($product_id, 'thumbnail');

            // Формування HTML-структури для кожного товару в корзині
            $cart_content .= '
                <div class="product__item">
                    <div class="product__image">
                        <img src="' . $product_image . '" alt="product image">
                    </div>
                    <div class="product__info">
                        <div class="product__info-left">
                            <h4 class="product__title">
                                ' . $product_name . '
                            </h4>
                            <span>' . $product_price . '</span>
                            <div class="product__content--mobile">
                                <div>
                                    <span>' . $product_price . '</span>
                                    <a href="">Видалити</a>
                                </div>
                                <div class="product__quantity">
                                    <button class="quantity__btn minus">
                                        <img class="svg__minus cart__icon" src="' . get_template_directory_uri() . '/assets/img/cart/minus.svg" alt="plus icon">
                                    </button>
                                    <input type="text" class="quantity__input" value="' . $product_quantity . '">
                                    <button class="quantity__btn plus">
                                        <img class="svg__plus cart__icon" src="' . get_template_directory_uri() . '/assets/img/cart/plus.svg" alt="minus icon">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="product__quantity">
                            <button class="quantity__btn minus">
                                <img class="svg__minus cart__icon" src="' . get_template_directory_uri() . '/assets/img/cart/minus.svg" alt="plus icon">
                            </button>
                            <input type="text" class="quantity__input" value="' . $product_quantity . '">
                            <button class="quantity__btn plus">
                                <img class="svg__plus cart__icon" src="' . get_template_directory_uri() . '/assets/img/cart/plus.svg" alt="minus icon">
                            </button>
                        </div>
                        <p class="product__total">' . $product_price . '</p>
                        <button class="product__delete" data-key="' . $cart_item_key . '">
                            <img src="' . get_template_directory_uri() . '/assets/img/cart/cancel.svg" alt="cancel icon">
                        </button>
                    </div>
                </div>
            ';
        }

        // Передача HTML-структури товарів у корзині на фронтенд
        echo $cart_content;
		die();
    } else {
        // Якщо ID товару не передано, відправляємо помилку
        echo 'ID товару не передано.';
    }
}


//Видаляємо елемент з корзини

add_action('wp_ajax_remove_from_cart', 'remove_from_cart_callback');
add_action('wp_ajax_nopriv_remove_from_cart', 'remove_from_cart_callback');

function remove_from_cart_callback() {
    if (isset($_POST['product_key'])) {
        $product_key = $_POST['product_key'];
        
        // Видалення товару з кошика за його ідентифікатором
        WC()->cart->remove_cart_item($product_key);
        // Передача відповіді про успішне видалення товару
        wp_send_json_success();
    } else {
        // Якщо ідентифікатор товару не передано, відправляємо помилку
        wp_send_json_error('Ідентифікатор товару не передано.');
    }
}