<?php
  class VindiTextDomain {
    public function __construct()
    {
        add_action('init', array($this, 'load_plugin_textdomain'));
    }

    /**
     * Load the plugin text domain for translation.
     */
    public function load_plugin_textdomain() {
      load_plugin_textdomain( 'vindi-woocommerce', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
    }
  }
; ?>