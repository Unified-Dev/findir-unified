<?php

return array(

	'cpt' => array(
		'labels' => array(
			'name'               => _x('Price Tables', 'post type general name', 'ait-toolkit'),
			'singular_name'      => _x('Price Table', 'post type singular name', 'ait-toolkit'),
			'menu_name'          => _x('Price Tables', 'post type menu name', 'ait-toolkit'),
			'add_new'            => _x('Add New', 'service', 'ait-toolkit'),
			'add_new_item'       => __('Add New Price Table', 'ait-toolkit'),
			'edit_item'          => __('Edit Price Table', 'ait-toolkit'),
			'new_item'           => __('New Price Table', 'ait-toolkit'),
			'view_item'          => __('View Price Table', 'ait-toolkit'),
			'search_items'       => __('Search Price Tables', 'ait-toolkit'),
			'not_found'          => __('No Price Tables found', 'ait-toolkit'),
			'not_found_in_trash' => __('No Price Tables found in Trash', 'ait-toolkit'),
			'all_items'          => __('All Price Tables', 'ait-toolkit'),
		),
		'args' => array(
			'supports' => array(
				'title',
				'page-attributes',
			),
			'capabilities' => array(
				'edit_post'              => 'ait_toolkit_price-table_edit_post',
				'read_post'              => 'ait_toolkit_price-table_read_post',
				'delete_post'            => 'ait_toolkit_price-table_delete_post',
				'edit_posts'             => 'ait_toolkit_price-table_edit_posts',
				'edit_others_posts'      => 'ait_toolkit_price-table_edit_others_posts',
				'publish_posts'          => 'ait_toolkit_price-table_publish_posts',
				'read_private_posts'     => 'ait_toolkit_price-table_read_private_posts',
				'read'                   => 'ait_toolkit_price-table_read_posts',
				'delete_posts'           => 'ait_toolkit_price-table_delete_posts',
				'delete_private_posts'   => 'ait_toolkit_price-table_delete_private_posts',
				'delete_published_posts' => 'ait_toolkit_price-table_delete_published_posts',
				'delete_others_posts'    => 'ait_toolkit_price-table_delete_others_posts',
				'edit_private_posts'     => 'ait_toolkit_price-table_edit_private_posts',
				'edit_published_posts'   => 'ait_toolkit_price-table_edit_published_posts',
			),
		),
	),

	'taxonomies' => array(
		'tables' => array(
			'labels' => array(
				'name'              => _x('Price Tables Categories', 'taxonomy general name', 'ait-toolkit'),
				'menu_name'         => _x('Categories', 'taxonomy menu name', 'ait-toolkit'),
				'singular_name'     => _x('Category', 'taxonomy singular name', 'ait-toolkit'),
				'search_items'      => __('Search Categories', 'ait-toolkit'),
				'all_items'         => __('All Categories', 'ait-toolkit'),
				'parent_item'       => __('Parent Category', 'ait-toolkit'),
				'parent_item_colon' => __('Parent Cateogry:', 'ait-toolkit'),
				'edit_item'         => __('Edit Category', 'ait-toolkit'),
				'view_item'         => __('View Category', 'ait-toolkit'),
				'update_item'       => __('Update Category', 'ait-toolkit'),
				'add_new_item'      => __('Add New Category', 'ait-toolkit'),
				'new_item_name'     => __('New Category Name', 'ait-toolkit'),
			),
		),
	),


	'metaboxes' => array(
		'table-data' => array(
			'title'  => _x('Table Options', 'custom metabox title', 'ait-toolkit'),
			'config' => 'table-data',
		),
	),
);
