<?php get_header(); ?>

<div class="container">
	<div class="inner default">
		<div class="row">
			<div class="col-xs-12">

				<h1><?php _e( 'Tag Archive: ', 'igoecreative' ); echo single_tag_title('', false); ?></h1>
				<?php get_template_part('loop', 'igoecreative' ); ?>
				<?php get_template_part('pagination', 'igoecreative' ); ?>

			</div>
		</div>
	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
