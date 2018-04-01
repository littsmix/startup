<!-- Slider -->
<section class="masthead text-white text-center">
   <div class="overlay"></div>
   <div class="container-fluid">
     <div class="row">

         <div id="owl-demo" class="owl-carousel owl-theme">
            <?php
               $images = get_field('slider');
               foreach ($images as $image):?>
               <div class="item">
                  <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <div class="slide-content">
                     <h1><?php echo $image['title'];?></h1>
                  </div>
               </div>
            <?php endforeach;?>
         </div>

     </div>
   </div>
</section>
