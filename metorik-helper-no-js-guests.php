<?php
/**
 * Plugin Name: Metorik Helper - No JS (for guests)
 * Plugin URI: https://metorik.com
 * Description: Stops Metorik's JS from loading for guests (so no cart and source tracking).
 * Version: 1.0.0
 * Author: Metorik
 * Author URI: https://metorik.com
 * WC requires at least: 2.6.0
 * WC tested up to: 3.3.0.
 */
class Metorik_Helper_No_JS_Guests
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'init'), 100);
    }

    /**
     * Start plugin.
     */
    public function init()
    {
        if (! is_user_logged_in()) {
            wp_dequeue_script('metorik-js');
        }
    }
}

/**
 * Instance of plugin.
 */
new Metorik_Helper_No_JS_Guests();
