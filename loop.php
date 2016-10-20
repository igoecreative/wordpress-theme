<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article class="article loop">

		<?php if ( has_post_thumbnail()) :?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); // Declare img size in pixels you need inside the array ?>
			</a>
		<?php endif; ?>

		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>

		<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
		<span class="author"><?php _e( 'Published by', 'igoecreative' ); ?> <?php the_author_posts_link(); ?></span>
		<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'igoecreative' ), __( '1 Comment', 'igoecreative' ), __( '% Comments', 'igoecreative' )); ?></span>

	</article>

<?php endwhile; ?>
<?php else: ?>

	<article class="article loop">
		<h2><?php _e( 'Sorry, nothing to display.', 'igoecreative' ); ?></h2>
	</article>

<?php endif; ?>
