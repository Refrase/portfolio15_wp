<?php
/**
 * Template Name: Show
*/
?>

<?php get_header(); ?>

  <section class="piece-cats">
    <ul>

      <?php
        $defaults = array(
          'menu'            => 'Kategorimenu',
          'theme_location'  => 'Kategorimenu',
          'depth'           => 1,
          'container'       => '',
          'items_wrap'      => '%3$s' // Removes the default wrapping <ul>-tag
        );
        wp_nav_menu( $defaults );
      ?>

    </ul>
  </section>

  <div class="intro-bg-wrap">
    <div class="intro-bg"></div>
  </div>

<?php get_footer(); ?>