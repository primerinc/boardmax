(function($) {

$(document).ready(function() {

    // SCROLLING HEADER
    $('.body-container-wrapper').waypoint(function(direction) {
        if (direction == "down") {
            $("body").addClass("fixed");
        }
        if (direction == "up") {
            $("body").removeClass("fixed");
        }        
    },{ offset: -151 });
    
    // STYLING
    $(".post-text h2, .related-post-item h4").matchHeight({
        byRow: true,
        property: 'height',
        target: null,
        remove: false
    });
    
    // FIRST POST
    var featureImg = $(".post-item:first-child .hs-featured-image").attr("src");
    var bannerImg = $(".post-item:first-child .hs-featured-image").data("banner");
    if (!bannerImg) {
        bannerImg = featureImg;
    }
    $(".post-item:first-child").css({'background-image':'url('+bannerImg+')'});
    
    // FILTERS
    /* view */
    $(".filters-search .list").click(function() {
        $(".post-listing").removeClass("grid");
        $(".post-listing").addClass("list");
        $(".filters-search a").removeClass("active");
        $(this).addClass("active");
        var data_view = $(this).data('view');
        if (data_view)
            Cookies.set(data_view,'list');
        return false;
    });
    $(".filters-search .grid").click(function() {
        $(".post-listing").removeClass("list");
        $(".post-listing").addClass("grid");
        $(".filters-search a").removeClass("active");
        $(this).addClass("active");
        var data_view = $(this).data('view');
        if (data_view)
            Cookies.set(data_view,'grid');
        return false;
    });
    
    /* topics */
    $(".widget-module .filter-link-count").remove();
    $(".widget-type-post_filter a").each(function() {
        var topicValue = $(this).attr("href");
        var topicText = $(this).html();
        var topicSlug = topicValue.split('/').pop();
        var checked = '';
        if (typeof blog_topic_slug !== 'undefined') {
            if (topicSlug == blog_topic_slug) {
                checked = 'SELECTED';            
            }
        }
        
        $(".filters-search select").append("<option value='"+topicValue+"' " + checked+ ">"+topicText+"</option>");
    });
    
    $(".filters-search select").change(function () {
        location.href = $(this).val();
    })
    var data_view = $(".filters-search .list").data('view');
    if (Cookies.get(data_view) == 'list')
        $(".filters-search .list").click();

});

})(jQuery);