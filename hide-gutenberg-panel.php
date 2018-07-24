<?php
/*
Plugin Name:  Hide Gutenberg Panel
Description:  Hide the "Try Gutenberg" panel
Version:      1.0.0
Author:       JohnPBloch
Author URI:   https://johnpbloch.com
License:      MIT
*/

remove_action( 'try_gutenberg_panel', 'wp_try_gutenberg_panel' );

