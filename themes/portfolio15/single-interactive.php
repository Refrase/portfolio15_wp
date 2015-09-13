<?php get_header(); ?>

  <?php include( 'piecemeta-top.php' ); ?>

		<ul class="piece__pic piece__pic--interact piece__pic--interact-screen">
      <li><p class="piece__splitter"><?php the_field( 'screen_1_title' ); ?></p></li>
      <li><img src="<?php the_field( 'screen_1' ); ?>"></li>
    </ul>

		<ul class="piece__pic piece__pic--interact piece__pic--interact-screen">
      <li><p class="piece__splitter"><?php the_field( 'screen_2_title' ); ?></p></li>
      <li><img src="<?php the_field( 'screen_2' ); ?>"></li>
    </ul>

		<ul class="piece__pic piece__pic--interact piece__pic--interact-screen">
      <li><p class="piece__splitter"><?php the_field( 'screen_3_title' ); ?></p></li>
      <li><img src="<?php the_field( 'screen_3' ); ?>"></li>
    </ul>

		<ul class="piece__pic piece__pic--interact">
      <li><p class="piece__splitter"><?php the_field( 'mockups_title' ); ?></p></li>
      <li><img src="<?php the_field( 'mockups' ); ?>"></li>
    </ul>

  <?php include( 'piecemeta-bottom.php' ); ?>

<?php get_footer(); ?>