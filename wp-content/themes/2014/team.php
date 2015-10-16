<?php  /* Template Name: Tiimi Template */ get_header("1"); ?>
<div id="main_small">
    <div id="main" class="more_down">

    <?php
$test_cat=get_post_custom_values('category');
    if(is_array(get_post_custom_values('category'))&&$test_cat!=''):
        $cat2 = implode(",", get_post_custom_values('category'));
        $cat_name2 = get_cat_name($cat2);
        $the_query2 = new WP_Query(array('category_name' => $cat_name2,'orderby' => 'DESC'));
        ?>
    <div id="footer_strip">
        <div class="container2">
            <div class="small_center">
                <div id="<?php echo $cat2?>" class="headline"><p><?php echo $cat_name2 ?></p>
                </div>

            <?php while ($the_query2->have_posts()) : $the_query2->the_post();
                ?>
                <div class="team"><span class="text">
                        <span class="h3"><?php the_title(); ?></span>
                    </span><span class="image_wrap">
                        <?php if (has_post_thumbnail()) : // Check if thumbnail exists ?>
                            <?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
                        <?php endif; ?>
                    </span>
                    <?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
                </div>

            <?php endwhile; ?>


    </div>
    </div>
    </div>
    <?php endif;wp_reset_postdata(); ?>
    </div>
</div>

<?php get_footer("1"); ?>
