<?php
/**
 * Template Name: Print
*/
?>

<?php get_header(); ?>
<?php include( 'nav-categ.php' ); ?>

  <section class="cards">
    <article>

    <?php
      $args = [ 'post_type' => 'print' ];
      $query = new WP_Query( $args );
    ?>
    <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

      <?php include( 'card.php' ); ?>

    <?php endwhile; else : ?>

      <p>Arrrrgh, no portfolio pieces here <i class="fa fa-frown-o"></i></p>

    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

    </article>
  </section>

<?php get_footer(); ?>