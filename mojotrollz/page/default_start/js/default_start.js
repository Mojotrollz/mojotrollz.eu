function init_start(){
    $("#mojotrollz_nav a").click(function(){
        $('#mojotrollz_nav li').each(function(){
            $(this).removeClass('active');});
        $(this).parent().addClass('active');
    });
}