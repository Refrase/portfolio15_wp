<?php get_header(); ?>

	<?php include( 'piecemeta-top.php' ); ?>

    <a href="<?php the_field( 'external_link' ); ?>" class="piece__ext-link"><i class="fa fa-2x fa-external-link"></i></a>

	  <p class="piece__splitter"><?php the_field( 'grouptitle_1' ); ?></p>
    <ul class="piece__pic piece__pic-web--big">
		  <li><img src="<?php the_field( 'desktop' ); ?>"></li>
    </ul>
    <ul class="piece__pic piece__pic-web--medium">
		  <li><img src="<?php the_field( 'tablet' ); ?>"></li>
    </ul>
    <ul class="piece__pic piece__pic-web--small">
		  <li><img src="<?php the_field( 'mobile' ); ?>"></li>
    </ul>

    <p class="piece__splitter"><?php the_field( 'grouptitle_2' ); ?></p>
    <ul class="piece__pic piece__pic-web--big">
      <li><img src="<?php the_field( 'desktop_2' ); ?>"></li>
    </ul>
    <ul class="piece__pic piece__pic-web--medium">
      <li><img src="<?php the_field( 'tablet_2' ); ?>"></li>
    </ul>
    <ul class="piece__pic piece__pic-web--small">
      <li><img src="<?php the_field( 'mobile_2' ); ?>"></li>
    </ul>

	  <p class="piece__splitter"><?php the_field( 'grouptitle_3' ); ?></p>
    <ul class="piece__pic piece__pic-web--styletile">
		  <li><img src="<?php the_field( 'styletile' ); ?>"></li>
    </ul>

	<?php include( 'piecemeta-bottom.php' ); ?>

<?php get_footer(); ?>