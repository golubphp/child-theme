<?php
/*
Template Name: Blog Page Template Colombo 
*/
get_header();
?>

<?php
/* Start the Loop */
while ( have_posts() ) :
	the_post();
?>

<section id="heading-vc">	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
			<?php
			the_content();
			?>
		</div><!-- .entry-content -->
	</article>
</section>
<?php
	endwhile; // End of the loop.
?>

<!-- #post-<?php the_ID(); ?> -->

<section id="blog_main_section">
	<div class="container">
		<div class="col-md-10 offset-md-1">
			<div class="row">
				<div class="col-md-8">
					<?php get_template_part('loops/blog-loop'); ?>
				</div>

					<?php get_template_part('sidebar-colombo'); ?>

			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>


	



