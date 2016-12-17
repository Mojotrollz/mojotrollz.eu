function init_resetpassword(){
    $('#btn_resetpassword').click(function(){
        system.account_reset_password($('#input_resetpassword').val(),function(data){
            if(data.status){
                $('.help-block').html('EMail sent.');
            } else {
                $('.help-block').html(data.result.message);
            }
        });
    });
}