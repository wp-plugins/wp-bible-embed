<?php
/*
Plugin Name: WP-Bible Embed
Plugin URI: http://aidan.caseyhouse.net/web/wp-bible-embed/
Description: While there are many Bible verse plugins, there are none that display the whole Bible... Until now. Display this KJV Bible on one of your pages with the [bible] shortcode.
Version: 2.0
Author: Aidan Casey
Author URI: http://aidan.caseyhouse.net
Copyright: 2015, Aidan Casey
GNU General Public License, Free Software Foundation <http://creativecommons.org/licenses/GPL/2.0/>
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/
//Shortcode Hook
add_shortcode('bible', 'bible_embed');
//Embed the Bible
function bible_embed()
{	
	$url = dirname(__FILE__);
	$dir = "bibles/kjv_bible.php";
	include $url . '/' . $dir;
}	
?>