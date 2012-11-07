	<div role="main" class="main">
		<ul class="inspiration-list clearfix">
		<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<li class="item <?=post_category_slugs($post->ID);?>">
				<a href="<? the_field('url'); ?>" target="_blank" title="<? the_title(); ?>">
					<? $logo = get_field('logo'); if ($logo == '') : ?>
					<img src="http://placehold.it/260x200" alt="Logo for <? the_title(); ?>" />
					<? else : ?>
					<img src="<?=$logo;?>" alt="Logo for <? the_title(); ?>" />
					<? endif; ?>
				</a>
			</li>		
		<? endwhile; endif; ?>
		</ul>	
		
		<p class="copyright">&copy; <?=date('Y');?> <strong><a href="mailto:info@theinspirationlist.com">the inspiration list</a></strong> all logos copyright their respective authors.</p>

	</div>
