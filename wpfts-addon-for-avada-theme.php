<?php

/*
Plugin Name: WPFTS Addon for Avada Theme
Description: This addon will enable smart excerpts for posts and attachments when using WPFTS with the Avada theme 
Version: 1.3.8
Tested up to: 6.0
Author: Epsiloncool
Author URI: https://e-wm.org
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Text Domain: wpfts_lang
Domain Path: /languages/
*/

/**
 *  Copyright 2013-2022 Epsiloncool
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 ******************************************************************************
 *  I am thank you for the help by buying PRO version of this plugin 
 *  at https://fulltextsearch.org/ 
 *  It will keep me working further on this useful product.
 ******************************************************************************
 * 
 *  @copyright 2013-2022
 *  @license GPLv3
 *  @version 1.2.7
 *  @package Wordpress Fulltext Search Pro
 *  @author Epsiloncool <info@e-wm.org>
 */

/*
// This code works for older version of Avada Theme (before 7.0)
// To activate this code, please put it to the top of functions.php of the Avada Theme
// Refer here: https://fulltextsearch.org/forum/topic/11/solved-avada-theme-excerpt-do-not-show

function fusion_get_post_content_excerpt( $limit = 285, $strip_html, $page_id = '' ) {
	ob_start();
	the_excerpt();
	return ob_get_clean();
}
*/

// Sorry, this hook makes wrong output (from the WPFTS's point of view :)
remove_action( 'avada_blog_post_content', 'avada_render_search_post_content', 10 ); 

// This is the correct function
add_action( 'avada_blog_post_content', function()
{
	if (is_search()) {
		the_excerpt();
	}
}, 20 ); 
