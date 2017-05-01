<?php /* Template Name: Resources */ ?>

<?php get_header(); ?>

    <div class="body-container-wrapper"> 
       <div class="body-container container-fluid"> 
           <div class="row-fluid-wrapper row-depth-1 row-number-1 ">
                <div class="row-fluid ">
                    <div class="span12 widget-span widget-type-header headline" style="" data-widget-type="header" data-x="0" data-w="12">
                        <div class="cell-wrapper layout-widget-wrapper">
                            <span id="hs_cos_wrapper_module_144926613781924138" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_header" style="" data-hs-cos-general-type="widget" data-hs-cos-type="header"><h1>BoardMax Resources</h1></span>
                        </div><!--end layout-widget-wrapper -->
                    </div>
                </div><!--end row-->
            </div>
        <div class="row-fluid-wrapper row-depth-1 row-number-2 ">
            <div class="row-fluid ">
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
        </div>
    </div>

<?php get_footer(); ?>