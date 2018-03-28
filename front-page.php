<?php
/*
   Template Name: Front page
*/
$hero_title         = get_field('hero_title');
$hero_form          = get_field('hero_form');
?>

<?php get_header() ?>


 <!-- Masthead -->
 <section class="masthead text-white text-center" style="background-image:url(<?php the_field('background_image'); ?>);">
   <div class="overlay"></div>
   <div class="container">
     <div class="row">
       <div class="col-xl-9 mx-auto">
         <h1 class="mb-5"><?php echo $hero_title ?></h1>
       </div>
       <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
         <?php echo $hero_form; ?>
       </div>
     </div>
   </div>
 </section>

 <section class="features-icons bg-light text-center">
   <div class="container">
     <div class="row">

         <?php while(the_flexible_field("icons")): ?>

      	     <?php if(get_row_layout() == "column_1"): // column ?>
               <div class="col-lg-4">
                  <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                     <div class="features-icons-icon d-flex">
                       <i class="icon-screen-desktop m-auto text-primary"></i>
                     </div>
                     <h3><?php the_sub_field('title'); ?></h3>
                     <p class="lead mb-0"><?php the_sub_field('desc') ?></p>
                  </div>
               </div>

               <?php elseif(get_row_layout() == "column_2"): // column ?>
               <div class="col-lg-4">
                  <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                     <div class="features-icons-icon d-flex">
                       <i class="icon-layers m-auto text-primary"></i>
                     </div>
                     <h3><?php the_sub_field('title'); ?></h3>
                     <p class="lead mb-0"><?php the_sub_field('desc') ?></p>
                  </div>
               </div>

               <?php elseif(get_row_layout() == "column_3"): // column ?>
               <div class="col-lg-4">
                  <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                     <div class="features-icons-icon d-flex">
                       <i class="icon-check m-auto text-primary"></i>
                     </div>
                     <h3><?php the_sub_field('title'); ?></h3>
                     <p class="lead mb-0"><?php the_sub_field('desc') ?></p>
                  </div>
               </div>

         	<?php endif; ?>
         <?php endwhile; ?>
    </div>
   </div>
</section>

<!-- Image Showcases -->
<section class="showcase">
<div class="container-fluid p-0">

     <?php while(the_flexible_field("works")): ?>

          <?php if(get_row_layout() == "row_1"): // column ?>

            <div class="row no-gutters">
              <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url(<?php the_sub_field('image'); ?>); ?>;"></div>
              <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2><?php the_sub_field('title') ?></h2>
                <p class="lead mb-0"><?php the_sub_field('details') ?></p>
              </div>
            </div>

          <?php elseif(get_row_layout() == "row_2"): // column ?>

             <div class="row no-gutters">
               <div class="col-lg-6 text-white showcase-img" style="background-image: url(<?php the_sub_field('image'); ?>); ?>;"></div>
               <div class="col-lg-6 my-auto showcase-text">
                 <h2><?php the_sub_field('title') ?></h2>
                 <p class="lead mb-0"><?php the_sub_field('details') ?></p>
               </div>
             </div>

          <?php elseif(get_row_layout() == "row_3"): // column ?>

             <div class="row no-gutters">
               <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url(<?php the_sub_field('image'); ?>); ?>;"></div>
               <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                 <h2><?php the_sub_field('title') ?></h2>
                 <p class="lead mb-0"><?php the_sub_field('details') ?></p>
               </div>
             </div>

        <?php endif; ?>
     <?php endwhile; ?>
</div>
</section>


<!-- Testimonials -->
 <section class="testimonials text-center bg-light">
   <div class="container">
     <h2 class="mb-5">What people are saying...</h2>


      <div class="row">

         <ul id="owl-demo" class="owl-carousel owl-theme">
         	<?php $images = get_field('slider');
         	foreach ($images as $image):?>
         		<li>
         			<img class="slide" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
         			<div class="slide-content">
         				<?php echo $image['title'];?>
         			</div>
         		</li>
         	<?php endforeach;?>
         </ul>

      </div>
 
    </div>
</section>




<?php get_footer() ?>
