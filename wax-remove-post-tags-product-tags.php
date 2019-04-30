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
 *  Thanks to Indrek Kõnnussaar https://codelight.eu/removing-product-tag-taxonomy-in-woocommerce/
 *  we overwrite product_tag taxonomy which is a better way
 */
function wax_unregister_tags()
{
    unregister_taxonomy_for_object_type('post_tag', 'post');

    if (class_exists('WooCommerce')) {
        register_taxonomy('product_tag', 'product', [
            'public'            => false,
            'show_ui'           => false,
            'show_admin_column' => false,
            'show_in_nav_menus' => false,
            'show_tagcloud'     => false,
        ]);
    }
}
add_action('init', 'wax_unregister_tags');

/**
 *  remove the column from Products table
 */

add_action('admin_init', function () {
    add_filter('manage_product_posts_columns', function ($columns) {
        unset($columns['product_tag']);
        return $columns;
    }, 100);
});
