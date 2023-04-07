<?php
/**
 * Add a scaffolding nav for easier access.
 *
 * @package nda
 */

namespace ACME\wd_s;

/**
 * Add a scaffolding nav for easier access.
 *
 * @author JC Palmes
 */
function print_theme_scaffolding_nav() {
	?>
	<nav class="scaffolding-nav">
		<span><?php echo esc_html__( 'Scroll to:', 'nda' ); ?></span>
		<a href="#globals" class="link"><?php echo esc_html__( 'Globals', 'nda' ); ?></a>
		<a href="#typography" class="link"><?php echo esc_html__( 'Typography', 'nda' ); ?></a>
		<a href="#media" class="link"><?php echo esc_html__( 'Media', 'nda' ); ?></a>
		<a href="#icons" class="link"><?php echo esc_html__( 'Icons', 'nda' ); ?></a>
		<a href="#buttons" class="link"><?php echo esc_html__( 'Buttons', 'nda' ); ?></a>
		<a href="#forms" class="link"><?php echo esc_html__( 'Forms', 'nda' ); ?></a>
		<a href="#elements" class="link"><?php echo esc_html__( 'Elements', 'nda' ); ?></a>
	</nav><!-- .scaffolding-nav -->
	<?php
}
