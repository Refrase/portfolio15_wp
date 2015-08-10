<?php get_header(); ?>

  <?php include( 'piecemeta-top.php' ); ?>

    <a href="http://politiken.dk/oekonomi/virksomheder/ECE2181801/virksomheder-mister-millioner-paa-facebook/" class="piece__ext-link"><i class="fa fa-2x fa-external-link"></i></a>

    <ul class="piece__pic piece__pic-infog--small">
      <li><p class="piece__splitter"><?php the_field( 'infographic_small_title' ); ?></p></li>
      <li><img src="<?php the_field( 'infographic_small' ); ?>"></li>
    </ul>
    <ul class="piece__pic piece__pic-infog--big">
      <li><p class="piece__splitter"><?php the_field( 'infographic_large_title' ); ?></p></li>
		  <li><img src="<?php the_field( 'infographic_large' ); ?>"></li>
    </ul>

  <?php include( 'piecemeta-bottom.php' ); ?>

<?php get_footer(); ?>