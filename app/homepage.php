<?php
/*template name: homepage*/
?>

<?php
get_header();
?>

<main id="home_page">
	<?php // blank hero 
	?>
	<section id="hero">
		<div class="container content">
			<div class="row">

				<article class="col-lg-6 text">
					<h1>hero </h1>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dolor justo, mattis quis urna
						eu, interdum molestie est.</p>

					<a href="#" class="button blue">Button</a>
				</article>

				<div class="col-lg-6">
					<div class="image"></div>
				</div>
			</div>
		</div>
	</section>
	<?php // hero with gradient background 
	?>
	<section id="hero" class="gradient">
		<div class="container content">
			<div class="row">

				<article class="col-lg-6 text">
					<h1>hero class='gradient' </h1>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dolor justo, mattis quis urna
						eu, interdum molestie est.</p>

					<a href="#" class="button pink">Button</a>
				</article>

				<div class="col-lg-6">
					<div class="image"></div>
				</div>
			</div>
		</div>
	</section>

	<?php // hero with background image 
	?>
	<section id="hero" class="fullbg">
		<div class="container content">
			<div class="row">

				<?php
				$head = "some text";
				$args = array(
					'section_title' => $head,
					'section_body' => '<p>hero as a template part with variables and full background image</p><p>maybe not worth it.</p>',
					'url' => '#',
					'button_text' => 'view more'
				);

				get_template_part('template-parts/md-text', 'md-text', $args); // template-parts/file-name.phpf="#" class="button">Button</a>

				?>


				<div class="col-lg-6">
					<div class="image"></div>
				</div>
			</div>
		</div>
	</section>

	<section id="cards">
		<div class="container">
			<h2>cards</h2>

			<div class="card-row">
				<a href='#' class="basic-card">
					<div class="image">

					</div>
					<h3 class="title">basic-card </h3>

				</a>
				<a href='#' class="basic-card">
					<div class="image">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-alarm" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
						</svg>
					</div>
					<h3 class="title">basic-card with icon</h3>

				</a>
				<a href='#' class="basic-card">
					<div class="image">
						<p class="hover-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos,
							dolorum?</p>
					</div>
					<h3 class="title">basic-card with hover</h3>

				</a>

				<a href='#' class="basic-card">
					<div class="image">

					</div>
					<h3 class="title">basic-card</h3>

				</a>
			</div>


			<div class="card-row">
				<a href='#' class="text-card">
					<div class="image">

					</div>
					<div class="text">

						<h3 class="title">text-card</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, quasi.</p>
					</div>

				</a>
				<div href='#' class="text-card">
					<div class="image">

					</div>
					<div class="text">

						<h3 class="title">text-card</h3>
						<a href="#" class="button blue rounded">with button</a>
					</div>

				</div>
				<a href='#' class="text-card">
					<div class="image">

					</div>
					<div class="text">

						<h3 class="title">text-card</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, quasi.</p>
					</div>

				</a>

				<a href='#' class="text-card">
					<div class="image">

					</div>
					<div class="text">

						<h3 class="title">text-card</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, quasi.</p>
					</div>

				</a>
			</div>
		</div>
	</section>
	<?php // full width 50% 50% article 
	?>
	<article class="article">
		<article class="text-col">
			<div class="text">
				<h2>title</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, expedita.</p>
				<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo nihil porro culpa magnam recusandae
					corrupti quaerat error nam iure dicta.</p>
				<a href="#" class="button blue">button</a>
			</div>
		</article>
		<div class="image-col"></div>
	</article>
	<?php // artilcle in a container 
	?>
	<article class="container article">
		<div class="text-col">
			<article class="text">
				<h2>title</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, expedita.</p>
				<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo nihil porro culpa magnam recusandae
					corrupti quaerat error nam iure dicta.</p>
				<a href="#" class="button blue">button</a>
			</article>
		</div>
		<div class="image-col"></div>
	</article>
	<div class="call-to-action">

	</div>
	<?php get_template_part('template-parts/recent_post'); ?>>

	<section id="lastest_blog">
		<?php
		$args = array(
			'post_type'			=> 'post',
			'posts_per_page'	=> 3,
			'orderby' 			=> 'date'
		);

		$query = new WP_Query($args);
		?>

		<div class="container">
			<?php if ($query->have_posts()) : ?>
				<h2>Recent Posts</h2>

				<div class="row blog_posts card-row">
					<?php while ($query->have_posts()) : $query->the_post(); ?>
						<a href='<?php the_permalink(); ?>' class="basic-card">
							<div class="image" <?php if (get_the_post_thumbnail_url()) : ?>style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);" <?php endif; ?>>
								<p class="hover-text"><?php echo get_the_excerpt(); ?></p>
							</div>
							<h2 class="title"><?php echo get_the_title(); ?></h2>

						</a>
					<?php endwhile;
					wp_reset_postdata(); ?>
				</div>
			<?php endif; ?>
		</div>
	</section>
	<?php get_template_part('template-parts/call-to-action'); ?>

</main>

<?php
get_footer();
?>