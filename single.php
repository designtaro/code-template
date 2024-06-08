<?php get_header(); ?>
<section id="single-sec" class="is_padding20">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h1 class="is_mt70 is_padding10"><?php the_title();?></h1>
	<p class="date is_padding10"><?php the_date(); ?></p>
	<div class="is_mt30 is_mb50 is_padding10 is_pl20 is_pr20"><?php the_content(); ?></div>
<?php endwhile; endif; ?>

</section>
<?php get_footer(); ?>