<?php get_header(); ?>

  <?php include( 'piecemeta-top.php' ); ?>

    <div class="piece__pic piece__pic-motion--video">
		  <iframe class="piece__video" src="<?php the_field( 'video_link' ); ?>" frameborder="0" allowfullscreen></iframe>
    </div>

  <?php include( 'piecemeta-bottom.php' ); ?>

<?php get_footer(); ?>