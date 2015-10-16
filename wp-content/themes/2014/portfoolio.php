<?php  /* Template Name: Portfoolio Template */ get_header("1"); ?>
<div id="main_small">
    <div id="main" class="more_down">
        <div class="container3">
            <div id="content_strip" class="portfoolio">
                <?php
                //for each category, show 5 posts
                if (is_array(get_post_custom_values('category'))) {
                    $cat = implode(",", get_post_custom_values('category'));

                    $cat_args = array(
                        'orderby' => 'name',
                        'order' => 'DESC',
                        'hierarchical' => 1,
                        'exclude' => '10',
                        'child_of' => $cat
                    );
                }

                $categories = get_categories($cat_args);
                ?>
                <?php foreach ($categories as $category) :
                    $args = array(
                        'category__in' => array($category->term_id),
                        'caller_get_posts' => 1,
                        'posts_per_page'=>-1,
                        'numberposts'=>-1
                    );
                    $posts = get_posts($args);
                    if ($posts) :?>

                        <div class="padding_top" id="<?php echo $category->name ?>">
                            <div class="headline">
                                <p><?php echo $category->name ?></p>
                            </div>
                        </div>
                        <?php  foreach ($posts as $post) :
                            setup_postdata($post); ?>

                            <div class="item">
                                 <div class="intro title">
                                      <span class="h3"><?php the_title(); ?></span>

                                     <?php
                                     if(in_category(99)&&$post->post_content!=""){
                                         the_content();
                                     }
                                     ?>
                                 </div>
                                <?php
                                $posttags = get_the_tags();
                                if ($posttags) {?>
                                    <p class="image_link"><a href="<?php the_permalink() ?>">
                                            <?php foreach ($posttags as $tag) {
                                                echo $tag->name . ' ';
                                            }?>
                                        </a></p>
                                <?php }
                                ?>

                                <?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>

                            </div>

                        <?php
                        endforeach; // foreach($posts
                    endif; // if ($posts
                endforeach; // foreach($categories
                ?>

            </div>
            <!-- sidebar -->
            <div class="sidebar" role="complementary">
                <ul>
                    <?php foreach($categories as $category) : ?>
                        <?php if($category->parent==$cat):?>
                            <li> <a href="#<?php echo $category->name?>" class="link"><?php echo $category->name?></a></li>

                        <?php else:?>
                            <li class="subcat"> <a href="#<?php echo $category->name?>" class="link"><?php echo $category->name?></a></li>
                        <?php endif;?>
                    <?php endforeach; // foreach($categories
                    ?>
                </ul>
            </div>
            <!-- /sidebar -->

        </div>

    </div>
</div>

<?php get_footer("1"); ?>
