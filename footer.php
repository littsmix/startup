<!-- Footer -->
<footer class="footer bg-light">
	<div class="container">
	  <div class="row">
	    <div class="col-lg-6 h-100 text-center text-lg-left my-auto">

			<?php
				if ( has_nav_menu( 'footer-menu' ) ) :
					 // see function register_nav_menus() in
					wp_nav_menu( array(
						'theme_location'  => 'footer-menu',
						'container'       => 'div',
						'fallback_cb'     => '',
						'items_wrap'      => '<ul class="list-inline mb-2">%3$s</ul>',
						//'fallback_cb'    => 'WP_Bootstrap4_Navwalker_Footer::fallback',
						'walker'          => new WP_Bootstrap4_Navwalker_Footer(),
					) );
				endif;
			?>
			<!-- <li class="list-inline-item">&sdot;</li> -->

	      <p class="text-muted small mb-4 mb-lg-0">&copy; <?php echo date( 'Y' ); ?> <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></p>
	    </div>

	    <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
	      <ul class="list-inline mb-0">
	        <li class="list-inline-item mr-3">
				  	<?php $fb = get_field('facebook', 'option'); if( $fb ): ?>

						<a href="<?php echo $fb['url']; ?>" target="<?php echo $fb['target']; ?>"> <i class="fa fa-facebook fa-2x fa-fw"></i></a>

					<?php endif; ?>
	        </li>
	        <li class="list-inline-item mr-3">
				  	<?php $tweet = get_field('twitter', 'option'); if( $tweet ): ?>

						<a href="<?php echo $tweet['url']; ?>" target="<?php echo $tweet['target']; ?>"> <i class="fa fa-twitter fa-2x fa-fw"></i></a>

					<?php endif; ?>
	        </li>
	        <li class="list-inline-item">
					<?php $insta = get_field('instagram', 'option'); if( $insta ): ?>

					 <a href="<?php echo $insta['url']; ?>" target="<?php echo $insta['target']; ?>"> <i class="fa fa-instagram fa-2x fa-fw"></i></a>

					<?php endif; ?>
	        </li>
	      </ul>
	    </div>
	  </div>
	</div>
</footer>

<?php wp_footer(); ?>

<script>
	jQuery(function($){
	    $(document).ready(function(){
	        var owl = $(".owl-carousel").owlCarousel({
	            items: 1,
					loop: true,
	            slideSpeed: 900,
	            pagination: true,
					autoHeight:true,
	            // autoplay: true,
	            // autoplayTimeout: 3500,
	            autoplayHoverPause: true,
	            addClassActive: true,
	            singleItem: true,
	        }).data('owlCarousel');

	        $('.owl-item').click(function(){
	            owl.next();
	        })

	        setInterval(function(){
	            owl.next();
	        }, 6000);
	    });
	})
</script>

</body>
</html>
