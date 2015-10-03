<?php get_header(); ?>

  <?php include( 'piecemeta-top.php' ); ?>

		<ul class="piece__pic piece__pic--print">
      <li><p class="piece__splitter"><?php the_field( 'print_1_title' ); ?></p></li>
      <li><img src="<?php the_field( 'print_1' ); ?>"></li>
    </ul>

  <?php include( 'piecemeta-bottom.php' ); ?>

<?php get_footer(); ?>