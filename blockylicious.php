<?php
/**
 * Plugin Name:       Blockylicious
 * Description:       A plugin of funky blocks.
 * Version:           0.1.0
 * Requires at least: 6.7
 * Requires PHP:      7.4
 * Author:            VRbin90s
 * Author URI:				https://github.com/vrbin90s
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       blockylicious
 *
 * @package CreateBlock
 */

namespace WebDevEducation;

if ( !defined( 'ABSPATH' ) ) {
	die('Silence is golden.');
}

final class Blockylicious {

	static function init(){

		add_action('enqueue_block_assets', function() {
			// $style_url = plugins_url("build/style-index.css", __FILE__);
			// wp_enqueue_style('blockylicious-style', $style_url, array());
			wp_enqueue_style("dashicons");
		});
		
		add_action( 'init', function() {

			add_filter('block_categories_all', function($categories) {
					array_unshift($categories, [
					'slug'	=> 'blockylicious',
					'title' => 'Blockylicious'
				]);
				return $categories;
			});

			register_block_pattern_category('blockylicious', array(
				'label' => __('Blockylicious', 'blockylicious')
			));

			register_block_pattern('blockylicious/call-to-action', array(
				'categories' => array('call-to-action', 'blockylicious'),
				'title' => __('Blockylicious call to action', 'blockylicious'),
				'description' => __('A heading, paragraph and clicky button block', 'blockylicious'),
				'content' => '<!-- wp:heading {"textAlign":"center"} -->
					<h2 class="wp-block-heading has-text-align-center">Lorem impsus</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">Some paragraph text in here as a sub heading.</p>
					<!-- /wp:paragraph -->

					<!-- wp:blockylicious/clicky-group {"justifyContent":"center"} -->
					<!-- wp:blockylicious/clicky-button {"labelText":"Call to action","style":{"color":{"background":"#000","text":"#fff"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"20px","right":"20px"}}}} /-->
					<!-- /wp:blockylicious/clicky-group -->

					<!-- wp:paragraph -->
					<p></p>
					<!-- /wp:paragraph -->'
			));

			if ( function_exists( 'wp_register_block_types_from_metadata_collection' ) ) {
				wp_register_block_types_from_metadata_collection( __DIR__ . '/build/blocks', __DIR__ . '/build/blocks-manifest.php' );
				return;
			}

			if ( function_exists( 'wp_register_block_metadata_collection' ) ) {
				wp_register_block_metadata_collection( __DIR__ . '/build/blocks', __DIR__ . '/build/blocks-manifest.php' );
			}
		
			$manifest_data = require __DIR__ . '/build/blocks-manifest.php';

			foreach ( array_keys( $manifest_data ) as $block_type ) {
				register_block_type( __DIR__ . "/build/blocks/{$block_type}" );
			}


		});
	}

	static function convert_custom_properties($value)
	{
		$prefix     = 'var:';
		$prefix_len = strlen($prefix);
		$token_in   = '|';
		$token_out  = '--';
		if (str_starts_with($value, $prefix)) {
			$unwrapped_name = str_replace(
				$token_in,
				$token_out,
				substr($value, $prefix_len)
			);
			$value          = "var(--wp--$unwrapped_name)";
		}
		return $value;
	}
}

Blockylicious::init();








