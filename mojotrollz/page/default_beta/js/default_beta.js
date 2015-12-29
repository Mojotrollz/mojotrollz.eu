function init_beta(){
    $("#btn_beta").click(function(){
        system.load('beta;key.'+$('#input_beta_key').val());
    });
    
    //jqBootstrapValidation        
    $("#register_user_form input").not("[type=submit]").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function (form, event, errors) {},
        submitSuccess: function($form, event){    
                var username = $('#register_username').val();
                var password = $('#user_register_password2').val();
                var register_data = {
                    call: 'mojo',
                    action: 'register',
                    username: username,
                    password: $.sha1(password),
                    email: $('#register_email').val(),
                    wowpassword: $.sha1(username.toUpperCase()+':'+password.toUpperCase()),
                    betakey: $('#beta_key').val()
                }
                $.ajax({
                    dataType: "json",
                    url: './api.php',
                    data: register_data,
                    success: function (data) {
                        if(data.status){ // reload -> user will be loged in
                            location.reload();
                        }else{  // show errors
                            $('.help-block').html(data.result.message);
                        }
                    }
                });

                event.preventDefault();
        }
    });
    
    $("#login_form input").not("[type=submit]").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {},
        submitSuccess: function($form, event){            
            $.get('./api.php?call=account&action=login&username='+$('#bt_login_user').val()+'&password_sha='+$.sha1($('#bt_login_password').val())+'&password_md5='+$.md5($('#bt_login_password').val()), function (data) {
                if(data == 1){
                    $('.help-block').html("Login successfull.</br>");
                    location.reload(true);
                } else {
                    $('.help-block').html("Login not successfull.</br> User & Password combination wrong.")
                }
            });
            event.preventDefault();
        }
    });

    $("#logout_form input").not("[type=submit]").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {},
        submitSuccess: function($form, event){            
            $.get('./api.php?call=account&action=logout', function (data) {
                if(data == 1){
                    $('.help-block').html("Logout successfull.</br>");
                    location.reload(true);
                } else {
                    $('.help-block').html("Logout not successfull.</br>")
                }
            });
            event.preventDefault();
        }
    });
}