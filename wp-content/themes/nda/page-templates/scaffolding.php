<?php
/**
 * Template Name: Scaffolding
 *
 * Template Post Type: page, scaffolding, nda_scaffolding
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nda
 */

use function ACME\wd_s\main_classes;

get_header(); ?>

	<main id="main" class="<?php echo esc_attr( main_classes( [ 'relative' ] ) ); ?>">

		<?php do_action( 'nda_scaffolding_content' ); ?>

	</main><!-- #main -->

<?php get_footer(); ?>
