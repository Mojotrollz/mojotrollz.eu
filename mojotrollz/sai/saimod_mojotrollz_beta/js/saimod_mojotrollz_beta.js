function init_saimod_mojotrollz_beta(){
    /*$('#btn_gen').click(function(){
        $('#content-wrapper').load('./sai.php?sai_mod=.SAI.saimod_mojotrollz_beta&generate=1',function(){
            init_saimod_mojotrollz_beta();
        });
    });*/
    $('.btn_del').click(function(){
        $.ajax({type :  'GET',
                url  :  './sai.php?sai_mod=.SAI.saimod_mojotrollz_beta&action=del'+
                        '&code='+$(this).attr('_code'),
                success : function(data) {
                    if(data.status){
                        system.load('mojotrollz_beta');
                        system.reload();
                    }else{
                        alert('Problem: '+data);}
                }
        });
    })
}