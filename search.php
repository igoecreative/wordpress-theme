<?php get_header(); ?>

	<div class="container">
		<section>
			<h1><?php echo sprintf( __( '%s Search Results for ', 'igoecreative' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>
		</section>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
