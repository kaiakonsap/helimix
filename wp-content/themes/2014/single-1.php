<?php get_header(); ?>
    <div id="main">
        <div class="container3" id="single">
            <div class="back">
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
        if($category->cat_name!='esileht')
        {
            $output .= $category->cat_ID.$separator;
        }
    }
}

                if ($ref_parse[host]==$my_parse[host] || $show_back_to_parent) {
                    echo '<a href="'.$ref_url.'#'.$output.'"><img src="'.get_template_directory_uri().'/img/arrow_thick_left.png">Tagasi</a>';
                }?>
            </div>
            <div id="content_strip">
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                        <div id="<?php the_title(); ?>" class="headline"><p><?php the_title(); ?>
                            </p><span class="price"> <?php
                                $posttags = get_the_tags();
                                if ($posttags) {
                                    foreach ($posttags as $tag) {
                                        echo ' <span>'.$tag->name . '</span> ';
                                    }
                                }
                                ?>
                                </span>
                        </div>
                            <div class="item" id="one_item">
                                    <?php if (has_post_thumbnail()) { // Check if thumbnail exists ?>

                                    <span class="image_wrap" id="large-image">
                                      <?php the_post_thumbnail(array(300, 300)); // Declare pixel size you need inside the array ?>
                                  </span>
                                    <span class="intro" id="align_top">
                                        <?php }else {?>
                                        <span class="intro no_image">
                                        <?php }?>
                                            <?php the_content(); ?>
                                            <span class="price">

                                          <?php
                                          $posttags = get_the_tags();
                                          if ($posttags) {
                                              foreach ($posttags as $tag) {
                                                  echo ' <span class="parts">'.$tag->name . '</span> ';
                                              }
                                          }
                                          ?>
                                      </span></span>
                                <?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>

                            </div>

                        <?php
                        endwhile; // foreach($posts
                    endif; // if ($posts
                ?>

            </div>

        </div>

    </div>

<?php get_footer(); ?>
