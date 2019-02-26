<?php 
/*
Template Name: New Design Template
*/

get_header();
?>


<div class="container">
    <div class="row">
        <div class="col-md-8">
        <?php
            while(have_posts()) {
                the_post();

                the_post_thumbnail();

                the_content();
            }
            
            ?>
        </div>
        <div class="col-md-4">
            <img src="https://i.ytimg.com/vi/7WCbIjqjHM4/maxresdefault.jpg" alt="">
        </div>
    </div>
</div>






<?php get_footer(); ?>