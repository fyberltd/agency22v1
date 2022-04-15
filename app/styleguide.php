<?php
/* template name: Styleguide */
get_header();
?>

<div id="style_guide">
	<div class="container">
		<div class="row">

			<section id="intro">
				<h2>Introduction</h2>
				<p>Welcomet to the styleguide, this page is to be used for assigning styles to which will act as a base for the site.</p>
			</section>

			<section id="colors">
				<h2>Colors</h2>
				<ul>
					<li>
						<div class="color1">
							<p>colorname</p>
						</div>
					</li>
					<li>
						<div class="color2">
							<p>colorname</p>
						</div>
					</li>
					<li>
						<div class="color3">
							<p>colorname</p>
						</div>
					</li>
					<li>
						<div class="color4">
							<p>colorname</p>
						</div>
					</li>
				</ul>
			</section>

			<section id="typography">
				<h2>Typography</h2>

				<div class="titles">
					<h3>Titles</h3>

					<h4>titlename</h4>
					<h1>Hello</h1>

					<h4>titlename</h4>
					<h2>Wednesday</h2>

					<h4>titlename</h4>
					<h3>Example of small heading</h3>
				</div>

				<div class="paragraphs">
					<h3>Paragraphs</h3>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					</p>

					<p class="alt">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					</p>
				</div>

			</section>

			<section id="buttons">

				<ul>
					<li>
						<a href="#" class="btn">Load more</a>
					</li>
					<li>
						<a href="#" class="btn black">Load more</a>
					</li>
				</ul>


			</section>

			<section id="lists">
				<h3>Unordered list</h3>
				<ul>
					<li>List item 1</li>
					<li>List item 2</li>
					<li>List item 3</li>
					<li>List item 4</li>
				</ul>

				<h3>Ordered list</h3>
				<ol>
					<li>List item 1</li>
					<li>List item 2</li>
					<li>List item 3</li>
					<li>List item 4</li>
				</ol>
			</section>

			<section id="forms">
				<h2>Contact Forms</h2>

				<h3>Static</h3>

				<?php // input form here 
				?>

				<h3>Modal</h3>

				<a href="#">Call to action</a>

				<?php // input form here 
				?>

			</section>

		</div>
	</div>
</div>

<?php
get_footer();
?>