<?php get_header(); ?>


<div class="container">
    <div class="row">
    <?php while(have_posts()): the_post(); ?>
    
    <div class="col-md-4">

        
        <?php the_post_thumbnail('medium'); ?>
        <a href="<?php the_permalink(); ?>" class="btn btn-success d-inline-block mt-3 mb-2">Read more</a>

    </div>


    <?php endwhile; ?>
    
    </div>
</div>



<?php get_footer(); ?>