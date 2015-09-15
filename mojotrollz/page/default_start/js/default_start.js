function init_start(){
    $('.flexslider').flexslider({
        animation: "slide",
        controlNav: false,
        slideshow: true,
        animationLoop: true,
    });
    $("#mojotrollz_nav a").click(function(){
        $('#mojotrollz_nav li').each(function(){
            $(this).removeClass('active');});
        $(this).parent().addClass('active');
    });
}