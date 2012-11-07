	<div id="suggestion">

		<h3>Suggest an inspiring site</h3>

		<form method="post" action="<?=bloginfo('url');?>/submit" name="suggestion_form" id="suggestion_form">

			<div class="form-row">
				<label for="suggestion_url">Your inspiring link*</label>
				<input type="text" class="required" name="suggestion_url" id="suggestion_url" placeholder="" />
			</div>
		
			<div class="form-row">
				<label for="suggestion_name">Your name</label>
				<input type="text" class="" name="suggestion_name" id="suggestion_name" placeholder="" />
			</div>
		
			<div class="form-row">
				<label for="suggestion_email">Email address</label>
				<input type="email" class="" name="suggestion_email" id="suggestion_email" placeholder="" />
			</div>
		
			<div class="form-row">
				<label for="suggestion_twitter">Twitter name</label>
				<input type="text" class="" name="suggestion_twitter" id="suggestion_twitter" placeholder="" />
			</div>
		
			<div class="form-row">
				<label for="suggestion_comment">Comment?</label>
				<textarea placeholder="" name="suggestion_comment" id="suggestion_comment"></textarea>
			</div>
			
			<div class="form-row clearfix">
				<input type="submit" name="suggestion_submit" id="suggestion_submit" value="Send message" />
			</div>
		
		</form>
		
		<p class="privacy"><small><strong>* Required</strong>. Don't worry, we'll never share your email address with anyone. We might just say hello on Twitter though!</small></p>
		
		<div class="response">
			<p class="response-msg">Thanks for helping us build up the inspiration list. You should see your link up here soon.</p>
		</div>
		
	</div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?=bloginfo('template_url');?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <script src="<?=bloginfo('template_url');?>/js/plugins.js"></script>

  <!-- Add fancyBox main JS files -->
  <script type="text/javascript" src="<?=bloginfo('template_url');?>/js/libs/fancybox/jquery.fancybox.js?v=2.0.6"></script>

  <script src="<?=bloginfo('template_url');?>/js/script.js?v=1.0.5"></script>

  <script>
    var _gaq=[['_setAccount','UA-32489728-1'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>