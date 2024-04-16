<?php

function tailwind_styles() {
    // Enqueue Tailwind CSS
    wp_enqueue_script("tailwind", "https://cdn.tailwindcss.com");
    wp_enqueue_style("theme-style", get_template_directory_uri() . "/style.css" );
    wp_enqueue_script("theme-script", get_template_directory_uri() . "/script.js", array('jquery')); // Include jQuery as a dependency

    // Enqueue AOS CSS
    wp_enqueue_style("aos", "https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css");

    // Enqueue AOS JavaScript
    wp_enqueue_script("aos-script", "https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js", array('jquery'), null, true);
}
add_action("wp_enqueue_scripts", "tailwind_styles");

// Function to remove Gutenberg editor
function remove_gutenberg() {
    remove_post_type_support("post", "editor");
    remove_post_type_support("page", "editor");
}
add_action("init", "remove_gutenberg");
