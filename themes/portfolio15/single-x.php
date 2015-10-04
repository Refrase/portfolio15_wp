<?php get_header(); ?>

  <?php include( 'piecemeta-top.php' ); ?>

		<div class="piece__pic piece__pic-x--iframe">
			<iframe class="piece__iframe" src="<?php the_field( 'external_link' ); ?>"></iframe>
		</div>

  <?php include( 'piecemeta-bottom.php' ); ?>

<?php get_footer(); ?>