<?php
/**
 * Template Name: Random
*/
?>
<?php
	$post_types = [ 'website', 'infographic', 'interactive', 'motiongraphic', 'visualidentity', 'prints', 'textile', 'x' ];
	$randNum = rand( 0,7 );

  $args = [
    'posts_per_page' => 1,
    'orderby' => 'rand', // Random ordering
		'post_type' => $post_types[ $randNum ] // Vælg en random post_type
		];
  $query = new WP_Query( $args );

	// Find ud af hvilken post_type der er hentet fra databasen, så den rigtige template kan bruges til visning
	$post_type = $query->post->post_type;
?>
<?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

	<?php if ( $post_type === 'infographic' ) { ?>
  	<?php include( 'single-infographic.php' ); ?>
	<?php } else if ( $post_type === 'website' ) { ?>
		<?php include( 'single-website.php' ); ?>
	<?php } else if ( $post_type === 'interactive' ) { ?>
		<?php include( 'single-interactive.php' ); ?>
	<?php } else if ( $post_type === 'motiongraphic' ) { ?>
		<?php include( 'single-motiongraphic.php' ); ?>
	<?php } else if ( $post_type === 'visualidentity' ) { ?>
		<?php include( 'single-visualidentity.php' ); ?>
	<?php } else if ( $post_type === 'prints' ) { ?>
		<?php include( 'single-prints.php' ); ?>
	<?php } else if ( $post_type === 'textile' ) { ?>
		<?php include( 'single-textile.php' ); ?>
	<?php } else if ( $post_type === 'x' ) { ?>
		<?php include( 'single-x.php' ); ?>
	<?php } ?>

<?php endwhile; else : ?>

	<?php get_header(); ?>
		<section>
			<article>

  			<p>Shit! Didn't work <i class="fa fa-frown-o"></i></p>

  		</article>
  	</section>
	<?php get_footer(); ?>

<?php endif; ?>
<?php wp_reset_postdata(); ?>
