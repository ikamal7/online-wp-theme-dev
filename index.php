<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>Our All Posts</h2>
            <?php 
    
            while(have_posts()){
                the_post();
               ?>
               <?php the_post_thumbnail('medium', 'd-block'); ?>
                <h3><?php the_title(); ?></h3>
                <h6><?php the_category(); ?></h6>
                <p><?php the_tags(); ?></p>
                <p><?php the_date(); ?></p>
                <p><?php the_excerpt(); ?></p>
                <a class="btn btn-success d-inline-block" href="<?php the_permalink(); ?>">Read more</a>
               <?php
            }
            
            ?>
        </div>
    </div>
</div>







    <?php wp_footer(); ?>
</body>
</html>