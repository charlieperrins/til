<?php get_header(); ?>

<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

	<div role="main" class="main">
		
		<div style="margin: 104px 0 7px 7px;">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
		
		
	</div>
		

<?php endwhile; endif; ?>

<?php get_footer(); ?>