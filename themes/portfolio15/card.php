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