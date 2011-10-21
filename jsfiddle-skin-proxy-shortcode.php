<?php
/*
Plugin Name: JSFiddle Skin Proxy Shortcode
Plugin URI: http://naatan.com/
Description: Allows to easily embed skinnable Fiddles using a small shortcode.
Version: 0.1
Author: Nathan Rijksen
Author URI: http://naatan.com/
*/

function jsps_shortcode_handler($attrs, $content) {
    extract(shortcode_atts(array(
        'id' 		=> 'vcKdF',
		'tabs'		=> 'js,html,css,result',
        'height' 	=> '300px',
		'width'		=> '95%',
    ), $attrs));
    
    $url = plugins_url() . '/' . dirname(plugin_basename(__FILE__)) . '/jsFiddle-skin-proxy/?id=' . $id.'&tabs='.$tabs;
    $html = '<iframe class="jsfiddle-embed" style="border: 0; width: ' . $width . '; height: ' . $height . '" src="' . $url . '"></iframe>';

    return $html;
}

add_shortcode('jsfiddle', 'jsps_shortcode_handler');
