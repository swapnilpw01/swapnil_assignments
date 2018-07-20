<?php
/**
 * The template for static front page.
 *
 * @package Business_Buzz
 */

if ( 'posts' === get_option( 'show_on_front' ) ) :

	get_template_part( 'home' );

else :

	get_header();

	get_footer();

endif;
