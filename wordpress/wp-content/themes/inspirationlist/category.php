<?php get_header(); ?>

	<div class="about">
		<a href="#" class="expandable-tab expandable-tab-click ir">About</a>
		<div class="about-content">
		
			<section class="intro">
				<h2>Category: <?php echo ucwords(single_cat_title('', FALSE)); ?> Inspiration</h2>

				<?php echo category_description(); ?> 
				
			</section>		
			
		</div>
	</div>

<?php get_template_part('content', 'inspirationlist'); ?>

<?php get_footer(); ?>