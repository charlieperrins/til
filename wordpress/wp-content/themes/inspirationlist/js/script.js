/* Author:

*/

// Disabling gesture based zooming on the 'pad until the user explicitly asks for it
if (navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i)) {
    var viewportmeta = document.querySelector('meta[name="viewport"]');
    if (viewportmeta) {
        viewportmeta.content = 'width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0';
        document.body.addEventListener('gesturestart', function () {
            viewportmeta.content = 'width=device-width, minimum-scale=0.25, maximum-scale=1.6';
        }, false);
    }
}

jQuery('document').ready(function($){
	
	$inspirationlist = $('.inspiration-list'); // Cache this object for multiple uses
	
	$inspirationlist.isotope({
		// options
		itemSelector : '.item',
		layoutMode : 'fitRows'
//		sortBy : 'random'
	});
	
	// Isotope Filtering
	$('.isotope-filter li a').click(function(){
		if (! $(this).parent().hasClass('current-cat')) {
			$('.isotope-filter li.current-cat').removeClass('current-cat');
			if ( $(this).data('filter') == 'all' ) {
				$inspirationlist.isotope({ filter: '*' });
				_gaq.push(['_trackEvent', 'Navigation', 'Filter', 'all']);
			} else {
				// Have to faff around getting the slug because WP doesn't want us to have control of wp_list_categories()
				var href = $(this).attr('href');
				var href_pieces = href.split('/category/');
				var slug = href_pieces[1];
				slug = slug.replace('/','');
				// Call isotope filter with the slug as a class
				$inspirationlist.isotope({ filter: '.'+slug });
				_gaq.push(['_trackEvent', 'Navigation', 'Filter', slug]);
			}
			$(this).parent().addClass('current-cat');
		}
		return false;
	});
	
	// Isotope shuffling
	$('.iso-shuffle').click(function(){
		$inspirationlist.isotope( 'shuffle' );
		$(this).blur();
		_gaq.push(['_trackEvent', 'Navigation', 'Shuffle']);
		return false;
	});
		
	// Sort out height of about col on page load
	// Will need to put in resize functions here in the future
		
	// Clicking on List items
	$('.item>a').live('click', function(){
		_gaq.push(['_trackEvent', 'List Items', 'Click', $(this).attr('title')]);
	});
	
	$('.expandable-tab-click').click(function(){
		if ($(this).hasClass('expandable-tab-active')) {
			$(this).parent().removeClass('expandable-open');		
			$(this).removeClass('expandable-tab-active');
			$('.expandable-shim').remove();
		} else {
			_gaq.push(['_trackEvent', 'Navigation', 'About Open']);
			$(this).parent().addClass('expandable-open');
			$(this).addClass('expandable-tab-active');
			$('body').append('<div class="expandable-shim"></div>');	
		}
		return false;
	});

	$('.expandable-shim').live('click', function(){
		$('.expandable-open').removeClass('expandable-open');		
		$('.expandable-tab-active').removeClass('expandable-tab-active');
		$(this).remove();
		return false;
	});
	
	
	$('.submit').fancybox({
		type : 'inline',
		afterShow : function(){
			_gaq.push(['_trackEvent', 'Navigation', 'Submit Open']);		
		},
		afterClose : function(){
			$('#suggestion_form').show();
			$('#suggestion_form input, #suggestion_form textarea').val('');
			$('#suggestion_submit').val('Send message');
			$('#suggestion').find('.response').hide();
		}
	});

	$('#suggestion_form').validate();
	
	// If we want to return JSON we need to remove the supercache tags
	$('#suggestion_form').submit(function(){
		if ( $('#suggestion_form').valid() ) {
			var submit_url = $(this).attr('action');
			var submit_data = $(this).serializeJSON();
			submit_data['suggestion_submit'] = 'AJAX';
					
			$(this).find('#suggestion_submit').val('Sending...');
			$('#suggestion').find('.response').hide();
			
			$.post(submit_url, submit_data, function(data){
				$.fancybox.close();
				_gaq.push(['_trackEvent', 'Suggestions', 'Message Send', 'Unknown Status']);
	/*
				if (data.response == 'success') {
					$('#suggestion_form').hide();
					$('#suggestion').find('.response').show();
				}
				if (data.response == 'error') {
					$('#suggestion_submit').val('Send message');
					$('#suggestion').find('.response-msg').html('There was a problem sending your message. Please try again.');
					$('#suggestion').find('.response').show();
				}
	*/
			});
		}
		return false;
	});
	
});