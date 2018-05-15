<?php get_header(); ?>

	<div class="container-fluid">
		<div class="row">
			<div class="feat_img home">
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				}?>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<section class="col-xs-12">
				<h1><?php _e( 'Latest Posts', 'igoecreative' ); ?></h1>

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<article class="article">

							<?php if ( has_post_thumbnail()) :?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
								</a>
							<?php endif; ?>

							<h2>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</h2>

							<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span> – <span class="author"><?php _e( 'Published by', 'silverline' ); ?> <?php the_author_posts_link(); ?></span>
							<p><?php the_excerpt(); ?></p>
							<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'igoecreative' ), __( '1 Comment', 'igoecreative' ), __( '% Comments', 'igoecreative' )); ?></span>

						</article>

					<?php endwhile; ?>
					<?php else: ?>

						<article class="article loop">
							<h2><?php _e( 'Sorry, nothing to display.', 'igoecreative' ); ?></h2>
						</article>

					<?php endif; ?>


				<?php get_template_part('pagination'); ?>
			</section>
		</div>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
