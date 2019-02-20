<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <?php 
    
            while(have_posts()){
                the_post();
               ?>
               <?php the_post_thumbnail('medium', 'd-block'); ?>
                <h3><?php the_title(); ?></h3>
                <h6><?php the_category(); ?></h6>
                <p><?php the_tags(); ?></p>
                <p><?php the_date(); ?></p>
                <p><?php the_content(); ?></p>
               <?php
            }
            
            ?>
        </div>
    </div>
</div>




<?php get_footer(); ?>