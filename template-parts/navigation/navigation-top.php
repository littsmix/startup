<nav id="header" class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container">
      <a class="navbar-brand" href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
         <?php
            $header_logo = get_theme_mod( 'header_logo' ); // get custom meta-value

            if ( isset( $header_logo ) && ! empty( $header_logo ) ) :
         ?>
            <img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
         <?php
            else :
               echo esc_attr( get_bloginfo( 'name', 'display' ) );
            endif; 
         ?>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="<?php _e( 'Toggle navigation', 'startup' ); ?>">
         <span class="navbar-toggler-icon"></span>
      </button>

      <div id="navbar" class="collapse navbar-collapse">
         <?php
            /** Loading WordPress Custom Menu (theme_location) **/
            wp_nav_menu( array(
               'theme_location'  => 'main-menu',
               'container'       => '',
               'menu_class'      => 'navbar-nav ml-auto',
               'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
               'walker'          => new WP_Bootstrap_Navwalker(),
            ) );
         ?>
      </div><!-- /.navbar-collapse -->

   </div><!-- /.container -->
</nav><!-- /#header -->
