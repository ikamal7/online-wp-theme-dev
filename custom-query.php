<?php
/**
 * Template name: Custom Query
 */

 ?>


 <?php get_header(); ?>


<?php 
$posts = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'order' => 'DESC',
    'orderby' => 'title'
));




?>

<div class="container">
    <div class="row">
        <div class="col-md-12">


<?php

while($posts->have_posts()) : $posts->the_post(); 

?>



<h2><?php the_title(); ?></h2>


<?php endwhile; ?>


        
</div>
    </div>
</div>

 <?php get_footer(); ?>