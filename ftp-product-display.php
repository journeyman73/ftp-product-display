<?php

namespace FtpProductDisplay;

/**
 * @link              https:website
 * @since             1.0.0
 * @package           FtpProductDisplay
 *
 * @wordpress-plugin
 * Plugin Name:       Ftp Product Display
 * Description:       Woocommerce product display block.
 * Version:           1.0.0
 * Author:            Kevin Relland
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ftp-product-display
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * The code that runs during plugin activation.
 */
function activateProductDisplay()
{

    require_once plugin_dir_path(__FILE__) . 'includes/Activator.php';

    Activator::activate();
}

register_activation_hook(__FILE__, 'FtpProductDisplay\activateProductDisplay');

/**
 * The code that runs during plugin deactivation.
 */
function deactivateProductDisplay()
{

    require_once plugin_dir_path(__FILE__) . 'includes/Deactivator.php';

    Deactivator::deactivate();
}

register_deactivation_hook(__FILE__, 'FtpProductDisplay\deactivateProductDisplay');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/Core.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run()
{

    $plugin = new Core();

    $plugin->run();
}

run();
