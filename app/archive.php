<?php
	/*template name: Blog Archive*/
?>

<?php 
	get_header();
?>

<main id="blog_archive">
<?php
		$args = array(
		'post_type' => 'post',
		'orderby' => 'date',
		'posts_per_page' => 1,
		'meta_query' => array(
		
		)
		
		);

		$query = new WP_Query( $args );

		?>
		<?php if( $query->have_posts() ): ?>
			<?php while( $query->have_posts() ): $query->the_post(); ?>
	<section id="cover">
	
		<div class="back-box">
		<?php if( has_post_thumbnail() ): ?>
				<?php the_post_thumbnail('full'); ?>
				<?php else: ?>
				<img src="<?php echo wp_get_attachment_image_url(134, 'full'); ?>" alt="Default Thumbnail">
				<?php endif; ?>
		</div>
	
		<div class="featured-box container">
			
			<figure class="left-col">
				<h1>Blog</h1>
				<?php if( has_post_thumbnail() ): ?>
				<?php the_post_thumbnail('full'); ?>
				<?php else: ?>
				<img src="<?php echo wp_get_attachment_image_url(134, 'full'); ?>" alt="Default Thumbnail">
				<?php endif; ?>
			</figure>
			<article class="right-col">
				<div class="date-row">
					<p class="date"><?php echo get_the_date(); ?></p>
					<p><?php the_category(', '); // Separated by commas ?></p>
				</div>
				<div class="text-box">
					<h2 class="title"><?php echo mb_strimwidth(get_the_title(),0,75,"..."); ?></h2>

					<p class="excerpt"><?php echo get_the_excerpt(); ?></p>
					<div class="bottom-row">
						<a class="button pink" href="<?php the_permalink(); ?>">View</a>

					</div>
				</div>

			</article>
		

		</div>
	
	</section>
		<?php endwhile; wp_reset_postdata(); ?>
	<?php endif; ?>
	<?php get_template_part( 'template-parts/recent_post' ); ?>
	<?php get_template_part( 'template-parts/call-to-action' ); ?>
</main>

<?php 
	get_footer();
?>