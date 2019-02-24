<?php
/**
 * The header for our theme.
 *
 * @package WP_Template
 *
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header page-scroll">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><?php bloginfo( 'name' ); ?></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="navbar-nav ml-auto">
                <?php wp_nav_menu(array(
                    'menu' => 'Main menu',
                    'items_wrap' => '%3$s',
                    'container' => false,
                    'list_item_class' => "nav-item",
                    'link_class' => "nav-link"
                )); ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">