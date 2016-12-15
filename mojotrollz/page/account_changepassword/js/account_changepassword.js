function init_account_changepassword(){
    $("#account_menu li").removeClass("active");
    $('#li_account').addClass('active');
    
    $("#changepassword_user_form input").not("[type=submit]").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function (form, event, errors) {},
        submitSuccess: function($form, event){    
            var password_old = $('#user_password_old').val();
            var password_new = $('#user_password_new2').val();
            $.ajax({
                dataType: "json",
                url: './api.php',
                data: {
                    call: 'account',
                    action: 'changepassword',
                    old_password_sha1: $.sha1(password_old),
                    new_password_sha1: $.sha1(password_new),
                },
                success: function (data) {
                    if(data.status){ // reload -> user will be loged in
                        $('#changepassword-help-block').html('Changed Password!');
                    }else{  // show errors
                        $('#changepassword-help-block').html(data.result ? data.result.message : 'Password change failed!');
                    }
                }
            });
            event.preventDefault();
        }
    });
}