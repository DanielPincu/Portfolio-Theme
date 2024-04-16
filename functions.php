<?php

function tailwind_styles() {
    // Enqueue Tailwind CSS
    wp_enqueue_script("tailwind", "https://cdn.tailwindcss.com");
    wp_enqueue_style("theme-style", get_template_directory_uri() . "/style.css" );
    wp_enqueue_script("theme-script", get_template_directory_uri() . "/script.js"); 
}
add_action("wp_enqueue_scripts", "tailwind_styles");

// Function to remove Gutenberg editor
function remove_gutenberg() {
    remove_post_type_support("post", "editor");
    remove_post_type_support("page", "editor");
}
add_action("init", "remove_gutenberg");
