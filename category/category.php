 <?php
 get_header();
?>
   <section class="wrapper" id="PostCategory">
   <div class="carousel">
     <?php echo do_shortcode('[rev_slider alias="home-slider"]'); ?>
    </div>
     <div class="container">
         <div class="breadcumb my-20">
            <div class="breadcumb__title title--section text--upcase text--center"><?php single_cat_title() ?></div>
            <div class="title--underline"></div>
         </div>
       <div class="Category__contain row-divide">
         <?php
                        while (have_posts()) : the_post(); ?>
                            <div class="Post col-divide-4 col-divide-md-6 col-divide-sm-6">
                                <div class="Post__img"> <a href=" <?php the_permalink() ?> " class="Post__img-link"> <?php the_post_thumbnail('thumbnail') ?></a></div>
                                <div class="Post_content">
                                    <div class="Post__title title--item"><a class="Post__title-link" href=" <?php the_permalink() ?> "> <?php the_title() ?> </a></div>
                                    <div class="Post__date date font--weight--600"><i class="fa fa-calendar"></i> <?php the_date('l j F , Y') ?> </div>
                                    <div class="Post_excerpt"> <?php the_excerpt() ?> </div>
                                </div>
                            </div>

           <?php endwhile;  ?>
    </div>
    <div class="Category__pagination">
      <?php the_posts_pagination()  ?>
    </div>
     </div>
    <?php
     get_template_part('sections/new-popular');
    ?>
 </section>
<?php
 get_footer();
?>
