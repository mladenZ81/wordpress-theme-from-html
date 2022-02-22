<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
    <link rel=”stylesheet” href=”<?php echo get_template_directory_uri(); ?>/site.css” type=”text/css” media=”all” />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
</head>
    
<body <?php body_class(); ?>>
 
<?php
    wp_nav_menu( [
        'theme_location'    => 'primary',
    ] );
?>
<?php get_search_form(); ?>