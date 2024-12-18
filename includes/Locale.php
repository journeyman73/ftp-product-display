<?php

namespace FtpProductDisplay;

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    FtpProductDisplay
 * @subpackage FtpProductDisplay/includes
 * @author     Kevin Relland
 */
class Locale
{

    /**
     * Load the plugin text domain for translation.
     */
    public function loadPluginTextDomain()
    {

        load_plugin_textdomain('ftp-product-display', false, dirname(dirname(plugin_basename(__FILE__))) . '/languages/');
    }
}
