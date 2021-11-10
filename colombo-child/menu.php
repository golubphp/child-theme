<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark" id="main_navbar" >
      <a class="navbar-brand" href="#">Colombo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
<?php
wp_nav_menu( array(
    'theme_location'    => 'colombo_menu',
    'depth'             => 2,
    'container'         => 'ul ',
    'container_class'   => 'collapse navbar-collapse',
    'container_id'      => 'navbarsExample04 ',
    'menu_class'        => 'navbar-nav mr-auto ',
	'before'            => '',
	'after'             => '', 
    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
    'walker'            => new WP_Bootstrap_Navwalker(),
) );
?>





      </div>
    </nav>