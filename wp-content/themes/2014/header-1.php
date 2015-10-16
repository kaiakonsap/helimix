<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
    <div id="main_menu">
        <div class="container2">
            <div id="mobile_logo">
                <?php if (!dynamic_sidebar('nutika_logo')) : ;endif;?>
            </div>

            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="links">
                <?php helimix_nav(); ?>                </div>
            <div class="accordion">
                <?php if (!dynamic_sidebar('nutika_menu')) :?> <?php endif;?>

            </div>
                <div id="like">
                    <?php if (!dynamic_sidebar('päises')) :?> <?php endif;?>
                </div>

        </div>
    </div>
    <header id="push_down">
        <div id="cover" style="background-image: url(<?php header_image();?>)">
            <?php if (!dynamic_sidebar('logo')) : ;endif;?>
        </div>
    </header>
