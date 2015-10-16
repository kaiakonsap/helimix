<?php /* Template Name: Esilehe Template */
get_header(); ?>
<div id="main">
    <div class="container1">
        <?php
        if(is_array(get_post_custom_values('category'))):

        $cat = implode(",", get_post_custom_values('category'));
        $cat_name = get_cat_name($cat);
        $the_query = new WP_Query(array('category_name' => $cat_name));

        ?>
        <div id="images">
            <div id="owl-2" class="owl-carousel">
                <?php while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                    <div class="item">
                        <?php the_content(); ?>

                        <?php if (has_post_thumbnail()) : // Check if thumbnail exists ?>
                            <?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
                        <?php endif; ?>
                        <?php edit_post_link(); ?>
                    </div>

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

            </div>
        </div>
        <?php endif?></div>
    <?php     if(is_array(get_post_custom_values('category2'))):
    ?>
    <div id="footer_strip" class="border_top">
        <?php
        $cat2 = implode(",", get_post_custom_values('category2'));
        $cat_name2 = get_cat_name($cat2);
        $the_query2 = new WP_Query(array('category_name' => $cat_name2,'orderby' => 'rand'));
        ?>
        <div id="owl-1" class="owl-carousel">
            <?php while ($the_query2->have_posts()) : $the_query2->the_post();
                ?>
                <div class="item"><a href="<?php the_permalink() ?>"><span
                            class="image_wrap"><?php if (has_post_thumbnail()) : // Check if thumbnail exists ?>
                                <?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
                            <?php endif; ?></span>
                    <span class="intro"> <span
                            class="h3"><?php the_title(); ?></span> <?php the_excerpt(); ?>

                        <span class="price"> <?php
                            $posttags = get_the_tags();
                            if ($posttags) {
                                foreach ($posttags as $tag) {
                                    echo '<span class="parts">'.$tag->name . '</span> ';
                                }
                            }
                            ?></span></span> </a></div>
            <?php endwhile; ?>

        </div>
    </div>
    <?php endif; wp_reset_postdata(); ?>


</div>

<?php get_footer(); ?>
