function init_saimod_mojotrollz_npc_vendor_template(){
    $('.btn_comment').click(function(){
        entry = $(this).attr('entry');
        $.ajax({    type :'POST',
                    url  : './sai.php?sai_mod=.SAI.saimod_mojotrollz_npc_vendor_template&action=comment',
                    data : {    entry: entry,
                                comment: $('#input_comment_'+entry).val()},
                    success : function(data) {
                        if(data.status){
                            system.reload();
                        }else{
                            alert('Problem: '+data);}
                    }
        });
    });
    
    $('#btn_search').click(function(){
        search = {  entry: $('#input_search_entry').val(),
                    items: $('#input_search_items').val(),
                    comments: $('#input_search_comments').val()}
        system.load('mojotrollz_npc_vendor_template;search.'+JSON.stringify(search),true);
    });
}

function init_saimod_mojotrollz_npc_vendor_template_vendor(){
    $('#btn_search').click(function(){
        entry = $(this).attr('entry');
        search = {  item: $('#input_search_item').val(),
                    maxcount: $('#input_search_maxcount').val(),
                    incrtime: $('#input_search_incrtime').val(),
                    extendedcost: $('#input_search_extendedcost').val(),
                    condition_id: $('#input_search_condition_id').val()}
        system.load('mojotrollz_npc_vendor_template_vendor;entry.'+entry+';search.'+JSON.stringify(search),true);
    });
}