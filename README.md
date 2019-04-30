# WAX Remove Tags for Posts and WooCommerce Products

*  Special thanks to Indrek Kõnnussaar https://codelight.eu/removing-product-tag-taxonomy-in-woocommerce/ for product tags


## Features

* This mu-plugin remove tags support for posts and WooCommerce products if WooCommerce exists. For product tags, they are hidden using register_taxonomy because removing theme can cause error.

## Installation

This is a must have plugin, so, use at it as a mu-plugin.
Since this is a folder, you must use a MU Loader and I know of no better than this one : https://github.com/BeAPI/wp-mu-loader.

### via Composer

1. Add a line to your repositories array: `{ "type": "vcs", "url": "https://github.com/webaxones/wax-remove-post-tags-product-tags" }`
2. Add a line to your require block: `"webaxones/wax-remove-post-tags-product-tags": "dev-master"`
3. Run: `composer update`

### Manual

1. Copy the plugin folder into your must use plugins folder.

## Changelog

### 1.0.0 - 30 Apr 2019
* Initial