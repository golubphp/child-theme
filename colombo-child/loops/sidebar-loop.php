<?php

   $args = array(  
       'post_type' => 'news',
       'post_status' => 'publish',
       'posts_per_page' => 3,
       'orderby' => 'title',
       'order' => 'ASC',
   );

   $loop = new WP_Query( $args );
   while ( $loop->have_posts() ) : $loop->the_post();
?>
		<h6 class="card-title">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h6>
<?php
   endwhile;
   wp_reset_postdata();
 
?>