<?php get_header(); ?>

  <?php include( 'piecemeta-top.php' ); ?>

		<div class="piece__pics-visuali">

	    <ul class="piece__pic piece__pic-visuali">
	      <li><p class="piece__splitter"><?php the_field( 'logo_title' ); ?></p></li>
	      <li><img src="<?php the_field( 'logo' ); ?>"></li>
	    </ul>

	    <ul class="piece__pic piece__pic-visuali">
	      <li><p class="piece__splitter"><?php the_field( 'pattern_title' ); ?></p></li>
	      <li><img src="<?php the_field( 'pattern' ); ?>"></li>
	    </ul>

	    <ul class="piece__pic piece__pic-visuali">
	      <li><p class="piece__splitter"><?php the_field( 'fonts_title' ); ?></p></li>
	      <li><img src="<?php the_field( 'fonts' ); ?>"></li>
	    </ul>

	    <ul class="piece__pic piece__pic-visuali">
	      <li><p class="piece__splitter"><?php the_field( 'colors_title' ); ?></p></li>
	      <li><img src="<?php the_field( 'colors' ); ?>"></li>
	    </ul>

	    <ul class="piece__pic piece__pic-visuali">
	      <li><p class="piece__splitter"><?php the_field( 'paperline_title' ); ?></p></li>
	      <li><img src="<?php the_field( 'paperline' ); ?>"></li>
	    </ul>

	    <ul class="piece__pic piece__pic-visuali">
	      <li><p class="piece__splitter"><?php the_field( 'tickets_title' ); ?></p></li>
	      <li><img src="<?php the_field( 'tickets' ); ?>"></li>
	    </ul>

	    <ul class="piece__pic piece__pic-visuali">
	      <li><p class="piece__splitter"><?php the_field( 'imagery_in_context_1_title' ); ?></p></li>
	      <li><img src="<?php the_field( 'imagery_in_context_1' ); ?>"></li>
	    </ul>

	    <ul class="piece__pic piece__pic-visuali">
	      <li><p class="piece__splitter"><?php the_field( 'imagery_in_context_2_title' ); ?></p></li>
	      <li><img src="<?php the_field( 'imagery_in_context_2' ); ?>"></li>
	    </ul>

	    <ul class="piece__pic piece__pic-visuali">
	      <li><p class="piece__splitter"><?php the_field( 'banner_in_context_1_title' ); ?></p></li>
	      <li><img src="<?php the_field( 'banner_in_context_1' ); ?>"></li>
	    </ul>


	    <ul class="piece__pic piece__pic-visuali">
	      <li><p class="piece__splitter"><?php the_field( 'banner_in_context_2_title' ); ?></p></li>
	      <li><img src="<?php the_field( 'banner_in_context_2' ); ?>"></li>
	    </ul>

	    <div class="piece__pic piece__pic-visuali--video">
	    	<p class="piece__splitter"><?php the_field( 'video_title' ); ?></p>
			  <iframe class="piece__video" src="<?php the_field( 'video_link' ); ?>" frameborder="0" allowfullscreen></iframe>
	    </div>

			<div class="piece__pic-visuali--airlooks">
		    <div class="piece__pic piece__pic-visuali--video piece__pic-visuali--airlook">
		    	<p class="piece__splitter"><?php the_field( 'airlook_1_title' ); ?></p>
				  <iframe class="piece__video piece__video--airlook" src="<?php the_field( 'airlook_1_link' ); ?>" frameborder="0" allowfullscreen></iframe>
		    </div>

		    <div class="piece__pic piece__pic-visuali--video piece__pic-visuali--airlook">
		    	<p class="piece__splitter"><?php the_field( 'airlook_2_title' ); ?></p>
				  <iframe class="piece__video piece__video--airlook" src="<?php the_field( 'airlook_2_link' ); ?>" frameborder="0" allowfullscreen></iframe>
		    </div>
		  </div>

	  </div> <!-- .piece__pics-visuali -->

  <?php include( 'piecemeta-bottom.php' ); ?>

<?php get_footer(); ?>