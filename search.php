<?php get_header(); ?>

	<div class="container">
		<div class="inner">
			<div class="row">
				<section class="col-xs-12">
					<h1><?php echo sprintf( __( '%s Search Results for ', 'igoecreative' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
					<?php get_template_part('loop'); ?>
					<?php get_template_part('pagination'); ?>
				</section>
			</div>
		</div>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
