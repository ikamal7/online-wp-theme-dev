<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            while(have_posts()) {
                the_post();

                the_title("<h2>", "</h2>");
                the_post_thumbnail();

                the_content();
            }
            
            ?>
        </div>
    </div>
</div>



<?php get_footer(); ?>