<?php

namespace FtpProductDisplay;

class Blocks
{
    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $plugin_name The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $version The current version of this plugin.
     */
    private $version;

    /**
     * The slug of this plugin.
     *
     * @since 1.0.0
     * @access private
     * @var string $version The current version of this plugin.
     */
    private $slug;

    /**
     * Initialize the class and set its properties.
     *
     * @param string $plugin_name The name of this plugin.
     * @param string $version The version of this plugin.
     * @since 1.0.0
     */
    public function __construct($plugin_name, $version, $slug)
    {

        $this->plugin_name = $plugin_name;
        $this->version = $version;
        $this->slug = $slug;
    }

    public function registerBlocks()
    {
        register_block_type(
            $this->plugin_name . '/products',
            array(
                'style' => $this->plugin_name . '-style',
                'editor_script' => $this->plugin_name . '-script',
                'render_callback' => array( $this, 'productDisplayBlockRender' )
            )
        );
    }

    public function registerAssets()
    {
        wp_register_style(
            $this->plugin_name . '-style',
            plugin_dir_url(__DIR__) . 'blocks/css/productDisplayBlock.css',
            array(),
            $this->version
        );

        wp_register_script(
            $this->plugin_name . '-script',
            plugin_dir_url(__DIR__) .  'blocks/js/productDisplayBlock.js',
            array(
                'wp-blocks',
                'wp-i18n',
                'wp-element',
                'wp-editor',
                'underscore'
            ),
            $this->version
        );
    }

	public function productDisplayBlockRender()
	{

	}
}