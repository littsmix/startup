 <!-- Testimonials -->
<section class="testimonials text-center bg-light">
   <div class="container">
   <h2 class="mb-5"><?php echo "What people are saying..."; ?></h2>

      <div class="row">

         <?php $args = array('post_type' => 'testimonials'); ?>
         <?php $loop = new WP_Query($args); ?>

            <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

               <div class="col-lg-4">
                  <div class="testimonial-item mx-auto mb-5 mb-lg-0">

                     <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid rounded-circle mb-3')); ?>

                     <h5><?php the_title(); ?></h5>
                     <p class="font-weight-light mb-0"><?php the_content(); ?></p>
                  </div>
               </div>

            <?php endwhile; ?>

         <?php endif; ?>
         <?php wp_reset_postdata(); ?>

      </div> <!-- end row -->
   </div> <!-- end container -->
</section>
