<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('|', true, 'right'); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php do_action('ci_meta'); ?>

    <?php wp_head(); ?>

    <?php do_action('ci_styles'); ?>

    <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/html5shiv.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/respond.min.js"></script>
    <![endif]-->

    <script>
        var post_id = <?php the_ID(); ?>;
    </script>
</head>
