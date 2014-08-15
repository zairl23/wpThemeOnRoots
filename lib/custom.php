<?php
/**
 * Custom functions
 */
/**
 * Get the category's 5 posts
 */
function get_category_posts() {
	query_posts("showposts=5&category_name=公司新闻&orderby=date&order=DESC");
    while (have_posts()) : the_post();
    	$title = the_title();
    	$permalink = the_permalink();
    	$time = the_time("Y-m-d");
    	echo "<a href=" . $permalink . " rel='bookmark'>" . $title . "</a>&nbsp;&nbsp;&nbsp;&nbsp;" . $time
        . "<br/>";
    endwhile;
}