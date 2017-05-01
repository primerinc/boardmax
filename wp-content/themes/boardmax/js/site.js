(function($) {

$(document).ready(function() {
    
    // HEADER
    $(".courtesy-area .contact li:first-child + li").click(function(e) {
        $(this).toggleClass('hover');
        $(".contact .dropdown").fadeToggle(200);
        //e.preventDefault();
    });
    
    $("#my-menu .buttons a.login").toggle(
        function() {
            $("#my-menu .mm-login").fadeIn(300);
        }, function() {
            $("#my-menu .mm-login").fadeOut(300);
        }
    );    
    $(".courtesy-area .links li:first-child + li > a").toggle(
        function() {
            $(".courtesy-area .hs_cos_wrapper_type_form").fadeIn(300);
        }, function() {
            $(".courtesy-area .hs_cos_wrapper_type_form").fadeOut(300);
        }
    );
    
    closeform = function() {
        $(".courtesy-area .hs_cos_wrapper_type_form").fadeOut(300);
    }
    $('.header-form-close').on('click',function(){ closeform(); });
    
    $(".selector > a").click(function() {
        $(this).toggleClass('hover');
        $(".header-container .dropdown").fadeToggle(300);
    });

    // SEARCH
    $('.searchbox .searchbtn').click(function(){
        var q=$(this).parent().find('.searchq').val()
        var pre = ''
        if ($('body').hasClass('amplifund'))
            pre = '/amplifund';
        if ($('body').hasClass('boardmax'))
            pre = '/boardmax';    
        location.href = pre + '/search-results?q='+encodeURI(q);
    });
    $('.searchbox .searchq').keyup(function(event){
        if(event.keyCode == 13){
            var pre = ''
            if ($('body').hasClass('amplifund'))
                pre = '/amplifund';
            if ($('body').hasClass('boardmax'))
                pre = '/boardmax';    
            var q=$(this).val();
            location.href = pre + '/search-results?q='+encodeURI(q);
        }
    });

});

})(jQuery);


$(window).load(function() {
    // MOBILE NAV
    $('div.header-container-wrapper, div.body-container-wrapper,div.footer-container-wrapper').find('script').remove();
    
    $('body').prepend('<div id="mm-container" />')
    $('div.header-container-wrapper, div.body-container-wrapper,div.footer-container-wrapper').prependTo('#mm-container'); 
    
    $("#my-menu").mmenu({
           "slidingSubmenus": false,
           "navbar" : { "add": false },
            offCanvas: { position: 'right' },
        } , 
        { 
            offCanvas: { pageNodetype: 'div', pageSelector: '#mm-container' } 
        }
    );
    var menu_api = $("#my-menu").data( "mmenu" );
    
    $("#my-menu ul").addClass("mm-nolistview");

});