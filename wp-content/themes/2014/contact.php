<?php  /* Template Name: Kontakti Template */ get_header("1"); ?>
<div id="main_small">
    <div id="main" class="more_down">
        <div class="container2">
            <div id="content_strip" class="small_center">
                <?php
                //for each category, show 5 posts
                if (is_array(get_post_custom_values('category'))) {
                    $cat = implode(",", get_post_custom_values('category'));

                    $cat_args = array(
                        'orderby' => 'name',
                        'order' => 'DESC',
                        'hierarchical' => 1,
                        'child_of' => $cat
                    );
                }

                $categories = get_categories($cat_args);
                ?>
                <?php foreach ($categories as $category) :
                    $args = array(
                        'category__in' => array($category->term_id),
                        'caller_get_posts' => 1
                    );
                    $posts = get_posts($args);
                    if ($posts) :?>

                        <div id="<?php echo $category->name ?>" class="headline"><p><?php echo $category->name ?></p>
                        </div>
                        <?php  foreach ($posts as $post) :
                            setup_postdata($post); ?>
                            <div class="<?php echo $category->name ?>">
                                      <?php the_content(); // Dynamic Content ?>
</div>
                                <?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>


                        <?php
                        endforeach; // foreach($posts
                    endif; // if ($posts
                endforeach; // foreach($categories
                        wp_reset_postdata()?>

            </div>


        </div>
    <?php
$test_cat=get_post_custom_values('category2');
    if(is_array(get_post_custom_values('category2'))&&$test_cat!=''):
        $cat2 = implode(",", get_post_custom_values('category2'));
        $cat_name2 = get_cat_name($cat2);
        $the_query2 = new WP_Query(array('category_name' => $cat_name2,'orderby' => 'DESC'));
        ?>
    <div id="footer_strip" class="border_top">
        <div class="container2">
            <div class="small_center">
                <h1><?php echo $cat_name2 ?></h1>

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
