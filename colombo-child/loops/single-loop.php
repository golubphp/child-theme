	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <!-- Title --> 
		<h4 class="card-title">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h4>
		
        <!-- Author -->
		<p class="lead"><i class="far fa-user"></i> <?php _e( 'Autor : ', 'colombo' ); the_author_posts_link(); ?></p>
		<?php get_template_part( 'assets/social/social', 'icons' );?>
		<br>
		<hr>
		<?php
			$current_user = wp_get_current_user();
			$cul = $current_user->user_login;
			$get_author =  get_the_author();

			if ($cul==$get_author){
				$link = home_url( '/izmeni/' );
				$link = add_query_arg( 'post_id_num', get_the_ID(), $link );
				echo '<a href="', $link, '"><i class="far fa-edit"></i> Izmeni Post</a>';
			}
			?>
			
			<?php if ($post->post_author == $current_user->ID) { ?>
			<a onclick="return confirm('Da li ste SIGURNI da hocete da obrišete ovaj post?')" href="<?php echo get_delete_post_link( $post->ID ) ?>"><i class="far fa-trash-alt"></i> Obriši Post</a>
			<?php } ?>
        <hr>
		<p><?php _e( 'Kategorije: ', 'colombo' ); the_category(', '); ?></p>

        <!-- Date/Time -->
        <p>Objavljeno: <?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></p>

        <hr>

		<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail('medium'); ?>
				</a>
		<?php endif; ?>

        <hr>

        <!-- Post Content -->
		<div class="single-content">
        <p class="lead">
		<?php the_content(); ?>
		</p>
		</div>


		<?php edit_post_link('Uredi Post', '<p>', '</p>'); ?>
        <hr>
		<?php endwhile; ?>
		<?php else: ?>
		<h1><?php _e( 'Sorry, nothing to display.', 'colombo' ); ?></h1>
		<?php endif; ?>