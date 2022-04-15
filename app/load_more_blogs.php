<?php
add_action('wp_ajax_nopriv_archive_load_more', 'archive_loop');
add_action('wp_ajax_archive_load_more', 'archive_loop');

function archive_loop()
{
	// getting current page number posted by ajax
	$paged = $_POST["page"];

	$args = array(
		'post_type'			=> 'post',
		'posts_per_page'	=> 1,
		'paged'				=> $paged,
		'orderby' 			=> 'date'
	);

	$query = new WP_Query($args);

	$no_of_posts = $query->found_posts;

	// creating an array of content
	if ($query->have_posts()) :
		while ($query->have_posts()) : $query->the_post();
			if (has_post_thumbnail(get_the_ID())) {
				$thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
			} else {
				$thumbnail_url = wp_get_attachment_image_url(31, 'large');
			}

			$blog_data[] = array(
				"permalink"	=> get_the_permalink(),
				"thumbnail" => $thumbnail_url,
				"title"		=> get_the_title(),
				"date"		=> get_the_date(),
				"excerpt"	=> get_the_excerpt(),
				"cat_list"	=> get_the_category_list(', '),
				"tag_list"	=> get_the_tag_list('', ', ', '')
			);
		endwhile;
	endif;

	// array getting the total number of posts 
	$max_posts[] = array(
		"no_of_posts"	=> $no_of_posts
	);

	// converting arrays into json and submitting it to the ajax_url for the .js file
	echo json_encode(array("blog_data" => $blog_data, "max_posts" => $max_posts));

	wp_reset_postdata();
	die();
}

add_action('wp_ajax_nopriv_tag_load_more', 'tag_loop');
add_action('wp_ajax_tag_load_more', 'tag_loop');

function tag_loop()
{
	// $term_slug = get_queried_object()->slug;
	// getting current page number posted by ajax
	$paged = $_POST["page"];
	$tag = $_POST["tag"];

	$args = array(
		'post_type'			=> 'post',
		'posts_per_page'	=> 1,
		'paged'				=> $paged,
		'orderby' 			=> 'date',
		'tag'			    => $tag
	);

	$query = new WP_Query($args);

	$no_of_posts = $query->found_posts;

	// creating an array of content
	if ($query->have_posts()) :
		while ($query->have_posts()) : $query->the_post();
			if (has_post_thumbnail(get_the_ID())) {
				$thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
			} else {
				$thumbnail_url = wp_get_attachment_image_url(31, 'large');
			}

			$blog_data[] = array(
				"permalink"	=> get_the_permalink(),
				"thumbnail" => $thumbnail_url,
				"title"		=> get_the_title(),
				"date"		=> get_the_date(),
				"excerpt"	=> get_the_excerpt(),
				"cat_list"	=> get_the_category_list(', '),
				"tag_list"	=> get_the_tag_list('', ', ', '')
			);
		endwhile;
	endif;

	// array getting the total number of posts 
	$max_posts[] = array(
		"no_of_posts"	=> $no_of_posts
	);

	// converting arrays into json and submitting it to the ajax_url for the .js file
	echo json_encode(array("blog_data" => $blog_data, "max_posts" => $max_posts));

	wp_reset_postdata();
	die();
}

add_action('wp_ajax_nopriv_category_load_more', 'category_loop');
add_action('wp_ajax_category_load_more', 'category_loop');

function category_loop()
{
	// getting current page number posted by ajax
	$paged = $_POST["page"];
	$category = $_POST["cat"];

	$args = array(
		'post_type'			=> 'post',
		'posts_per_page'	=> 1,
		'paged'				=> $paged,
		'orderby' 			=> 'date',
		'category_name'		=> $category
	);

	$query = new WP_Query($args);

	$no_of_posts = $query->found_posts;

	// creating an array of content
	if ($query->have_posts()) :
		while ($query->have_posts()) : $query->the_post();
			if (has_post_thumbnail(get_the_ID())) {
				$thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
			} else {
				$thumbnail_url = wp_get_attachment_image_url(31, 'large');
			}

			$blog_data[] = array(
				"permalink"	=> get_the_permalink(),
				"thumbnail" => $thumbnail_url,
				"title"		=> get_the_title(),
				"date"		=> get_the_date(),
				"excerpt"	=> get_the_excerpt(),
				"cat_list"	=> get_the_category_list(', '),
				"tag_list"	=> get_the_tag_list('', ', ', '')
			);
		endwhile;
	endif;

	// array getting the total number of posts 
	$max_posts[] = array(
		"no_of_posts"	=> $no_of_posts
	);

	// converting arrays into json and submitting it to the ajax_url for the .js file
	echo json_encode(array("blog_data" => $blog_data, "max_posts" => $max_posts));

	wp_reset_postdata();
	die();
}
