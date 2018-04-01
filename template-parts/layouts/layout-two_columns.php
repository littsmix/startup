<?php global $layout_section; ?>
 <!-- Icons Grid -->
<section class="showcase">
   <div class="container-fluid p-0">

      <?php if( have_rows('column') ):
            while( have_rows('column') ): the_row();
      ?>

            <div class="row no-gutters">

            <?php if( get_row_layout('flex_column') ):                  
               	// vars
               	$title = get_sub_field('title');
               	$desc = get_sub_field('desc');
                  $btn = get_sub_field('button');
            ?>

               <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('<?php the_sub_field('image'); ?>');"></div>

               <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                  <h2><?php echo $title; ?></h2>
                  <p class="lead mb-0"><?php echo $desc; ?></p>
               </div>

            <?php endif; ?>

         </div>

         <?php endwhile; ?>


      <?php endif; ?>


   </div>
 </section>
