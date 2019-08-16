<?php

function rest_prepare_product_callback($data, $post) {
	$featured_img_url = get_the_post_thumbnail_url($post->ID, 'thumbnail');  //medium - large - full
	$_data = $data->data;
	$fields = get_fields($post->ID);

	foreach ($fields as $key => $value) {
	    $_data[$key] = get_field($key, $post->ID);
	}
	$_data['cpf'] = $fields;
	$_data['thumbnail'] = $featured_img_url;
	$data->data = $_data;
	return $data;
}

add_filter('rest_prepare_producto', 'rest_prepare_product_callback', 10, 2);


function rest_prepare_auto_callback($data, $post) {
	$featured_img_url = get_the_post_thumbnail_url($post->ID, 'thumbnail');  //medium - large - full
	$_data = $data->data;
	$fields = get_fields($post->ID);

	foreach ($fields as $key => $value) {
		$_data[$key] = get_field($key, $post->ID);
	}
	$_data['cpf'] = $fields;
	$_data['thumbnail'] = $featured_img_url;
	$data->data = $_data;
	return $data;
}

add_filter('rest_prepare_auto', 'rest_prepare_auto_callback', 10, 2);
