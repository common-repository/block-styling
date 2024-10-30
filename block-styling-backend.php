<?php

/**
 * @link             https://www.www.whynot.media
 * @since             1.0.0
 * @package           Block_Styling_Backend
 *
 * @wordpress-plugin
 * Plugin Name:       Block Styling
 * Plugin URI:        https://www.whynot.media/
 * Description:       Making Blocks Ui more accessible and friendly, someway easier to handle and visually manage.
 * Version:           3.1
 * Author:            Dennys Dionigi
 * Author URI:        https://codepen.io/DedaloD
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       block-styling-backend
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

/**
 * Currently plugin version.
 */
define( 'BLOCK_STYLING_BACKEND_VERSION', '3.1' );

// Definitions
define( 'BLOCK_STYLING_BACKEND_PLUGIN_DIR', untrailingslashit( dirname( __FILE__ ) ) );
define( 'BLOCK_STYLING_BACKEND_PLUGIN_URL', untrailingslashit( plugins_url( '', __FILE__ ) ) );

/**
 * Enqueue block editor styles.
 */
function enqueue_my_block_editor_assets() {
    $plugin_url = plugin_dir_url( __FILE__ );
    // Enqueue the block editor stylesheet
    wp_enqueue_style( 'block-styling-editor-style', $plugin_url . '/css/blocks-styling.css', array(), BLOCK_STYLING_BACKEND_VERSION );
}
add_action( 'enqueue_block_editor_assets', 'enqueue_my_block_editor_assets' );


// Spero vi sia utile ♥
