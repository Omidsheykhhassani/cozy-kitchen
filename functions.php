<?php

add_action("wp_enqueue_scripts", "cozykitchen_files");

add_filter('show_admin_bar', '__return_false');

function cozykitchen_files () {
  wp_enqueue_style("gamebax_main_styles", get_theme_file_uri("./src/output.css"));
}

?>