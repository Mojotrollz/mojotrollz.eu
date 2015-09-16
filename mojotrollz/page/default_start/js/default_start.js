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
    
    $("#newserver_form input").not("[type=submit]").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {},
        submitSuccess: function($form, event){            
            $.getJSON('./api.php?call=mojo&action=newserver&address='+encodeURIComponent($('#input_server_address').val()), function (data) {
                if(data.status){
                    $('.help-block').html("Registered new Server successfully. Wait for its approval!");
                } else {
                    $('.help-block').html("An Error occurred. Could not register new Server.");
                }
            });
            event.preventDefault();
        }
    });
}