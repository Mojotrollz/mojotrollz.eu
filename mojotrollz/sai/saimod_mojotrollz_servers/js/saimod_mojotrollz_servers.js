function init_saimod_mojotrollz_servers() {
    register_server_edit();
};

function register_server_edit(){
    $('.btn_server_edit').click(function(){
        $('#input_id').html($(this).attr('_id'));
        $('#input_name').val($(this).attr('_name'));
        $('#input_url').val($(this).attr('_url'));
        $('#input_version').val($(this).attr('_version'));
        $('#input_description').val($(this).attr('_description'));
        $("#btn_server_save").focus();
    });
}