<!-- Call to Action -->
<section class="call-to-action text-white text-center" style="background-image: url(<?php the_field( 'bg_image', 'option' ); ?>)">
   <div class="overlay"></div>
   <div class="container">
     <div class="row">
       <div class="col-xl-9 mx-auto">
         <h2 class="mb-4"><?php the_field('cta_title', 'option'); ?></h2>
       </div>
       <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
         <?php the_field('sign_up', 'option'); ?>
       </div>
     </div>
   </div>
</section>
