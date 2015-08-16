      <!-- Menu: Main -->
      <nav>
        <ul class="menu menu--main">
          <?php
            $defaults = array(
              'menu'            => 'Hovedmenu',
              'theme_location'  => 'Hovedmenu',
              'depth'           => 1,
              'container'       => '',
              'items_wrap'      => '%3$s' // Removes the default wrapping <ul>-tag
            );
            wp_nav_menu( $defaults );
          ?>
        </ul>

        <ul class="menu--random">
          <?php
            $defaults2 = array(
              'menu'            => 'Randommenu',
              'theme_location'  => 'Randommenu',
              'depth'           => 1,
              'container'       => '',
              'items_wrap'      => '%3$s' // Removes the default wrapping <ul>-tag
            );
            wp_nav_menu( $defaults2 );
          ?>
        </ul>

      </nav>