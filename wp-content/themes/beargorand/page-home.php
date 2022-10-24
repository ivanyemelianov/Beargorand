<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package beargorand
 */

get_header();
?>

	<main id="primary" class="site-main brown-bg">

		<section class="main-section">
            <div class="img-text-area">
                <div class="main-img">
                    <img src="<?php echo get_theme_mod('set_welcome_gif'); ?>" alt="bear">
                </div>

                <div class="main-text">
                    <div class="text-wrap">
                        <h1><?php echo get_theme_mod( 'set_heading', 'Enter heading here' ); ?></h1>
                        <p><?php echo get_theme_mod( 'set_text', 'Enter text here' ); ?></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="main-buttons">
            <div class="main-links">
                <ul>
                    <li><a href="https://dev-beargorand.pantheonsite.io/schedule">Schedule</a></li>
                    <li><a href="https://dev-beargorand.pantheonsite.io/roadmap">Roadmap</a></li>
                    <li><a href="https://dev-beargorand.pantheonsite.io/rarity">Rarity Tool</a></li>
                </ul>
            </div>
        </section>

        <section class="donated">
            <div class="donated-link">
                <a href="https://dev-beargorand.pantheonsite.io/donations"><?php echo get_theme_mod( 'set_donated', 'Enter text here' ); ?></a>
            </div>
        </section>

	</main><!-- #main -->

<?php
get_footer('home');
