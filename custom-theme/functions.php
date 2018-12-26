<?php
function custom_function_toLoad_files(){
	wp_enqueue_style('custom_style_name',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','custom_function_toLoad_files');
?>