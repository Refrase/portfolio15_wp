<!-- Menu: Kategorier -->
<ul id="menuCateg" class="menu menu--categ">

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