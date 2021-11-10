<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$data= new WP_Query(array(
    'post_type'			=>	'news', // your post type name
    'posts_per_page' 	=> 	2, // post per page
    'paged' 			=> 	$paged,
));

if($data->have_posts()) :
    while($data->have_posts())  : $data->the_post();
?>
		<h4 class="card-title">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h4>

		<h6>
		<span class="author"><?php _e( '<i class="far fa-user"></i> ', 'colombo' ); ?> <?php the_author_posts_link(); ?></span>
		<span class="date"><i class="far fa-clock"></i> <i><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></i></span>
		</h6>
		
<div class="row">
<div class="col-md-8">
<?php echo excerpt(50); ?>
<br>
<?php echo wpdocs_excerpt_more('colombo'); ?>
<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Ostavite Komentar <i class="far fa-comments"></i>', 'colombo' ), __( '1 Comment <i class="far fa-comments"></i> ', 'html5blank' ), __( ' % Comments <i class="far fa-comments"></i>', 'html5blank' )); ?></span>
</div>
		<div class="col-md-4">
				<?php if ( has_post_thumbnail()) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('thumbnail'); ?>
			</a>
		<?php endif; ?>
		</div>
</div>
<hr>

<?php
    endwhile;
?>
<div class="text-center";>
<?php
    $total_pages = $data->max_num_pages;

    if ($total_pages > 1){

        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text'    => __(' PREVIOUS'),
            'next_text'    => __('NEXT '),
        ));
    }
    ?>
</div>
    
<?php else :?>
<h3><?php _e('404 Error&#58; Not Found', ''); ?></h3>
<?php endif; ?>
<?php wp_reset_postdata();?>