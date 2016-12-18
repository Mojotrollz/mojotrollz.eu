function init_account_tbc_changepassword(){
    $("#account_menu li").removeClass("active");
    $('#li_account').addClass('active');
    
    $("#changepassword_user_form input").not("[type=submit]").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function (form, event, errors) {},
        submitSuccess: function($form, event){
            var account = $('#changepassword_user_form').attr('account');
            var password_old =$('#user_password_old').val();
            var password_new =$('#user_password_new2').val();
            var old_password = $.sha1(account.toUpperCase()+':'+password_old.toUpperCase())
            var new_password = $.sha1(account.toUpperCase()+':'+password_new.toUpperCase())
            $.ajax({
                    async: true,
                    url: './api.php',
                    type: 'GET',
                    dataType: 'JSON',
                    data: {
                        call: 'account',
                        action: 'change_password_wow',
                        account: account,
                        old_wow_password_sha1: old_password,
                        new_wow_password_sha1: new_password
                    },
                    success: function(data){
                        if(data.status){
                            $('#changepassword-help-block').html('Changed Password.');
                        } else {
                            $('#changepassword-help-block').html('Could not change Password.');
                        }
                    }
            });
            event.preventDefault();
        }
    });
}