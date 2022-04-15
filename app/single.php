<?php get_header(); ?>

<main id="single_blog_post">
	<div class="container-fluid title-block">
		<div class="container">
			<div class="row">
				<div class="col offset-xl-3 no-padding">
					<h1 class="heading "><?php echo get_the_title(); ?></h1>
					<p class="date">Published on <?= get_the_date(); ?></p>
				</div>
			</div>
		</div>

	</div>
	<section class="container">
		<?php while (have_posts()) : the_post(); ?>
			<div class="row justify-content-end">
				<div class="col-xl-3 padding-lg-0">
					<section class="social_media">
						<?php
						$host = $_SERVER['HTTP_HOST'];
						$uri = $_SERVER['REQUEST_URI'];
						$url = $host . $uri;
						?>
						<?php // https://cards-dev.twitter.com/validator 
						?>
						<meta name="twitter:card" content="summary">
						<meta name="twitter:url" content="<?= $url; ?>">
						<meta name="twitter:title" content="<?php echo get_the_title(); ?>">
						<meta name="twitter:description" content="<?php echo get_the_excerpt(); ?>">
						<meta name="twitter:image" content="<?php the_post_thumbnail_url('post-thumbnail'); ?>">
						<a href="<?= get_page_link(130); ?>" class="back"> <span>
							</span> Back to archive</a>
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="14.052" height="25.293" viewBox="0 0 14.052 25.293">
								<g id="Icon_Social_network_Facebook" data-name="Icon/Social network/Facebook" transform="translate(-7.026 -1.405)">
									<path id="Facebook" class="social-icon" d="M13.523.005,10.152,0A5.837,5.837,0,0,0,3.919,6.225v2.87H.53A.523.523,0,0,0,0,9.611v4.158a.523.523,0,0,0,.53.516H3.919V24.778a.523.523,0,0,0,.53.516H8.87a.523.523,0,0,0,.53-.516V14.285h3.962a.523.523,0,0,0,.53-.516l0-4.158a.51.51,0,0,0-.155-.365.538.538,0,0,0-.375-.151H9.4V6.662c0-1.169.286-1.763,1.852-1.763h2.27a.523.523,0,0,0,.53-.516V.521A.523.523,0,0,0,13.523.005Z" transform="translate(7.026 1.405)" />
								</g>
							</svg></a>
						<a href="http://twitter.com/share" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="25.294" height="20.797" viewBox="0 0 25.294 20.797">
								<g id="Icon_Social_network_Twitter" data-name="Icon/Social network/Twitter" transform="translate(-1.405 -3.653)">
									<path id="Twitter" class="social-icon" d="M25.264,2.477a.124.124,0,0,0-.147-.034,10.048,10.048,0,0,1-2.371.726A5.307,5.307,0,0,0,24.6.545a.127.127,0,0,0-.041-.138A.125.125,0,0,0,24.413.4a10.085,10.085,0,0,1-3.155,1.229A5.256,5.256,0,0,0,12.2,5.313a5.4,5.4,0,0,0,.1,1.046A14.47,14.47,0,0,1,1.967,1,.122.122,0,0,0,1.859.949a.125.125,0,0,0-.1.062A5.355,5.355,0,0,0,3.029,7.84a5,5,0,0,1-1.836-.6.124.124,0,0,0-.124,0,.127.127,0,0,0-.063.107v.068a5.325,5.325,0,0,0,3.7,5.075,5.009,5.009,0,0,1-1.75-.026.126.126,0,0,0-.118.04.128.128,0,0,0-.026.123A5.273,5.273,0,0,0,7.382,16.3a10.053,10.053,0,0,1-6.031,1.985A10.313,10.313,0,0,1,.14,18.214a.127.127,0,0,0-.083.232A14.587,14.587,0,0,0,8,20.8,14.674,14.674,0,0,0,22.745,5.914q0-.306-.012-.609a10.553,10.553,0,0,0,2.539-2.676A.128.128,0,0,0,25.264,2.477Z" transform="translate(1.405 3.654)" />
								</g>
							</svg></a>

						<a href="https://www.linkedin.com/cws/share?url=<?php echo $url; ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="22.483" height="21.08" viewBox="0 0 22.483 21.08">
								<g id="Icon_Social_network_Linkedin" data-name="Icon/Social network/Linkedin" transform="translate(-2.81 -2.811)">
									<path id="Linkedin" class="social-icon" d="M12.591,21.08H7.77c0-.108.064-12.9,0-14.223h4.82V8.872a.308.308,0,0,1-.018.026l-.014.019h.032V8.872a4.78,4.78,0,0,1,4.344-2.35A5.27,5.27,0,0,1,20.9,8.084a6.831,6.831,0,0,1,1.585,4.838v8.155h-4.82v-7.61c0-2.1-.844-3.216-2.441-3.216a2.635,2.635,0,0,0-2.472,1.73,3.065,3.065,0,0,0-.159,1.152v7.943Zm-7.486,0H.286V6.856h4.82V21.077ZM2.7,4.916H2.663A2.483,2.483,0,0,1,0,2.457,2.49,2.49,0,0,1,2.728,0a2.482,2.482,0,0,1,2.7,2.457A2.49,2.49,0,0,1,2.7,4.916Z" transform="translate(2.81 2.81)" />
								</g>
							</svg></a>
					</section>
				</div>
				<article id="post_content" class="col-lg-11 col-xl-9 ">



					<div class="row">
						<div class="col-lg-8 white-background">
							<?php the_post_thumbnail('full'); ?>
							<?php the_content(); ?>
							<hr>
							<div class="tags-row">
								<p><?php the_category(', '); // Separated by commas 
									?></p>
								<p><?php the_tags(', '); ?></p>

							</div>
						</div>
						<aside class="col-xxl-3 col-lg-4 ml-auto">

							<div id="post_sidebar">
								<h2>Navigate</h2>
								<ul class="sidebar_elements">
									<?php dynamic_sidebar('single_sidebar'); ?>
								</ul>
							</div>
							<div class="cta-sidebar">
								<h3>Want to make your printed collateral more <span class='pink'>engaging?</span></h3>


								<a href="#" class="button pink">get a quote</a>
							</div>



						</aside>
					</div>




				</article>
			</div>
		<?php endwhile; ?>
	</section>

	<?php get_template_part('template-parts/recent_post'); ?>>
	<?php get_template_part('template-parts/call-to-action'); ?>
</main>


<?php get_footer(); ?>