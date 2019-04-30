# WAX Remove Tags for Posts and Custom Posts

Users often forget to respect the structure of the document they write.  
Especially since HTML5 allows a more complex hierarchy (multiple h1 tags).  
Defining a structure based on a single title h1 makes it possible to limit the damage.  
This mu-plugin remove h1 tags from editor : only h1 tags defined by programming or in dedicated modules will go through.


## Features

* This mu-plugin remove tags support for posts and every custom posts (so WooCommerce products as well)

## Installation

This is a must have plugin, so, use at it as a mu-plugin.
Since this is a folder, you must use a MU Loader and I know of no better than this one : https://github.com/BeAPI/wp-mu-loader.

### via Composer

1. Add a line to your repositories array: `{ "type": "vcs", "url": "https://github.com/webaxones/wax-remove-tags-taxonomy" }`
2. Add a line to your require block: `"webaxones/wax-remove-tags-taxonomy": "dev-master"`
3. Run: `composer update`

### Manual

1. Copy the plugin folder into your must use plugins folder.

## Changelog

### 1.0.0 - 30 Apr 2019
* Initial