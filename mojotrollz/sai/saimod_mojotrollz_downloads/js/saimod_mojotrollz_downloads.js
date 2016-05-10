function init_saimod_mojotrollz_downloads() {
    register_download_edit();
    register_download_del();
    register_download_save();
};

function register_download_edit(){
    $('.btn_download_edit').click(function(){
        $('#input_id').val($(this).attr('_id'));
        $('#input_link').val($(this).attr('_link'));
        $('#input_img').val($(this).attr('_img'));
        $('#input_text').val($(this).attr('_text'));
        $('#input_subtext').val($(this).attr('_subtext'));
        $("#btn_download_save").focus();
    });
}

function register_download_del(){
    $('.btn_download_del').click(function(){
        if (confirm("Delete Download Permanently?") === true) {
            $.ajax({    type :'GET',
                        url  : './sai.php?sai_mod=.SAI.saimod_mojotrollz_downloads&action=del'+
                                '&id='+$(this).attr('_id'),
                        success : function(data) {
                            if(data.status){
                                system.reload();
                            }else{
                                alert('Problem: '+data);}
                        }
            });
        }
    });
}

function register_download_save(){
    $('#btn_download_save').click(function() {
        var id = $('#input_id').val();
        var link = $('#input_link').val();
        var img = $('#input_img').val();
        var text = $('#input_text').val();
        var subtext = $('#input_subtext').val();
        $.ajax({url: './sai.php',
                data: { sai_mod: '.SAI.saimod_mojotrollz_downloads',
                        action: 'save',
                        id: id,
                        link: link,
                        img: img,
                        text: text,
                        subtext: subtext},
                type: 'GET',
                success: function(data) {
                    if(data.status){
                        system.reload();
                    }else{
                        alert('Problem: '+data);}
                }
        });
    });
}