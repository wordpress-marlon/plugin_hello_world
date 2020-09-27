<?php

/*
   Plugin Name: Hello world
   Plugin URI: https://marlonfalcon.cl
   Description: Plugin Demo de Wordpress
   Author: Marlon Falcon
   Version: 1.0
   Author URI: https://marlonfalcon.cl
*/


function hello_world($atts){
    $args = shortcode_atts(array(
        'name' => 'Marlon',
        'website' => 'https://marlonfalcon.cl',

    ),$atts);

    $text = "<div class='container'>Hello <a href='".$args['website']."'>".$args['name']."</a></div>";

    return $text;
}


add_shortcode( "hello_world_sc", "hello_world" );

?>
