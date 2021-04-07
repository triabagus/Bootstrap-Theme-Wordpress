<?php

function post_link_attributes($output) {
    $code = 'class="page-links"';
    return str_replace('<a href=', '<a '.$code.' href=', $output);
}

add_filter('next_post_link', 'post_link_attributes');
add_filter('previous_post_link', 'post_link_attributes');