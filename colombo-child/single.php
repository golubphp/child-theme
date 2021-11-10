<?php
get_header();
?>

<section id="blog_main_section">
	<div class="container">
		<div class="col-md-10 offset-md-1">
			<div class="row">
				<div class="col-md-8">
					<?php get_template_part('loops/single-loop'); ?>
				</div>

					<?php get_template_part('sidebar-colombo'); ?>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
