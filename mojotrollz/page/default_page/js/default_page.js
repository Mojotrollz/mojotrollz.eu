$(document).ready(function() {
    new SYSTEM('./api.php',1,'start');
    tabs();
    search();
});

function search(){
    $("#nav_search_btn").click(function(){
        system.load('search;param.'+$('#nav_search').val());
    });
    $(document).keypress(function(e) {
        var hasFocus = $('#nav_search').is(':focus');
        if(e.which === 13 && hasFocus) {
            system.load('search;param.'+$('#nav_search').val());
        }
    });
}

function tabs(){
    $("#tabs_user_list a").click(function(){
        $('#tabs_user_list li').each(function(){
            $(this).removeClass('active');});
        $(this).parent().addClass('active');
    });   
}