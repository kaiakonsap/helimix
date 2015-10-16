 <?php /* Template Name: Myyk Template */ get_header("1"); ?>
<div id="main_small">
    <div id="main" class="more_down">
        <div class="container3">
            <div id="content_strip">
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

                        <div class="padding_top" id="<?php echo $category->cat_ID ?>">
                             <div class="headline">
                            <p><?php echo $category->name ?></p>
                            </div>
                        </div>
                        <div class="stroke">
                        <?php  foreach ($posts as $post) :
                            setup_postdata($post); ?>

                            <div class="item"><a href="<?php the_permalink() ?>">
                                    <?php if (has_post_thumbnail()) { // Check if thumbnail exists ?>

                                    <span class="image_wrap">
                                      <?php the_post_thumbnail(array(100, 100)); // Declare pixel size you need inside the array ?>
                                  </span>
                                    <span class="intro">
                                        <?php }else {?>
                                        <span class="intro no_image">
                                        <?php }?>
                                      <span class="h3"><?php the_title(); ?></span>
                                        <?php the_excerpt(); ?>

                                            <span class="price">
                                          <?php
                                          $posttags = get_the_tags();
                                          if ($posttags) {
                                              foreach ($posttags as $tag) {


                                                  echo ' <span class="parts">'.$tag->name . '</span> ';


                                              }
                                          }
                                          ?>
                                        </span>
                                        </span> </a>
                                <?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>

                            </div>

                        <?php
                        endforeach; // foreach($posts?>
                        </div>
                <?php
                    endif; // if ($posts
                endforeach; // foreach($categories
                ?>

            </div>

            <!-- sidebar -->

            <div class="sidebar" role="complementary">
                <ul>

                    <?php foreach($categories as $cate) : ?>
                    <?php if($cate->parent==$cat):?>


                            <li> <span class="link_title"><?php echo $cate->name?></span>

                            <?php                 $children = get_categories('child_of='.$cate->cat_ID);
                        ?>
                            <ul>
                            <?php foreach($children as $child) : ?>
                                <li class="subcat"> <a href="#<?php echo $child->cat_ID?>" class="link"><?php echo $child->name?></a></li>
                            <?php endforeach;?>
                                </ul>
                            </li>
                    <?php endif;?>
                    <?php endforeach;
                    wp_reset_query()?>
                </ul>
            </div>
            <!-- /sidebar -->

        </div>

    </div>
</div>



<?php get_footer("1"); ?>
