<?php 
    remove_filter( 'the_content', 'wpautop' ); // Remove added <p> tags in content sections
    remove_filter( 'the_excerpt', 'wpautop' ); // Remove added <p> tags in excerpt sections
    add_theme_support( 'post-thumbnails' );
    add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

    function add_theme_scripts() {

    	//wp_enqueue_style( 'common_css', get_template_directory_uri() . '/css/public_common.css');
    	wp_enqueue_style( 'jquerymmenu_css', get_template_directory_uri() . '/css/jquery.mmenu.all.min.css');
    	wp_enqueue_style( 'layout_css', get_template_directory_uri() . '/css/layout.min.css', 10);
    	//wp_enqueue_style( 'resources_css', get_template_directory_uri() . '/css/resources-boardmax.min.css');
    	//wp_enqueue_style( 'resources2_css', get_template_directory_uri() . '/css/resources.min.css');
    	wp_enqueue_style( 'streamlink_css', get_template_directory_uri() . '/css/streamlink.min.css', 10);
    	wp_enqueue_style( 'bm_css', get_template_directory_uri() . '/css/boardmax.min.css', 18);

        wp_enqueue_script( 'j_js', get_template_directory_uri() . '/js/jquery-1.7.1.js');
    	//wp_enqueue_script( 'all_js', get_template_directory_uri() . '/js/all.js', array ( 'jquery' ));
    	//wp_enqueue_script( 'interior_js', get_template_directory_uri() . '/js/interior.min.js', array ( 'jquery' ));
    	wp_enqueue_script( 'joh6puv_js', get_template_directory_uri() . '/js/joh6puv.js', array ( 'jquery' ));
    	wp_enqueue_script( 'cookie_js', get_template_directory_uri() . '/js/js.cookie.min.js', array ( 'jquery' ));
    	//wp_enqueue_script( 'public_js', get_template_directory_uri() . '/js/public_common.js', array ( 'jquery' ));
    	//wp_enqueue_script( 'resources_js', get_template_directory_uri() . '/js/resources.min.js', array ( 'jquery' ));
    	wp_enqueue_script( 'v2_js', get_template_directory_uri() . '/js/v2.js', array ( 'jquery' ));
    	//wp_enqueue_script( 'widgets_js', get_template_directory_uri() . '/js/widgets.js', array ( 'jquery' ));
    	wp_enqueue_script( 'sharre_js', get_template_directory_uri() . '/js/jquery.sharrre.min.min.js', array ( 'jquery' ));
    	wp_enqueue_script( 'matchHeight_js', get_template_directory_uri() . '/js/jquery.matchHeight-min.min.js', array ( 'jquery' ));
    	wp_enqueue_script( 'waypoints_js', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array ( 'jquery' ));
    	wp_enqueue_script( 'rannum_js', get_template_directory_uri() . '/js/106419.js', array ( 'jquery' ));    
        wp_enqueue_script( 'mmenu_js', get_template_directory_uri() . '/js/jquery.mmenu.min.all.js', array ( 'jquery' ));
        wp_enqueue_script( 'site_js', get_template_directory_uri() . '/js/site.js', array ( 'jquery','mmenu_js' ));
        
        /* Load for the Wistia Video player */
        if(is_page('strategy')) {
            wp_enqueue_script( 'wistia_js', 'http://fast.wistia.com/assets/external/E-v1.js', array ( 'jquery' ));
        }
        if(is_page('sectors')) {
           // wp_enqueue_script( 'interior_js', get_template_directory_uri() . '/js/interior.min.js', array ( 'jquery' ));
        }
        
    	//wp_enqueue_script( 'collectedforms_js', get_template_directory_uri() . '/js/collectedforms.js', array ( 'jquery' ));

    	if ( is_home() || is_single() ) {
        	wp_enqueue_style( 'blog_css', get_template_directory_uri() . '/css/blog.min.css', 35);
        	wp_enqueue_style( 'blogbmax_css', get_template_directory_uri() . '/css/blog-boardmax.min.css', 40);
    		wp_enqueue_style( 'streamlink_css', get_template_directory_uri() . '/css/streamlink.min.css', 30);
            wp_enqueue_script( 'widgets_js', get_template_directory_uri() . '/js/widgets.js', array ( 'jquery' ));
            wp_enqueue_script( 'blog_js', get_template_directory_uri() . '/js/blog.js', array ( 'jquery' ));
            wp_enqueue_script( 'sharre_js', get_template_directory_uri() . '/js/jquery.sharrre.min.min.js', array ( 'jquery' ));
            wp_enqueue_style( 'social-share-module_css', get_template_directory_uri() . '/css/social-share-module.css', 37);
            //wp_enqueue_script( 'interior_js', get_template_directory_uri() . '/js/interior.min.js', array ( 'jquery' ));
      	}
        if( is_front_page() ) {
      		wp_enqueue_script( 'home_js', get_template_directory_uri() . '/js/home.min.js', array ( 'jquery' ));
      		wp_enqueue_style( 'home_css', get_template_directory_uri() . '/css/home-boardmax.min.css', 20);
      	} else {
            wp_enqueue_script( 'interior_js', get_template_directory_uri() . '/js/interior.min.js', array ( 'jquery' ));
        }

        if(is_page_template( 'page-resources.php' )) {
            wp_enqueue_script( 'resources_js', get_template_directory_uri() . '/js/resources.min.js', array ( 'jquery' ));
            wp_enqueue_style( 'resources_css', get_template_directory_uri() . '/css/resources.min.css', 20);
            wp_enqueue_style( 'resourcesbmax_css', get_template_directory_uri() . '/css/resources-boardmax.min.css', 35);
        }
    }
    add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
    add_filter('nav_menu_css_class' , 'special_nav_class');

    function special_nav_class ($classes, $item) {
        /*if (in_array('current-menu-item', $classes) ){
            $classes[] = 'active';
        }
        if ( 'main-menu' === $args->theme_location ) {
            $classes[] = 'active';
        }*/
        $classes[] = 'active';
        return $classes;
    }

    /** register nav **/
    function register_main_menu() {
      register_nav_menu('main-menu',__( 'Main Menu' ));
    }
    add_action( 'init', 'register_main_menu' );

    /** Add Custom pagination to post/blog pages **/
    function create_blog_pagination() {
        if( is_singular() )
            return;

        global $wp_query;
        if( $wp_query->max_num_pages <= 1 )
            return;

        $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
        $max   = intval( $wp_query->max_num_pages );

        if ( $paged >= 1 )
            $links[] = $paged;

        if ( $paged >= 3 ) {
            $links[] = $paged - 1;
            $links[] = $paged - 2;
        }

        if ( ( $paged + 2 ) <= $max ) {
            $links[] = $paged + 2;
            $links[] = $paged + 1;
        }

        echo '<div class="blog-pagination"><ul>' . "\n";

        if ( get_previous_posts_link() )
            printf( '<li>%s</li>' . "\n", get_previous_posts_link('<span class="icon icon-prev"></span>') );

        if ( ! in_array( 1, $links ) ) {
            $class = 1 == $paged ? ' class="active"' : '';

            printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

            if ( ! in_array( 2, $links ) )
                echo '<li>…</li>';
        }

        sort( $links );
        foreach ( (array) $links as $link ) {
            $class = $paged == $link ? ' class="active"' : '';
            printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
        }

        if ( ! in_array( $max, $links ) ) {
            if ( ! in_array( $max - 1, $links ) )
                echo '<li>…</li>' . "\n";

            $class = $paged == $max ? ' class="active"' : '';
            printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
        }

        if ( get_next_posts_link() )
            printf( '<li>%s</li>' . "\n", get_next_posts_link('<span class="icon icon-next"></span>') );

        echo '</ul></div>' . "\n";
    }

    /** Add Custom classes to certain pages **/
    function custom_class( $classes ) {
        if( is_home() ) {
            $classes[] = 'blog first-page  hs-blog-id-3769631520 hs-blog-listing hs-content-path-boardmax-blog hs-blog-name-boardmax-blog';
        } if ( is_page_template( 'page-resources.php' ) ) {
            $classes[] = 'resources hs-blog-id-3599972094 hs-blog-listing hs-content-path-boardmax-resources hs-blog-name-boardmax-resources';
        } else {
            $classes[] = 'hs-content-id-3833157175 hs-site-page page hs-content-path-boardmax-partners hs-content-name-boardmax-partners';
        }
        return $classes;
    }
    add_filter( 'body_class', 'custom_class' );

    /** Change page title **/
    function wpdocs_theme_name_wp_title( $title, $sep ) {
        if ( is_feed() ) {
            return $title;
        }
         
        global $page, $paged;
     
        // Add the blog name
        $title .= get_bloginfo( 'name', 'display' );
     
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) ) {
            $title .= " $sep $site_description";
        }
     
        // Add a page number if necessary:
        if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
            $title .= " $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
        }
        return $title;
    }
    add_filter( 'wp_title', 'wpdocs_theme_name_wp_title', 10, 2 );

   /** Generate custom search form **/
    function wpdocs_my_search_form( $form ) {
        $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
        <div>
        <input  placeholder="Search" class="searchq" type="text" value="' . get_search_query() . '" name="s" id="s" />
        <input class="searchbtn" type="submit" id="searchsubmit" value="" />
        </div>
        </form>';
     
        return $form;
    }
    add_filter( 'get_search_form', 'wpdocs_my_search_form' );
?>