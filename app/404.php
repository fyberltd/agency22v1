<?php 
	get_header();
?>

<div id="not_found_404">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6">
				<h1>404 - PAGE NOT FOUND</h1>

				<p>Looks like the page you requested could not be found</p>

				<a class="button" href="<?php echo get_home_url(); ?>">Home</a>
				<a class="button" href="<?php get_permalink( get_page_by_path( 'contact' ) ) ?>">Contact</a>
			</div>

			<div class="col-md-6">
				<img id="error_img" src="<?php echo bloginfo('template_directory'); ?>/images/404.png" alt="404">
			</div>
		</div>
	</div>
</div>

<?php
	get_footer();
?>
