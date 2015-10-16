<?php get_header("1"); ?>
<div id="main_small">
    <div id="main" class="more_down">
        <div class="container3">
            <div id="content_strip">

                        <div class="padding_top" id="<?php echo $category->name ?>">
                            <div class="headline">
                                <p><?php single_cat_title(); ?></p>
                            </div>
                        </div>
                        <div class="stroke">

                            <?php get_template_part('loop'); ?>

                            <?php get_template_part('pagination'); ?>
                        </div>


            </div>


        </div>

    </div>
</div>



<?php get_footer("1"); ?>
