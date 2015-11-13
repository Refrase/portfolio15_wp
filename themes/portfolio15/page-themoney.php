<?php
/**
 * Template Name: The Money
 */
?>

<?php get_header(); ?>

  <section>

    <article>
      <h1 class="header header__init__themoney"><?php the_field( 'the_money_title_init' ); ?></h1>
      <div class="content__load__themoney">
        <h1 class="header"><?php the_field( 'the_money_title_load' ); ?></h1>
        <h3 class="header"><?php the_field( 'the_money_subtitle_load' ); ?></h3>
        <p class="text text__themoney"><?php the_field( 'the_money_text' ); ?></p>
  			<p><?php the_field( 'the_money_phone' ); ?></p>
  			<p><?php the_field( 'the_money_mail' ); ?></p>
      </div>
    </article>

  </section>

  <div class="video__wrap">
    <video id="videoCoins" class="video__coins" autoplay>
      <source src="http://localhost/003_Portfolio15/portfolio15_site_wp/wp-content/themes/portfolio15/video/coins_final.webm" type="video/webm">
      <source src="http://localhost/003_Portfolio15/portfolio15_site_wp/wp-content/themes/portfolio15/video/coins_final.mp4" type="video/mp4">
      <source src="http://localhost/003_Portfolio15/portfolio15_site_wp/wp-content/themes/portfolio15/video/coins_final.ogv" type="video/ogv">
    </video>
  </div>

<?php get_footer(); ?>