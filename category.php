<?php get_header(); ?>

<div class="container">
	<div class="inner default">
		<div class="row">
			<div class="col-xs-12">

				<h1><?php _e( 'Categories for ', 'igoecreative' ); single_cat_title(); ?></h1>
				<?php get_template_part('loop'); ?>
				<?php get_template_part('pagination'); ?>

			</div>
		</div>
	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

