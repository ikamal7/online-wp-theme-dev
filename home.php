<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
        <?php  get_search_form(); ?>
            <h2>Our All Posts</h2>
            <?php 
    
            while(have_posts()){
                the_post();
               ?>
               <?php the_post_thumbnail('medium', 'd-block'); ?>
                <h3><?php the_title(); ?></h3>
                <h6><span><b>Category</b></span><?php the_category(); ?></h6>
                <p><?php the_tags(); ?></p>
                <p><?php the_date(); ?></p>
                <p><?php the_excerpt(); ?></p>
                <a class="btn btn-success d-inline-block" href="<?php the_permalink(); ?>">Read more</a>
               <?php
            }
            
            ?>
            <hr>
             <?php
             the_posts_pagination(array(
                 'mid_size' => 3,
                 'prev_text' => 'Previous',
                 'next_text' => 'Next',
                 'screen_reader_text' => ' ',

             ));
             
             //the_posts_navigation(array( -->
                // 'prev_text' => 'Previous',
                // 'next_text' => 'Next',
                // 'screen_reader_text' => ' ')); ?>
        </div>
    </div>
</div>



<?php get_footer(); ?>