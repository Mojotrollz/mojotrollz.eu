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
}