<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Testing - Agency22v1</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
	<script>
		window.addEventListener("load", function() {
			window.cookieconsent.initialise({
				"palette": {
					"popup": {
						"background": "#252e39"
					},
					"button": {
						"background": "transparent",
						"text": "#14a7d0",
						"border": "#000"
					}
				}
			})
		});
	</script>
	<?php wp_head(); ?>
</head>
<?php // https://cookieconsent.osano.com/download/ 
?>

<body <?php body_class() ?>>
	<!-- <header id="header" class="<?php if (is_front_page()) {
									echo 'homepage';
								} ?>">

		<div class="container content">
			<a href="<?php echo get_home_url(); ?>" class="logo">
				<img src="<?php echo bloginfo('template_directory'); ?>/images/agency-logo.svg" alt="logo">
			</a>
		</div>
	</header> -->
	<div class="ie-notice">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<section id="contact-info">
						<img src="<?php echo bloginfo('template_directory'); ?>/images/logo.png" alt="logo">
						<div class="address">
							<h2>Address</h2>

							<address>
								Fyber Agency<br>
								Realtex House<br>
								2 Leeds Road<br>
								Rawdon<br>
								LS19 6AX
							</address>
						</div>

						<div class="details">
							<h2>Phone & Email</h2>

							<ul>
								<li><a href="tel:0113 898 0481">0113 898 0481</a></li>
								<li><a href="mailto:contact@fyber.co.uk">info@fyber.co.uk</a></li>
							</ul>

							<div class="social_media">
								<a href="https://www.instagram.com/fyberltd/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">
										<defs>
											<style>
												.cls-1 {
													fill: #F7AE61;
												}
											</style>
										</defs>
										<g id="Layer_2" data-name="Layer 2">
											<g id="Layer_1-2" data-name="Layer 1">
												<path class="cls-1" d="M30,24.67A5.33,5.33,0,1,0,35.33,30,5.32,5.32,0,0,0,30,24.67Zm0,0A5.33,5.33,0,1,0,35.33,30,5.32,5.32,0,0,0,30,24.67ZM30,0a30,30,0,1,0,0,60,29.18,29.18,0,0,0,3.88-.25A30,30,0,0,0,30,0ZM45.9,36.6c-.26,5.81-3.5,9-9.3,9.3-1.71.08-2.25.1-6.6.1s-4.89,0-6.6-.1c-5.81-.26-9-3.49-9.3-9.3C14,34.89,14,34.35,14,30s0-4.89.1-6.6c.26-5.81,3.49-9,9.3-9.3C25.11,14,25.65,14,30,14s4.89,0,6.6.1c5.81.26,9,3.5,9.3,9.3.08,1.71.1,2.25.1,6.6S46,34.89,45.9,36.6ZM36.47,17c-1.69-.08-2.2-.1-6.47-.1s-4.78,0-6.47.1c-4.34.19-6.36,2.25-6.55,6.55-.08,1.69-.1,2.2-.1,6.47s0,4.78.1,6.47c.19,4.29,2.21,6.36,6.55,6.56,1.69.07,2.2.09,6.47.09s4.78,0,6.47-.09c4.34-.2,6.36-2.26,6.56-6.56.07-1.69.09-2.2.09-6.47s0-4.78-.09-6.46C42.83,19.23,40.8,17.17,36.47,17ZM30,38.22A8.22,8.22,0,1,1,38.22,30,8.22,8.22,0,0,1,30,38.22Zm8.54-14.84a1.92,1.92,0,1,1,1.92-1.92A1.92,1.92,0,0,1,38.54,23.38ZM30,24.67A5.33,5.33,0,1,0,35.33,30,5.32,5.32,0,0,0,30,24.67Z" />
											</g>
										</g>
									</svg></a>

								<a href="https://twitter.com/fyberltd" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">
										<defs>
											<style>
												.cls-1 {
													fill: #F7AE61;
												}
											</style>
										</defs>
										<g id="Layer_2" data-name="Layer 2">
											<g id="Layer_1-2" data-name="Layer 1">
												<path class="cls-1" d="M30,0a30,30,0,1,0,0,60,29.18,29.18,0,0,0,3.88-.25A30,30,0,0,0,30,0ZM43.52,23.07c.44,9.81-6.87,20.75-19.83,20.75A19.74,19.74,0,0,1,13,40.68,14,14,0,0,0,23.33,37.8,7,7,0,0,1,16.81,33,6.93,6.93,0,0,0,20,32.83a7,7,0,0,1-5.6-6.93,7,7,0,0,0,3.16.87,7,7,0,0,1-2.15-9.31,19.78,19.78,0,0,0,14.37,7.29,7,7,0,0,1,11.89-6.37,13.8,13.8,0,0,0,4.43-1.69A6.94,6.94,0,0,1,43,20.55a13.76,13.76,0,0,0,4-1.1A14.09,14.09,0,0,1,43.52,23.07Z" />
											</g>
										</g>
									</svg></a>

								<a href="https://www.facebook.com/fyberltd" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 59.75">
										<defs>
											<style>
												.cls-1 {
													fill: #F7AE61;
												}
											</style>
										</defs>
										<g id="Layer_2" data-name="Layer 2">
											<g id="Layer_1-2" data-name="Layer 1">
												<path class="cls-1" d="M30,0a30,30,0,0,0-5.3,59.53V38.21H17V29.3H24.7V22.75C24.7,15.15,29.34,11,36.13,11a58.2,58.2,0,0,1,6.85.37v8H38.29c-3.7,0-4.41,1.74-4.41,4.31v5.7h8.8l-1.15,8.88H33.88V59.75A30,30,0,0,0,30,0Z" />
											</g>
										</g>
									</svg></a>
								<a href="https://uk.linkedin.com/company/fyber-ltd " target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">
										<defs>
											<style>
												.cls-1 {
													fill: #F7AE61;
												}
											</style>
										</defs>
										<g id="Layer_2" data-name="Layer 2">
											<g id="Layer_1-2" data-name="Layer 1">
												<path class="cls-1" d="M30,0a30,30,0,1,0,0,60,29.18,29.18,0,0,0,3.88-.25A30,30,0,0,0,30,0ZM21.36,46.05h-7V24.9h7ZM17.84,21.76a3.91,3.91,0,1,1,3.88-3.91A3.89,3.89,0,0,1,17.84,21.76ZM46,46.05H39V36c0-6.63-7.06-6.07-7.06,0V46.05h-7V24.9h7.05v3.86C35,23.06,46,22.64,46,34.21Z" />
											</g>
										</g>
									</svg></a>
							</div>
						</div>
					</section>


				</div>

				<div class="col-xl-6 flex-center">
					<section id="contact-form-wrap">
						<h2>Ask us!</h2>
						<?php echo do_shortcode('[contact-form-7 id="96" title="Contact form 1"]'); ?>

					</section>
				</div>
			</div>
		</div>

	</div>
	<div id="wrapper">
		<div class="header-spacing"></div>