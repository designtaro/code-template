<?php get_header(); ?>
    <?php if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    ?>
<section id="page-sec">
    <h1><?php the_title(); ?></h1>
    <div class="page-sec">
    <?php the_content(); ?>
    <?php 
        endwhile;
    endif;
    ?>
    </div>
            
</section>
<?php get_footer(); ?>