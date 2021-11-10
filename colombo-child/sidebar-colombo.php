<div class="col-md-4">

<div class="col-md-12 rec-posts text-center">
	<h6>RECOMMENDED POSTS</h6>
	<br>
	<?php get_template_part('loops/sidebar-loop'); ?>
</div>

<br>

<section id="category_section_id">
	<div class="col-md-12">
		<?php 
			wp_list_categories( array(
			'orderby'    => 'name',
			'show_count' => true,
			'title_li'            => __( '<h5 class="text-center">CATEGORIES</h5>' ),
			'exclude'            => '1',
			)); 
		?> 
	</div>
</section>

<section id="tags_section_id">
	<div class="col-md-12 tags-section text-center">
		<h6>TAGS</h6>
		<p>LOREM IPSUM</p>
		<p>LOREM IPSUM</p>
		<p>LOREM IPSUM</p>
	</div>
</section>

</div>


