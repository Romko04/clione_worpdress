<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package clione
 */

get_header();
?>
<section class="not">
                <div class="container not__container">
                    <div class="not__content">
                        <h1 class="not__title">
                            oops.....404
                        </h1>
                        <p class="not__subtitle">
                            Здається, наш сайт трошки стомився... Нам дуже прикро, що ви не можете зараз зробити те, що вам було потрібно, але ми намагамось усунути цю проблему якомога швидше, щоб ви змогли скористатись нашим сайтом.
                        </p>
                    </div>
                    <div class="button__wrapper">
                        <a href="<?php echo home_url()?>">
                            <button class="button">Повернутись на головну</button>
                        </a>
                    </div>
                </div>
            </section>

<?php
get_footer();
