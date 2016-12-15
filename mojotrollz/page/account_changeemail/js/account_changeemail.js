function init_account_changeemail(){
    $("#account_menu li").removeClass("active");
    $('#li_account').addClass('active');
    
    $("#changeemail_user_form input").not("[type=submit]").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function (form, event, errors) {},
        submitSuccess: function($form, event){    
            $.ajax({
                dataType: "json",
                url: './api.php',
                data: {
                    call: 'account',
                    action: 'changeemail',
                    new_email: $('#user_email_new').val(),
                },
                success: function (data) {
                    if(data.status){ // reload -> user will be loged in
                        $('#changeemail-help-block').html('EMail sent!');
                    }else{  // show errors
                        $('#changeemail-help-block').html(data.result ? data.result.message : 'Sending EMail failed!');
                    }
                }
            });
            event.preventDefault();
        }
    });
}