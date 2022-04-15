<?php get_header(); ?>

<div id="default_layout">

	<?php // check if there are any layout rows on the page 
	?>
	<?php if (have_rows('layout')) : ?>
		<?php global $post;
		$pageName = $post->post_name; ?>
		<main id="page-<?php echo $pageName ?>" class="layout">
			<?php while (have_rows('layout')) {
				the_row();

				// if layour rows are found get the template for the latout row from layout/{layoutname} and add it this template
				$templatename = 'components/' . get_row_layout() . '/' . get_row_layout();

				get_template_part($templatename); ?>
			<?php
			} ?>
		</main>
	<?php endif; ?>
</div>


<?php get_footer(); ?>