function init_account_tbc_new(){
    $("#account_menu li").removeClass("active");
    $('#li_tbc').addClass('active');
    
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
    
    $("#register_tbc_form input").not("[type=submit]").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function (form, event, errors) {},
        submitSuccess: function($form, event){    
            var username = $('#register_username').val();
            var password = $('#user_register_password2').val();
            $.ajax({
                dataType: "json",
                url: './api.php',
                data: {
                    call: 'account',
                    action: 'create_wow',
                    username: username,
                    wow_password: $.sha1(username.toUpperCase()+':'+password.toUpperCase()),
                },
                success: function (data) {
                    if(data.status){ // reload -> user will be loged in
                        $('#help_block_tbc_register').html('Account registered!');
                    }else{  // show errors
                        $('#help_block_tbc_register').html(data.result.message);
                    }
                }
            });
            event.preventDefault();
        }
    });
}