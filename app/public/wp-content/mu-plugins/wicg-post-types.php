<?php

function wicg_post_types() {
	register_post_type('eventEnglish', array(
		'show_in_rest' => true,
		'supports' => array('title', 'editor', 'excerpt'),
		'rewrite'=> array('slug' => 'events'),
		'has_archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'EventsE',
			'add_new_item' => 'Add New Event',
			'edit_item' => 'Edit Event',
			"all_items" => 'All Events',
			'singular_name' => 'EventE' 
		),
		'menu_icon' => 'dashicons-id'
	));
	register_post_type('evenementFrancais', array(
		'show_in_rest' => true,
		'supports' => array('title', 'editor', 'excerpt'),
		'rewrite'=> array('slug' => 'events2'),
		'has_archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'EvenementsF',
			'add_new_item' => 'Add New Event',
			'edit_item' => 'Edit Event',
			"all_items" => 'All Events',
			'singular_name' => 'EvenementF' 
		),
		'menu_icon' => 'dashicons-id-alt'
	));
}

add_action('init', 'wicg_post_types');

?>