<!-- Masthead -->
<section class="masthead text-white text-center" style="background-image: url(<?php the_sub_field( 'image' ); ?>)">
   <div class="overlay"></div>
   <div class="container">
     <div class="row">
       <div class="col-xl-9 mx-auto">
         <h1 class="mb-5"><?php the_sub_field( 'title' ); ?></h1>
       </div>
       <div class="col-xl-9 mx-auto">
         <p class="lead"><?php the_sub_field( 'desc' ); ?></p>
       </div>
       <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <?php $btn = get_sub_field('button');

            if( $btn ): ?>

         	<a class="btn btn-primary" href="<?php echo $btn['url']; ?>" target="<?php echo $btn['target']; ?>"><?php echo $btn['title']; ?></a>

         <?php endif; ?>
       </div>

     </div>
   </div>
</section>
