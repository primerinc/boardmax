<?php /* Template Name: Single */ ?>

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
        <div class="row-fluid-wrapper row-depth-1 row-number-2 ">
            <div class="row-fluid ">
            <div class="span12 widget-span widget-type-cell cos_one_column" style="" data-widget-type="cell" data-x="0" data-w="12">

            <div class="row-fluid-wrapper row-depth-1 row-number-4 ">
                <div class="row-fluid ">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="span12 widget-span widget-type-blog_content " style="" data-widget-type="blog_content" data-x="0" data-w="12">
                        <div class="blog-section">
                            <div class="blog-post-wrapper cell-wrapper">
                                <?php endwhile; ?>
                                <div class="section post-header" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat center center; background-size: cover;">
                                    <div class="content">
                                        <div class="inner">
                                            <h1><span id="hs_cos_wrapper_name" class="hs_cos_wrapper hs_cos_wrapper_meta_field hs_cos_wrapper_type_text" style="" data-hs-cos-general-type="meta_field" data-hs-cos-type="text"><?php the_title(); ?></span></h1>
                                            <div class="meta-social">
                                                <div class="post-meta">
                                                    <p>By <a class="author-link" href="<?php get_the_author_link(); ?>"><?php echo get_the_author() ?></a> on <?php echo get_the_date(); ?></p>
                                                </div>
                                                <!-- <span id="hs_cos_wrapper_blog_social_sharing" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_custom_widget" style="" data-hs-cos-general-type="widget" data-hs-cos-type="custom_widget">
                                                    <div class="sharebar">
                                                        <div class="sharrre" data-via="" data-url="<?php global $post; echo $post->post_name; ?>" data-text="What Your Board Wants: Three Keys to Improved Engagement" data-title="share" data-facebook="true" data-twitter="true" data-googleplus="true" data-linkedin="true" data-pinterest="true" data-email="true"><a href="#" class="facebook"><i class="fa fa-facebook"></i><span>{count-facebook}</span></a><a href="#" class="twitter"><i class="fa fa-twitter"></i><span>{count-twitter}</span></a><a href="#" class="googlePlus"><i class="fa fa-google-plus"></i><span>{count-googlePlus}</span></a><a href="#" class="linkedin"><i class="fa fa-linkedin"></i><span>{count-linkedin}</span></a><a href="#" class="pinterest"><i class="fa fa-pinterest"></i><span>{count-pinterest}</span></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></div>  
                                                    </div>
                                                </span> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="section post-body">
                                    <div class="content">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div><!--end row-->
            </div><!--end row-wrapper -->

            <div class="row-fluid-wrapper row-depth-1 row-number-5 ">
            <div class="row-fluid ">
            <div class="span12 widget-span widget-type-raw_jinja popular-related" style="" data-widget-type="raw_jinja" data-x="0" data-w="12">

            <div class="content">
                <h3>Popular Related Posts</h3>
                
                <div class="related-posts">
                <?php 
                    $args = array(
                        'limit' => 3,
                        'posts_per_page'=>3,
                        'thumbnail_width' => 275,
                        'thumbnail_height' => 175,
                        'post_html' => '<div class="related-post-item"><div class="related-image">{thumb}</div><div class="text"><div class="post-meta">By <a class="author-link">BoardMax</a> on {date}</div><h4 style="height: 68px;"><a href="{url}">{text_title}</a></h4><a href="{url}" class="more-link"><span>&gt;</span> Read More</a></div></div>'
                    );

                    wpp_get_mostpopular($args); 
                ?>
                   
                </div>
            </div>
             </div><!--end widget-span -->

            </div><!--end row-->
            </div><!--end row-wrapper -->


            <div class="row-fluid-wrapper row-depth-1 row-number-7 ">
            <div class="row-fluid ">
            <div class="span12 widget-span widget-type-post_filter " style="display: none;" data-widget-type="post_filter" data-x="0" data-w="12">
            
            </div><!--end widget-span -->
            </div><!--end row-->
            </div><!--end row-wrapper -->

            </div><!--end widget-span -->
            </div><!--end row-->
            </div>
        
    </div>
</div>

<?php get_footer(); ?>