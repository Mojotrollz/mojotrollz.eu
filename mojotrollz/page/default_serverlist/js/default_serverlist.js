function init_serverlist(){
    $("#mojotrollz_nav a").click(function(){
        $('#mojotrollz_nav li').each(function(){
            $(this).removeClass('active');});
        $(this).parent().addClass('active');
    });
    
    $("#newserver_form input").not("[type=submit]").jqBootstrapValidation({
        autoAdd: {helpBlocks: false},
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
    
    $(".btn_vote").click(function(){
        $.getJSON('./api.php?call=mojo&action=vote&server='+$(this).attr('server'), function (data) {
                if(data.status){
                    location.reload();
                } else {
                    alert("An Error occurred. Could not vote for Server. You can only vote once per day!");
                }
            });
    });
}