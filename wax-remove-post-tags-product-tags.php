<?php
/*
  Plugin Name: WAX Remove Post-tag and Product-tag Taxonomies
  Plugin URI: https://www.webaxones.com
  Description: remove tags support for posts and products if WooCommerce exists. If a custom post type uses this taxonomy then it's intentional.
  Author: Webaxones
  Author URI: https://www.webaxones.com
  Version: 1.0
 */

// don't load directly
if (!defined('ABSPATH'))
    die('-1');



/**
 *  Remove tags menus
 */
function wax_remove_tags_sub_menus()
{
    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag');

    if (class_exists('WooCommerce')) {
        remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=product_tag&post_type=product');
    }
}
add_action('admin_menu', 'wax_remove_tags_sub_menus');

/**
 *  Remove tags support
 */
function wax_unregister_tags()
{
    unregister_taxonomy_for_object_type('post_tag', 'post');

    if (class_exists('WooCommerce')) {
        unregister_taxonomy_for_object_type('product_tag', 'product');
    }
}
add_action('init', 'wax_unregister_tags');
