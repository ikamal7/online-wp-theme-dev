<?php get_header(); ?>


<div class="container">
    <div class="row">
    <?php while(have_posts()): the_post(); ?>
    
    <div class="col-md-4">
        <?php the_post_thumbnail('medium'); ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </div>


    <?php endwhile; ?>
    
    </div>
</div>



<?php get_footer(); ?>