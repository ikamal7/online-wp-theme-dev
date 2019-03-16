<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <?php 
    
            while(have_posts()){
                the_post();

                $has_website = get_field('has_website');
                $book_name = get_field('book_name');

                

               ?>
               <?php the_post_thumbnail('medium', 'd-block'); ?>
                <h3><?php the_title(); ?></h3>
                <h6><?php the_category(); ?></h6>
                <p><?php the_tags(); ?></p>
                <p><?php the_date(); ?></p>
                <?php if(!empty($book_name) ): ?>
                <p><b>Book name:</b> <?php the_field('book_name'); ?></p>
                <?php endif; ?>

                <p><b>Book Summery: </b><?php the_field('book_summary'); ?></p>
                <p><b>Book Published: </b><?php the_field('published_year'); ?></p>
                <p><b>Book Rating: </b><?php the_field('rating'); ?></p>
                <?php if($has_website == true) : ?>
                <p><b>Book Website: </b><a href="<?php the_field('website_link'); ?>"><?php the_field('website_link'); ?></a></p>
                <?php endif; ?>
               <?php
            }
            
            ?>
        </div>
    </div>
</div>




<?php get_footer(); ?>