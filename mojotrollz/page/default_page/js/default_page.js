$(document).ready(function() {
    new SYSTEM('./api.php',1,'start');
    //SYSTEM.back();
    
    $('.flexslider').flexslider({
        animation: "slide",
        controlNav: false,
        slideshow: true,
        animationLoop: true,
    });
});