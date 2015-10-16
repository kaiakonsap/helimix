<?php
global $wp_query;
$post = $wp_query->post;
if ( in_category('21') ) {
    include(TEMPLATEPATH . '/single-gallery.php');
} else {
    include(TEMPLATEPATH . '/single-1.php');
}
?>