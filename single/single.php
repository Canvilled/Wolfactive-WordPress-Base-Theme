 <?php
 get_header();
 get_template_part('sections/breadcum');
?>
 <section class="wrapper" id="singlePost">
   <div class="container">
     <div class="row-divide my-40">
       <div class="col-divide-9 col-divide-sm-12">
         <div class="post__contain">
          <?php
       if ( have_posts() ) {
         // Load posts loop.
         while ( have_posts() ) {
           the_post();?>
          <div class="post__item">
           <div class="thumbnail max--height--400"><?php the_post_thumbnail('large') ?></div>
           <div class="post__item-des row-divide myt-20">
             <span class="text--dark post__category">
               <?php
               $categories = get_the_category();
                   if ( ! empty( $categories ) ) {
                     echo esc_html( $categories[0]->name );
                   }
               ?>
             </span>
             <span class="date text--dark"><i class="fal fa-history"></i>&nbsp;<?php echo get_the_date(); ?></span>
           </div>
            <h1 class="title--section text--center my-6"><?php the_title(); ?></h1>
           <div class="post__item-content">
             <span class="date text--dark"><?php gt_set_post_view(); ?></span>
             <?php the_content() ?>
           </div>

         </div>
       <?php }	}	?>
        </div>
       </div>
       <div class="col-divide-3 col-divide-sm-12">
         <?php get_template_part('sections/sidebar') ?>
       </div>
     </div>
   </div>
 </section>
<?php
 get_footer();
?>
