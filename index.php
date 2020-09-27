<?php

/*
   Plugin Name: Hello world
   Pluging URI: https://marlonfalcon.cl
   Description: Plugin Demo de Wordpress
   Author: Marlon Falcon
   Version: 1.0
   Author URI: https://marlonfalcon.cl
*/


function hello_world($atts){
    $args = shortcode_atts(array(
        'name' => 'Marlon',
        'website' => 'marlonfalcon.cl',

    ),$atts);

    $text = "<a href='".$args['website']."'>".$args['name']."</a>";

    return $text;
}

?>