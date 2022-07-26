<?php

// add custom column title for custom meta value
// 'manage_pages_columns' or 'manage_edit-post_columns' both works
add_filter('manage_posts_columns', 'ws365150_add_custom_columns_title_pt', 10, 2);
function ws365150_add_custom_columns_title_pt($columns, $post_type)
{
	switch ($post_type) {
		case 'post':
		case 'episode':
			$columns['ws365150_popular'] = 'Popular'; // you may use __() later on for translation support
			break;

		default:

			break;
	}

	return $columns;
}

// add custom column data with custom meta value for custom post types
add_action('manage_posts_custom_column', 'ws365150_add_custom_column_data_pt', 10, 2);
function ws365150_add_custom_column_data_pt($column_name, $post_id)
{
	switch ($column_name) {
		case 'ws365150_popular': // specified for this column assigned in the column title

			if ($index = get_post_meta($post_id, 'popular', true)) {
				echo '<i class="fa-solid fa-star" style="color: #ff0000"></i>' . ' ' . $index;
			}
			break;

		default:
			break;
	}
}

// for Post + custom post type
add_action('quick_edit_custom_box', 'ws365150_custom_edit_box_pt', 10, 3);
function ws365150_custom_edit_box_pt($column_name, $post_type, $taxonomy)
{
	global $post;

	switch ($post_type) {
		case 'post':
		case 'episode':

			if ($column_name === 'ws365150_popular'): // same column title as defined in previous step
				?>
				<fieldset class="inline-edit-col-right" id="#edit-">
					<div class="inline-edit-col">
						<label>
							<label class="alignleft">
								<span class="checkbox-title">Popular index</span>
								<input type="number" name="popular" placeholder="Index of popular">
								<button class="clear-value" id="clear_value"><i class="fa-solid fa-circle-xmark"></i>
								</button>
							</label>
						</label>
					</div>
				</fieldset>
			<?php
			endif;
			// echo 'custom page field';
			break;

		default:
			break;
	}
}

add_action('save_post', 'ws365150_update_custom_quickedit_box');
function ws365150_update_custom_quickedit_box()
{
	if (isset($_POST) && isset($_POST['popular']) && $_POST['popular'] > 0) { // where summary is defined in the <input name="summary">
		update_post_meta($_POST['post_ID'], 'popular', $_POST['popular']);
	} else {
		delete_post_meta($_POST['post_ID'], 'popular');
	}

	// for debugging purpose in inspector, not necessary, enable this will break the saving but could see the ajax return
	// wp_send_json_success( array(
	//  'message' => 'Save test!',
	//  'post_data' => $_POST,
	// ) );
	return; // finish the function call
}

add_action('admin_enqueue_scripts', function ($page) {

	// add page checking logic, this is a simple one, you may test post type and so on...
	if ('edit.php' != $page) {
		return;
	}

	wp_enqueue_script('popular-quickedit-box', plugin_dir_url(__DIR__) . '/js/popular-mark.js', array('jquery', 'inline-edit-post'));
});


function tg_get_posts_popular($postType = 'post', $order = 'DESC'): array
{
	$args = array(
		'post_status' => 'publish',
		'post_type' => $postType,
		'meta_key' => 'popular',
		'orderby' => 'meta_value_num',
		'posts_per_page' => 10,
		'order' => $order
	);

	$query = new WP_Query($args);

	// check if this condition not true then get all post
	if ($query->found_posts == 0) {
		$query = tg_get_all_post();
	}
	return $query->posts;
}


function tg_get_all_post(): WP_Query
{
	$args = array(
		'post_status' => 'publish',
		'post_type' => 'post',
		'orderby' => 'ID',
		'posts_per_page' => 10,
		'order' => 'DESC'
	);


	return new WP_Query($args);
}

