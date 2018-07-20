<?php
/**
 * Helper functions.
 *
 * @package Business_Buzz
 */

if ( ! function_exists( 'business_buzz_get_global_layout_options' ) ) :

	/**
	 * Returns global layout options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function business_buzz_get_global_layout_options() {
		$choices = array(
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'business-buzz' ),
			'right-sidebar' => esc_html__( 'Right Sidebar', 'business-buzz' ),
			'three-columns' => esc_html__( 'Three Columns', 'business-buzz' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'business-buzz' ),
			);
		return $choices;
	}

endif;

if ( ! function_exists( 'business_buzz_get_archive_layout_options' ) ) :

	/**
	 * Returns archive layout options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function business_buzz_get_archive_layout_options() {
		$choices = array(
			'full'    => esc_html__( 'Full Post', 'business-buzz' ),
			'excerpt' => esc_html__( 'Post Excerpt', 'business-buzz' ),
		);
		return $choices;
	}

endif;

if ( ! function_exists( 'business_buzz_get_image_sizes_options' ) ) :

	/**
	 * Returns image sizes options.
	 *
	 * @since 1.0.0
	 *
	 * @param bool  $add_disable    True for adding No Image option.
	 * @param array $allowed        Allowed image size options.
	 * @param bool  $show_dimension True for showing dimension.
	 * @return array Image size options.
	 */
	function business_buzz_get_image_sizes_options( $add_disable = true, $allowed = array(), $show_dimension = true ) {

		global $_wp_additional_image_sizes;

		$choices = array();

		if ( true === $add_disable ) {
			$choices['disable'] = esc_html__( 'No Image', 'business-buzz' );
		}

		$choices['thumbnail'] = esc_html__( 'Thumbnail', 'business-buzz' );
		$choices['medium']    = esc_html__( 'Medium', 'business-buzz' );
		$choices['large']     = esc_html__( 'Large', 'business-buzz' );
		$choices['full']      = esc_html__( 'Full (original)', 'business-buzz' );

		if ( true === $show_dimension ) {
			foreach ( array( 'thumbnail', 'medium', 'large' ) as $key => $size ) {
				$choices[ $size ] = $choices[ $size ] . ' (' . get_option( $size . '_size_w' ) . 'x' . get_option( $size . '_size_h' ) . ')';
			}
		}

		if ( ! empty( $_wp_additional_image_sizes ) && is_array( $_wp_additional_image_sizes ) ) {
			foreach ( $_wp_additional_image_sizes as $key => $size ) {
				$choices[ $key ] = $key;
				if ( true === $show_dimension ) {
					$choices[ $key ] .= ' (' . $size['width'] . 'x' . $size['height'] . ')';
				}
			}
		}

		if ( ! empty( $allowed ) ) {
			foreach ( $choices as $key => $value ) {
				if ( ! in_array( $key, $allowed, true ) ) {
					unset( $choices[ $key ] );
				}
			}
		}

		return $choices;

	}

endif;

if ( ! function_exists( 'business_buzz_get_image_alignment_options' ) ) :

	/**
	 * Returns image options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function business_buzz_get_image_alignment_options() {
		$choices = array(
			'none'   => esc_html_x( 'None', 'alignment', 'business-buzz' ),
			'left'   => esc_html_x( 'Left', 'alignment', 'business-buzz' ),
			'center' => esc_html_x( 'Center', 'alignment', 'business-buzz' ),
			'right'  => esc_html_x( 'Right', 'alignment', 'business-buzz' ),
		);
		return $choices;
	}

endif;

if ( ! function_exists( 'business_buzz_get_featured_slider_transition_effects' ) ) :

	/**
	 * Returns the featured slider transition effects.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function business_buzz_get_featured_slider_transition_effects() {
		$choices = array(
			'fade'       => esc_html_x( 'fade', 'transition effect', 'business-buzz' ),
			'fadeout'    => esc_html_x( 'fadeout', 'transition effect', 'business-buzz' ),
			'none'       => esc_html_x( 'none', 'transition effect', 'business-buzz' ),
			'scrollHorz' => esc_html_x( 'scrollHorz', 'transition effect', 'business-buzz' ),
		);
		ksort( $choices );
		return $choices;
	}

endif;

if ( ! function_exists( 'business_buzz_get_featured_slider_content_options' ) ) :

	/**
	 * Returns the featured slider content options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function business_buzz_get_featured_slider_content_options() {
		$choices = array(
			'home-page' => esc_html__( 'Static Front Page', 'business-buzz' ),
			'disabled'  => esc_html__( 'Disabled', 'business-buzz' ),
		);
		return $choices;
	}

endif;

if ( ! function_exists( 'business_buzz_get_featured_slider_type' ) ) :

	/**
	 * Returns the featured slider type.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function business_buzz_get_featured_slider_type() {
		$choices = array(
			'featured-page' => esc_html__( 'Featured Pages', 'business-buzz' ),
		);
		return $choices;
	}

endif;
