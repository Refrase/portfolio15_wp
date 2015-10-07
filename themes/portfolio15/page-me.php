<?php
/**
 * Template Name: Me
*/
?>

<?php get_header(); ?>

  <section>
    <div class="skillwheel__wrap">
      <div class="skillwheel__wrap--counter-rotate">
        <img class="skillwheel" src="http://localhost/003_Portfolio15/portfolio15_site_wp/wp-content/themes/portfolio15/images/skills_mollehjul.svg" />
      </div>
      <img class="me__face me__face--serious" src="http://localhost/003_Portfolio15/portfolio15_site_wp/wp-content/themes/portfolio15/images/mig_serios.png" />
      <img class="me__face me__face--running" src="http://localhost/003_Portfolio15/portfolio15_site_wp/wp-content/themes/portfolio15/images/mig_pandeband.png" />
    </div>

    <article class="me">
      <h1 class="header"><?php the_field( 'my_name' ); ?></h1>
      <p class="text"><?php the_field( 'about_me' ); ?></p>
    </article>

    <article>
      <h1>CV</h1>
      <p>FCN, Politiken, Zetland</p>
      <p>LinkedIn-link</p>
    </article>
  </section>

<?php get_footer(); ?>