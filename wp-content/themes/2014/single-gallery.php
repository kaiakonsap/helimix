<?php get_header(); ?>
<div id="main">
    <div class="container1" id="single">
        <div class="back" id="back">
            <?php $ref_url = wp_get_referer();
            $ref_parse = parse_url($ref_url);
            $my_parse = parse_url(get_permalink());
            if (($ref_url==get_permalink() || empty($ref_url)) && $post->post_parent) {
                $show_back_to_parent=true;
                $ref_url = get_permalink($post->post_parent);
            }
            $categories = get_the_category();
            $separator = ' ';
            $output = '';
            if($categories){
            foreach($categories as $category) {
                if($category->cat_name!='Galerii')
                {
                    $output .= $category->cat_ID.$separator;
                }
            }
            }
            if ($ref_parse[host]==$my_parse[host] || $show_back_to_parent) {
                echo '<a href="'.$ref_url.'#'.$output.'"><img src="'.get_template_directory_uri().'/img/arrow_thick_left.png">Tagasi</a>';
            }?>
        </div>
    <div id="images">

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                <?php edit_post_link(__('Edit'), '<span class="edit-link">', '</span>'); ?>
            <?php
            endwhile; // foreach($posts
            endif; // if ($posts
            ?>

    </div>
    </div>
</div>

<?php get_footer(); ?>
