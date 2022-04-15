<?php 
	get_header();
?>

<div id="blog_tag_page">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1><?php single_tag_title( 'Blogs tagged: ', true ); ?></h1>
			</div>
		</div>

		<?php 
			$tag = get_queried_object()->slug;

			$args = array(
				'post_type'			=> 'post',
				'posts_per_page'	=> 1,
				'paged'				=> 1,
				'orderby' 			=> 'date',
				'tag'			    => $tag
			);

			$query = new WP_Query( $args );

			$no_of_posts = $query->found_posts;
		?>

		<?php if ( $query->have_posts() ) : $post_count = 0;?>
			<div class="row blog_posts">
				<?php while( $query->have_posts() ): $query->the_post(); ?>
					<div class="col-4 post">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(); ?>
							<h2 class="title"><?php echo get_the_title(); ?></h2>
						</a>

						<p class="date"><?php echo get_the_date(); ?></p>

						<p class="excerpt"><?php echo get_the_excerpt(); ?></p>
						
						<p class="categories">Categories: <?php echo get_the_category_list(', '); ?></p>

						<p class="tags">Tags: <?php echo get_the_tag_list('',', ',''); ?></p>
					</div>

					<?php $post_count++; ?>
		  		<?php endwhile; wp_reset_postdata(); ?>

		  		<div class="loading_icon">
					<img src="<?php echo bloginfo('template_directory'); ?>/images/loading.gif" alt="Loading GIF">
				</div>
	  		</div>
		<?php endif; ?>

  		<?php if( $post_count != $no_of_posts ): ?>
  			<div class="row justify-content-center">
	  			<a href="javascript:;" id="tag_load_more" class="load_btn" data-page="1" data-tag="<?php echo $tag; ?>">SEE MORE</a>
  			</div>
  		<?php endif; ?>
	</div>
</div>

<?php 
	get_footer();
?>