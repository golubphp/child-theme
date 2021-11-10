<?php
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

<?php get_footer(); ?>


	



