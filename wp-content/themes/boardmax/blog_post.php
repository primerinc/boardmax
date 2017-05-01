<?php /* Template Name: Blog Post */ ?>

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
            $args = array(
                'post_type'         => 'post',
                'post_status'       => 'publish',
                'posts_per_page'    => 10,
                'orderby'           => 'date'
            );
             query_posts($args . '&paged='. get_query_var('paged')); 
         ?>

        <?php if( have_posts() ): ?>

            <?php while( have_posts() ): the_post(); ?>

            <div id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>

                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(200,220) ); ?></a>

                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                    <span class="meta"><?php author_profile_avatar_link(48); ?> <strong><?php the_time('F jS, Y'); ?></strong> / <strong><?php the_author_link(); ?></strong> / <span class="comments"><?php comments_popup_link(__('0 comments','example'),__('1 comment','example'),__('% comments','example')); ?></span></span>

            <?php the_excerpt(__('Continue reading »','example')); ?>

                </div><!-- /#post-<?php get_the_ID(); ?> -->

            <?php endwhile; ?>

            <div class="navigation">
                <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
            </div><!-- /.navigation -->

        <?php else: ?>

            <div id="post-404" class="noposts">

                <p><?php _e('None found.','example'); ?></p>

            </div><!-- /#post-404 -->

        <?php endif; wp_reset_query(); ?>

    </div>
</div>

<?php get_footer(); ?>