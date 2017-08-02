function init_register(){
    //jqBootstrapValidation        
    $("#register_user_form input").not("[type=submit]").jqBootstrapValidation({
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
                    action: 'register',
                    username: username,
                    password_sha1: $.sha1(password),
                    email: $('#register_email').val(),
                    wow_password: $.sha1(username.toUpperCase()+':'+password.toUpperCase()),
                },
                success: function (data) {
                    if(data.status){ // reload -> user will be loged in
                        system.load('beta');
                    }else{  // show errors
                        $('.help-block').html(data.result.message);
                    }
                }
            });
            event.preventDefault();
        }
    });
}