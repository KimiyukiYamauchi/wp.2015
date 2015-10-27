<?php get_header(); ?>
	
<div class="container">

	<?php if(have_posts()): while(have_posts()): the_post(); ?>
	
		<article <?php post_class(); ?>>

		<h1><?php the_title(); ?></h1>
		
		<?php the_content(); ?>

		</article>
	
	<?php endwhile; endif; ?>
	
</div><!-- container -->

<?php get_footer(); ?>
