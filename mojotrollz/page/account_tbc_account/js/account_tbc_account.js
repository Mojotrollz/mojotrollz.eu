function init_account_tbc_account(){
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
}