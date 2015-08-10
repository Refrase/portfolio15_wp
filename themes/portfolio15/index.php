<?php get_header(); ?>
<?php /* include( 'nav-categ.php' ); */ ?> <!-- Implement when everything else is in order -->

  <section class="cards">
    <article>

    <?php
      $args = [ 'post_type' => 'infographic' ];
      $query = new WP_Query( $args );
    ?>
    <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

      <a href="<?php the_permalink(); ?>">
        <article class="card">
          <div class="card__image">
            <?php the_post_thumbnail( ); ?>
          </div>
          <div class="card__meta-wrap">
            <h2><?php the_title(); ?></h2>
            <p><?php the_field( 'excerpt' ); ?></p>
          </div>
        </article>
      </a>

    <?php endwhile; else : ?>

      <p>Arrrrgh, no portfolio pieces here <i class="fa fa-frown-o"></i></p>

    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
    <!-- wp_reset_postdata() used after using WP_Query() -->
    <!-- wp_reset_query() is used after using query_posts() -->

    <?php
      $args = [ 'post_type' => 'website' ];
      $query = new WP_Query( $args );
    ?>
    <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

      <a href="<?php the_permalink(); ?>">
        <article class="card">
          <div class="card__image">
            <?php the_post_thumbnail( ); ?>
          </div>
          <div class="card__meta-wrap">
            <h2><?php the_title(); ?></h2>
            <p><?php the_field( 'excerpt' ); ?></p>
          </div>
        </article>
      </a>

    <?php endwhile; else : ?>

      <p>Arrrrgh, no portfolio pieces here <i class="fa fa-frown-o"></i></p>

    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

    </article>
  </section>

<?php get_footer(); ?>