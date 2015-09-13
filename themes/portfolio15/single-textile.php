<?php get_header(); ?>

  <?php include( 'piecemeta-top.php' ); ?>

		<article class="piece__pics-textile">

			<ul class="piece__pic piece__pic-textile">
	      <li><p class="piece__splitter"><?php the_field( 'textiles_only_title' ); ?></p></li>
	      <li><img src="<?php the_field( 'textiles_only' ); ?>"></li>
	    </ul>

			<ul class="piece__pic piece__pic-textile">
	      <li><p class="piece__splitter"><?php the_field( 'textiles_in_action_title' ); ?></p></li>
	      <li><img src="<?php the_field( 'textiles_in_action' ); ?>"></li>
	    </ul>

			<ul class="piece__pic piece__pic-textile">
	      <li><p class="piece__splitter"><?php the_field( 'textiles_details_title' ); ?></p></li>
	      <li><img src="<?php the_field( 'textiles_details' ); ?>"></li>
	    </ul>

			<ul class="piece__pic piece__pic-textile">
	      <li><p class="piece__splitter"><?php the_field( 'textiles_sketches_title' ); ?></p></li>
	      <li><img src="<?php the_field( 'textiles_sketches' ); ?>"></li>
	    </ul>

			<ul class="piece__pic piece__pic-textile">
	      <li><p class="piece__splitter"><?php the_field( 'textiles_labels_one_title' ); ?></p></li>
	      <li><img src="<?php the_field( 'textiles_labels_one' ); ?>"></li>
	    </ul>

			<ul class="piece__pic piece__pic-textile">
	      <li><p class="piece__splitter"><?php the_field( 'textiles_labels_two_title' ); ?></p></li>
	      <li><img src="<?php the_field( 'textiles_labels_two' ); ?>"></li>
	    </ul>

    </article>

  <?php include( 'piecemeta-bottom.php' ); ?>

<?php get_footer(); ?>