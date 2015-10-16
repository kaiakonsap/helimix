<?php if (have_posts()): while (have_posts()) : the_post(); ?>

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

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sisu puudub hetkel' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
