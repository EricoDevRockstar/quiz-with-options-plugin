<?php

/*
  Plugin Name: Quiz With Options Plugin
  Description: Gives you the ability to filter any words you want from your website. Replace those words right away.
  Version: 1.1.0
  Author: Eric W.
  Author URI: https://www.datiospecio.com/
*/

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class AreYouPayingAttention {
    function __construct() {
      add_action('enqueue_block_editor_assets', array($this, 'adminAssets'));
    }
  
    function adminAssets() {
      wp_enqueue_script('ournewblocktype', plugin_dir_url(__FILE__) . 'test.js', array('wp-blocks', 'wp-element'));
    }
  }
  
  $areYouPayingAttention = new AreYouPayingAttention();