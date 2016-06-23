function init_account_website(){
    $('#link_confirm_email').click(function(){
        system.account_confirm_email($(this).attr('user'),function (data) {
            if(data.status){
                $('#notice_email_confirm').html("EMail sent");
            } else {
                $('#notice_email_confirm').html("An Error occurred.");
            }
            $('#notice_email_confirm').show();
        });
    });
    
    $("#account_menu li").removeClass("active");
    $('#li_account').addClass('active');
}