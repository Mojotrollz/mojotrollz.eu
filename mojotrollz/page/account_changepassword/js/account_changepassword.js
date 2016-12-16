function init_account_changepassword(){
    $("#account_menu li").removeClass("active");
    $('#li_account').addClass('active');
    
    $("#changepassword_user_form input").not("[type=submit]").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function (form, event, errors) {},
        submitSuccess: function($form, event){
            system.account_change_password($('#user_password_old').val(),$('#user_password_new2').val(),function (data) {
                if(data.status){
                    $('#changepassword-help-block').html('Changed Password!');
                }else{  // show errors
                    $('#changepassword-help-block').html(data.result ? data.result.message : 'Password change failed!');
                }
            });
            event.preventDefault();
        }
    });
}