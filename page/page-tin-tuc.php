<?php
get_header();
get_template_part('sections/breadcum');
?>
<section class="news py-40 primary--background">
  <div class="news__contain container">
      <div class="new__content">
        <div class="row-divide">
          <div class="col-divide-9 col-divide-sm-12 min--height--100vh">
            <div class="news__list row-divide ">
              <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                'posts_per_page' => 12,
                'post_status'=>'publish',
                'orderby' => 'menu_order',
                'order'=> 'DESC',
                'paged'=>$paged
                );
                $query = new WP_Query($args); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                <article class="news__item my-20 col-divide-4 col-divide-md-6 col-divide-sm-12">
                <a href="<?php the_permalink() ?>">
                  <div class="thumbnail_holder">
                    <?php the_post_thumbnail('medium'); ?>
                  </div>
                  <div class="news__item-des row-divide my-6">
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
                  <h4><?php the_title(); ?></h4>
                </a>
                </article>
                <?php endwhile; ?>
                </div>
                <div class="pagination--custom">
                <?php
                $GLOBALS['wp_query']->max_num_pages = $query->max_num_pages;
                the_posts_pagination( array(
                'mid_size' => 3,
                'prev_text' => __( 'Về', 'welsh-womens-aid' ),
                'next_text' => __( 'Tiếp', 'welsh-womens-aid' ),
                ) ); ?>
                </div>
                <?php endif; ?>

          </div>
          <div class="col-divide-3 col-divide-sm-12">
            <?php get_template_part('sections/sidebar') ?>
          </div>
        </div>
      </div>
  </div>
</section>
<?php
get_footer();
 ?>
