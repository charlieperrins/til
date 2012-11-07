<?php // query_posts( 'orderby=rand' ); ?>
<?php get_header(); ?>

	<div class="about">
		<a href="/about" class="expandable-tab expandable-tab-click ir">About</a>
		<div class="about-content">
		
			<section class="intro">
				<h2>About the inspiration list</h2>
				<?=get_content(10);?>
			</section>		
			
			<section class="founders">
				<h3>Founders</h3>
				<p><span class="founder-name">Michael Dowell</span> <a href="http://twitter.com/#!/michaeldowell">@michaeldowell</a></p>
				<p><span class="founder-name">Charlie Perrins</span> <a href="http://twitter.com/#!/charlieperrins">@charlieperrins</a></p>
			</section>		
			
			<section class="contributors">
				<h3>Contributors</h3>
				

 				<div class="contributor">
					<h4>Peter Crawley</h4>
					<p class="contrib-meta">
						<a class="contrib-web" href="http://petercrawley.co.uk" target="_blank">petercrawley.co.uk</a>
						<br />
						<a class="contrib-twitter" href="http://twitter.com/#!/petercrawley" target="_blank">@petercrawley</a>
					</p>
					<p class="contrib-blurb">
					&ldquo;Peter studied and continues to work in the field of Product Design. 
					He also creates Stitched Illustrations. The illustrations are created by 
					hand piercing various stocks of paper with a pin and then stitching the 
					paper with a needle and cotton thread.&rdquo;
					</p>
				</div>

 				<div class="contributor">
					<h4>Priya Mistry</h4>
					<p class="contrib-meta">
						<a class="contrib-web" href="http://www.behance.net/priyamistry" target="_blank">behance.net/priyamistry</a>
						<br />
						<a class="contrib-twitter" href="http://twitter.com/#!/1PriyaMistry" target="_blank">@1PriyaMistry</a>
					</p>
					<p class="contrib-blurb">
					&ldquo;Freelance mixed-media animator / graphic designer / illustrator (currently Belfast based).&rdquo;
					</p>
				</div>

 				<div class="contributor">
					<h4>Steven Bonner</h4>
					<p class="contrib-meta">
						<a class="contrib-web" href="http://stevenbonner.com" target="_blank">stevenbonner.com</a>
						<br />
						<a class="contrib-twitter" href="http://twitter.com/#!/stevenbonner" target="_blank">@stevenbonner</a>
					</p>
					<p class="contrib-blurb">
					&ldquo;From my home studio just outside Stirling in Scotland, I work on a variety 
					of design, illustration and lettering projects for clients home and abroad with 
					the benefit of almost fifteen years experience agency-side in the creative industries.&rdquo;
					</p>
				</div>

 				<div class="contributor">
					<h4>Jenny Theolin</h4>
					<p class="contrib-meta">
						<a class="contrib-web" href="http://jennytheolin.com" target="_blank">jennytheolin.com</a>
						<br />
						<a class="contrib-twitter" href="http://twitter.com/#!/JennyTheolin" target="_blank">@JennyTheolin</a>
					</p>
					<p class="contrib-blurb">
					&ldquo;My name is Jenny Theolin and I am a Swedish designer, art director 
					and curator based in London. I have heaps of experience with big brands 
					and quite a list of top clients. I develop brands, marketing strategies, 
					integrated campaigns, and everything in between.&rdquo;
					</p>
				</div>

 				<div class="contributor">
					<h4>Matt Williams</h4>
					<p class="contrib-meta">
						<a class="contrib-web" href="http://www.uberkraaft.co.uk" target="_blank">uberkraaft.co.uk</a>
						<br />
						<a class="contrib-twitter" href="http://twitter.com/#!/uberkraaft" target="_blank">@uberkraaft</a>
					</p>
					<p class="contrib-blurb">
					&ldquo;My name is Matt Williams I am freelance illustrator, artist, designer 
					& creative director available for hire. uberkraaft is the name for my various 
					illustration & personal work projects.&rdquo;
					</p>
				</div>

							
			</section>
					
		</div>
	</div>

<?php get_template_part('content', 'inspirationlist'); ?>

<?php get_footer(); ?>