<?php

/**
 * Fired when the plugin is uninstalled.
 *
 * @since      1.0.0
 * @package    Contact
 * @subpackage Contact/includes
 * @author     Kevin Relland
 */

// If uninstall not called from WordPress, then exit.
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}
