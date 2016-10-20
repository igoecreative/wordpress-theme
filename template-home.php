<?php /* Template Name: Home Page */ get_header(); ?>

	<div class="container-fluid">
		<div class="row">
			<div class="feat_img home aligncenter">
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				}?>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="inner">
			<div class="row">
				<section>
					<h1><?php the_title(); ?></h1>
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<article class="content">
						<?php the_content(); ?>
						<br class="clear">
					</article>
				<?php endwhile; ?>
				<?php else: ?>
					<article>
						<h2><?php _e( 'Sorry, nothing to display.', 'igoecreative' ); ?></h2>
					</article>
				<?php endif; ?>
				</section>
			</div>
		</div>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
