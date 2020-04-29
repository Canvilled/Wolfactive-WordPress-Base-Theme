<?php
get_header();
get_template_part('sections/breadcum');
?>
<section class="contact py-40 primary--background">
  <div class="contact__contain container">
    <div class="row-divide">
      <div class="col-divide-6 col-divide-md-12 align--self--center">
        <div class="contact__content">
          <div class="contact__content-title title--item">
            <?php echo get_theme_mod('company_name'); ?>
          </div>
          <div class="contact__content-item my-6">
            <i class="fas fa-map-marker-alt"></i>&nbsp;<?php echo get_theme_mod('company_address'); ?>
          </div>
          <div class="contact__content-item my-6">
            <i class="fal fa-mobile-android"></i>&nbsp;<?php echo get_theme_mod('company_phone'); ?>
          </div>
          <div class="contact__content-item my-6">
            <i class="fal fa-envelope"></i>&nbsp;<?php echo get_theme_mod('company_email'); ?>
          </div>
          <div class="contact__content-item my-6 text--center">
            <?php
             $custom_logo_id = get_theme_mod( 'custom_logo' );
             $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
            <img src="<?php echo $image[0];  ?>" class="logo--contact" alt="logo-nha-pho-sai-gon">
          </div>
        </div>
      </div>
      <div class="col-divide-6 col-divide-md-12">
        <?php the_field('map_company','option') ?>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
 ?>
