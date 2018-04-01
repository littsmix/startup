<?php global $layout_section; ?>
 <!-- Icons Grid -->
 <section class="features-icons bg-light text-center">
   <div class="container">
     <div class="row">

         <?php if( have_rows('column') ): ?>

         <?php while( have_rows('column') ): the_row();

         	// vars
         	$title = get_sub_field('title');
         	$desc = get_sub_field('desc');
            $btn = get_sub_field('button');

         	?>

            <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">

               <div class="features-icons-icon d-flex">
                  <i class="m-auto text-primary">
                     <?php echo file_get_contents( get_sub_field( 'image_or_icon', 'options' ) ); ?>
                  </i>
               </div>

               <h3><?php echo $title; ?></h3>
               <p class="lead mb-0"><?php echo $desc; ?></p>
               <br />

               <?php if( $btn ): ?>
                  <a class="btn btn-primary" href="<?php echo $btn['url']; ?>" target="<?php echo $btn['target']; ?>"><?php echo $btn['title']; ?></a>
               <?php endif; ?>

            </div>
            </div>

         <?php endwhile; ?>

         <?php endif; ?>

     </div>
   </div>
 </section>
