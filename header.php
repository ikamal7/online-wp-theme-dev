<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
<div class="container mb-5">
    <div class="row">
        <div class="col-md-4 text-right">
           <a href="<?php home_url('/') ?>"><h2> <?php bloginfo('name');?></h2></a>
        </div>
        <div class="col-md-6">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'wpdev',
                'menu_class' => 'our-menu',
                'container_class' => '',
            ));
            ?>
        </div>
    </div>
</div>
</header>
