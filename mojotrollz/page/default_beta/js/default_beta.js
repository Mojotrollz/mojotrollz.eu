function init_beta(){
    $("#btn_beta").click(function(){
        system.load('beta;key.'+$('#input_beta_key').val());
    });
    
    //jqBootstrapValidation        
    $("#register_user_form input").not("[type=submit]").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function (form, event, errors) {},
        submitSuccess: function($form, event){    
                var username = document.getElementById('register_username').value;
                var email    = document.getElementById('register_email').value;
                var password = document.getElementById('user_register_password2').value;                              
                
                $.ajax({
                    dataType: "json",
                    url: './api.php?call=beta&action=register&username='+username+'&password='+$.sha1(password)+'&email='+email,
                    data: null,
                    success: function (dataCreate) {                        
                        if(dataCreate === 1){ // reload -> user will be loged in
                            location.reload();
                        }else{  // show errors
                            alert('Not successfull: '+dataCreate);
                        }
                    }
                });

                event.preventDefault();
        }
    });
}