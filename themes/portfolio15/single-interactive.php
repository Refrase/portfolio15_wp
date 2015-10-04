<?php get_header(); ?>

  <?php include( 'piecemeta-top.php' ); ?>

  <?php if( get_field('screen_1') ): ?>
		<ul class="piece__pic piece__pic--interact piece__pic--interact-screen">
      <li><p class="piece__splitter"><?php the_field( 'screen_1_title' ); ?></p></li>
      <li><img src="<?php the_field( 'screen_1' ); ?>"></li>
    </ul>
  <?php endif; ?>

  <?php if( get_field('screen_2') ): ?>
		<ul class="piece__pic piece__pic--interact piece__pic--interact-screen">
      <li><p class="piece__splitter"><?php the_field( 'screen_2_title' ); ?></p></li>
      <li><img src="<?php the_field( 'screen_2' ); ?>"></li>
    </ul>
  <?php endif; ?>

  <?php if( get_field('screen_3') ): ?>
		<ul class="piece__pic piece__pic--interact piece__pic--interact-screen">
      <li><p class="piece__splitter"><?php the_field( 'screen_3_title' ); ?></p></li>
      <li><img src="<?php the_field( 'screen_3' ); ?>"></li>
    </ul>
  <?php endif; ?>

  <?php if( get_field('mockups') ): ?>
		<ul class="piece__pic piece__pic--interact">
      <li><p class="piece__splitter"><?php the_field( 'mockups_title' ); ?></p></li>
      <li><img src="<?php the_field( 'mockups' ); ?>"></li>
    </ul>
  <?php endif; ?>

  <div class="piece__pic--interact--clips">
    <?php if( get_field('screen_clip_1_link') ): ?>
      <ul class="piece__pic piece__pic--interact piece__pic--interact--iframe">
        <li><p class="piece__splitter"><?php the_field( 'screen_clip_1_title' ); ?></p></li>
        <li><iframe class="piece__clip" src="<?php the_field( 'screen_clip_1_link' ); ?>" width="500" height="885" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></li>
      </ul>
    <?php endif; ?>

    <?php if( get_field('screen_clip_2_link') ): ?>
      <ul class="piece__pic piece__pic--interact piece__pic--interact--iframe">
        <li><p class="piece__splitter"><?php the_field( 'screen_clip_2_title' ); ?></p></li>
        <li><iframe class="piece__clip" src="<?php the_field( 'screen_clip_2_link' ); ?>" width="500" height="885" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></li>
      </ul>
    <?php endif; ?>
  </div>

  <?php include( 'piecemeta-bottom.php' ); ?>

<?php get_footer(); ?>