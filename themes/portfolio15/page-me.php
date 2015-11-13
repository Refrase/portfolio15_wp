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

      <img class="man__stick man__stick--walking" src="<?php the_field( 'man_walking' ); ?>" />
      <img class="man__stick man__stick--running" src="<?php the_field( 'man_running' ); ?>" />

      <img class="me__face me__face--serious" src="<?php the_field( 'me_serious' ); ?>" />
      <img class="me__face me__face--running" src="<?php the_field( 'me_running' ); ?>" />

    </div>

    <p>Note: Skill levels assessed by me.</p>

    <article class="me">
      <h1 class="header"><?php the_field( 'about_me_title' ); ?></h1>
      <p class="text"><?php the_field( 'about_me' ); ?></p>
    </article>

    <article>
      <h1 class="header"><?php the_field( 'cv_title' ); ?></h1>
      <p class="text"><?php the_field( 'cv' ); ?></p>
      <p>LinkedIn-link</p>
    </article>
  </section>

<?php get_footer(); ?>