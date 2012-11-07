<?php

function get_content($post_id) 
{
	$page = get_post($post_id);
	$content = $page->post_content;
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]>', $content);
	return $content;
}

function post_category_slugs($post_id)
{
	$categories = get_the_category($post_id); 
	$slugs = array();
	foreach ($categories as $cat) {
		$slugs[] = $cat->slug;
	}
	return $output = implode(' ', $slugs);
}
