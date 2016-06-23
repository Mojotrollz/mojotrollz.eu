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
    
    $("#login_form input").not("[type=submit]").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {},
        submitSuccess: function($form, event){            
            system.account_login($('#bt_login_user').val(),$('#bt_login_password').val(),function(data){
                if(data.status){
                    $('.help-block').html("Login successfull.</br>");
                    location.reload(true);
                } else {
                    $('.help-block').html("Login not successfull.</br> User & Password combination wrong.");
                }
            });
            event.preventDefault();
        }
    });
}