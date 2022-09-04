<?php

function tg_get_post_view($post_id = null): string
{
	if ($post_id == null) {
		$post_id = get_the_ID();
	}
	$count = get_post_meta($post_id, 'post_views_count', true);
	if (!$count) {
		$count = 0;
	}
	return "$count";
}

function tg_set_post_view($post_id)
{
	$key = 'post_views_count';
	$count = (int)get_post_meta($post_id, $key, true);
	$count++;
	update_post_meta($post_id, $key, $count);
}

function tg_posts_column_views($columns)
{
	$columns['post_views'] = 'Views';
	return $columns;
}

function tg_posts_custom_column_views($column)
{
	if ($column === 'post_views') {
		echo tg_get_post_view() . ' views';
	}
}

add_filter('manage_posts_columns', 'tg_posts_column_views');
add_action('manage_posts_custom_column', 'tg_posts_custom_column_views');

function tg_get_posts_most_view($postType = 'post', $order = 'DESC'): array
{
	$args = array(
		'post_status' => 'publish',
		'post_type' => $postType,
		'meta_key' => 'post_views_count',
		'orderby' => 'meta_value_num',
		'posts_per_page' => 4,
		'order' => $order
	);


	$query = new WP_Query($args);

	return $query->posts;
}


