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
    
    $('#btn_add').click(function() {
        var entry = $('#input_entry').val();
        var item = $('#input_item').val();
        var maxcount = $('#input_maxcount').val();
        var incrtime = $('#input_incrtime').val();
        var extendedcost = $('#input_extendedcost').val();
        var condition_id = $('#input_condition_id').val();
        $.ajax({url: './sai.php',
                data: { sai_mod: '.SAI.saimod_mojotrollz_npc_vendor_template',
                        action: 'add',
                        entry: entry,
                        item: item,
                        maxcount: maxcount,
                        incrtime: incrtime,
                        extendedcost: extendedcost,
                        condition_id: condition_id},
                type: 'GET',
                success: function(data) {
                    if(data.status){
                        system.reload()
                    }else{
                        alert('Problem: '+data);}
                }
        });
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
    
    $('.btn_del').click(function(){
        $.ajax({    type :'GET',
                    url  : './sai.php?sai_mod=.SAI.saimod_mojotrollz_npc_vendor_template&action=del'+
                            '&entry='+$(this).attr('_entry')+
                            '&item='+$(this).attr('_item'),
                    success : function(data) {
                        if(data.status){
                            system.reload()
                        }else{
                            alert('Problem: '+data);}
                    }
        });
    });
    
    $('.btn_edit').click(function(){
        $('#input_entry').val($(this).attr('_entry'));
        $('#input_item').val($(this).attr('_item'));
        $('#input_maxcount').val($(this).attr('_maxcount'));
        $('#input_incrtime').val($(this).attr('_incrtime'));
        $('#input_extendedcost').val($(this).attr('_extendedcost'));
        $('#input_condition_id').val($(this).attr('_condition_id')); 
        $("#btn_add").focus();
    });
    
    $('#btn_add').click(function() {
        var entry = $(this).attr('_entry');
        var item = $('#input_item').val();
        var maxcount = $('#input_maxcount').val();
        var incrtime = $('#input_incrtime').val();
        var extendedcost = $('#input_extendedcost').val();
        var condition_id = $('#input_condition_id').val();
        $.ajax({url: './sai.php',
                data: { sai_mod: '.SAI.saimod_mojotrollz_npc_vendor_template',
                        action: 'add',
                        entry: entry,
                        item: item,
                        maxcount: maxcount,
                        incrtime: incrtime,
                        extendedcost: extendedcost,
                        condition_id: condition_id},
                type: 'GET',
                success: function(data) {
                    if(data.status){
                        system.reload()
                    }else{
                        alert('Problem: '+data);}
                }
        });
    });
    
    wow_tooltips();
}