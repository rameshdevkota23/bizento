<?php
if ( ! function_exists( 'biz_fs' ) ) {
    // Create a helper function for easy SDK access.
    function biz_fs() {
        global $biz_fs;

        if ( ! isset( $biz_fs ) ) {
            // Include Freemius SDK.
            require_once dirname( __FILE__ ) . '/inc/freemius/start.php';

            $biz_fs = fs_dynamic_init( array(
                'id'                  => '22011',
                'slug'                => 'bizento',
                'type'                => 'theme',
                'public_key'          => 'pk_28eb953a4ab3a9df5649f96f478cb',
                'is_premium'          => true,
                'premium_suffix'      => 'Premium',
                // If your theme is a serviceware, set this option to false.
                'has_premium_version' => true,
                'has_addons'          => false,
                'has_paid_plans'      => true,
                // Automatically removed in the free version. If you're not using the
                // auto-generated free version, delete this line before uploading to wp.org.
                'wp_org_gatekeeper'   => 'OA7#BoRiBNqdf52FvzEf!!074aRLPs8fspif$7K1#4u4Csys1fQlCecVcUTOs2mcpeVHi#C2j9d09fOTvbC0HloPT7fFee5WdS3G',
                'trial'               => array(
                    'days'               => 3,
                    'is_require_payment' => true,
                ),
                'menu'                => array(
                    'support'        => false,
                ),
            ) );
        }

        return $biz_fs;
    }

    // Init Freemius.
    biz_fs();
    // Signal that SDK was initiated.
    do_action( 'biz_fs_loaded' );
}

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bizento
 * @since 1.0.0
 */

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */

if (! function_exists('bizento_support')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */

	function bizento_support()
	{

		add_editor_style(get_template_directory_uri() . '/assets/css/editor.css');

		load_theme_textdomain('bizento', get_template_directory() . '/languages');

		// Add support for block styles.
		add_theme_support('wp-block-styles');

		// Add support for post thumbnails
		add_theme_support('post-thumbnails');
	}

endif;
add_action('after_setup_theme', 'bizento_support');

function bizento_styles()
{
	wp_enqueue_style(
		'bizento-style',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style(
		'bizento-font-awesome',
		get_template_directory_uri() . '/assets/css/font-awesome/css/all.css',
		[],
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style('dashicons');
	wp_enqueue_script('bizora-main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('bizora-custom.js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0.0', true);

}
add_action('wp_enqueue_scripts', 'bizento_styles');

// admin style
function bizento_admin_styles()
{
	wp_enqueue_style(
		'bizento-admin-style',
		get_template_directory_uri() . '/assets/css/theme-info.css',
		[],
		wp_get_theme()->get('Version')
	);
}
add_action('admin_enqueue_scripts', 'bizento_admin_styles');

// enqueue dashicons
add_action('enqueue_block_assets', function (): void {
	wp_enqueue_style('dashicons');
});

function bizento_excerpt_length($length)
{

	$excerpt_length = 20;
	if (is_admin()) return $length;
	return $excerpt_length;
}
add_filter('excerpt_length', 'bizento_excerpt_length');

// tgm-plugin
require get_template_directory() . '/inc/tgm-plugin/tgmpa-hook.php';

// add block patterns
require get_template_directory() . '/inc/block-patterns.php';


/**
 * Register block styles.
 */

if (! function_exists('bizento_block_styles')) :
	/**
	 * Register custom block styles
	 *
	 * @since bizentoe
	 * @return void
	 */
	function bizento_block_styles()
	{

		register_block_style(
			'core/paragraph',
			array(
				'name'         => 'admin-icon',
				'label'        => __('Admin Icon', 'bizento'),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-admin-icon:before {
					content: "\f110";
					font-family: "dashicons";
				}
				.is-style-admin-icon span{
					display: none;
				}',
			)
		);
	}
endif;

add_action('init', 'bizento_block_styles');
