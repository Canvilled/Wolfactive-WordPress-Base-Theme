    <section class="footer">
	    <!----------=========Main==========-------->
	  <div class="footer__main main--background">
      <div class="container">

    	</div>
    	<div class="footer__container container">
    		<div class="footer__list row-divide">
    			<div class="footer__item divide--5-col">
    					<a class="footer__brand d--block" href="<?php echo home_url() ?>">
                <?php
                 $custom_logo_id = get_theme_mod( 'custom_logo' );
                 $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
    						<img src="<?php echo $image[0];  ?>" class="logo" alt="logo-nha-pho-sai-gon">
    					</a>
    			</div>
    			<p class="footer__item divide--5-col">
    				<?php echo get_theme_mod('company_name'); ?>
    			</p>
    			<p class="footer__item divide--5-col">
    				<i class="fas fa-map-marker-alt"></i>&nbsp;<?php echo get_theme_mod('company_address'); ?>
    			</p>
    			<p class="footer__item divide--5-col">
    				<i class="fal fa-mobile-android"></i>&nbsp;<?php echo get_theme_mod('company_phone'); ?>
    			</p>
    			<p class="footer__item divide--5-col">
    				<i class="fal fa-envelope"></i>&nbsp;<?php echo get_theme_mod('company_email'); ?>
    			</p>
    		</div>
    	</div>
	  </div>
	    <!----------=========Main==========-------->

		<!----------=========Sub==========-------->
	  <div class="footer__sub">
	    <div class="container"><p class="text--center">All Right Reserved.</p></div>
	  </div>
	    <!----------=========Sub==========-------->
 </section>
 <script type='text/javascript' src="<?php echo get_theme_file_uri('assets/js/main.min.js') ?>"></script>
 <?php wp_footer(); ?>
 </body>
</html>
