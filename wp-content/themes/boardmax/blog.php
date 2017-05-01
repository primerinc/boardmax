<?php /* Template Name: Blog */ ?>

<?php get_header(); ?>

<div class="body-container-wrapper"> 
   <div class="body-container container-fluid"> 
   <div class="row-fluid-wrapper row-depth-1 row-number-1 ">
        <div class="row-fluid ">
        <div class="span12 widget-span widget-type-blog_subscribe subscribe" style="" data-widget-type="blog_subscribe" data-x="0" data-w="12">
        <div class="cell-wrapper layout-widget-wrapper">
        <span id="hs_cos_wrapper_module_14492278348823504" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_blog_subscribe" style="" data-hs-cos-general-type="widget" data-hs-cos-type="blog_subscribe"><h3 id="hs_cos_wrapper_module_14492278348823504_title" class="hs_cos_wrapper form-title" data-hs-cos-general-type="widget_field" data-hs-cos-type="text">Subscribe to the BoardMax Blog</h3>

        <div id="hs_form_target_module_14492278348823504"></div>

          
         


        </span></div><!--end layout-widget-wrapper -->
        </div><!--end widget-span -->
        </div><!--end row-->
        </div>
	<?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
</div>
</div>

<?php get_footer(); ?>