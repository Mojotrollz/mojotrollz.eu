function init_start(){
    $('.flexslider').flexslider({
        animation: "slide",
        controlNav: false,
        slideshow: true,
        animationLoop: true,
        start:function(slider){
            //HIDE THE ARROWS BY DEFAULT...
            $('.flex-direction-nav').css({visibility:'hidden'});

            //THEN INSERT YOUR CUSTOM JQUERY CLICK ACTIONS TO REVEAL THEM AGAIN
            /*slider.find('a').on('click',function(){
                $('.flex-direction-nav').css({visibility:'visible'});
            });*/
        }//end start function
    });
    $("#mojotrollz_nav a").click(function(){
        $('#mojotrollz_nav li').each(function(){
            $(this).removeClass('active');});
        $(this).parent().addClass('active');
    });
}