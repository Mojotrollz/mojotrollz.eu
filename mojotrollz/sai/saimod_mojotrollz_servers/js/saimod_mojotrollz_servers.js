function init_saimod_mojotrollz_servers(){
    {
        $('#tabs a').click(function () {
            $('#tabs li a').each(function(){
                $(this).removeClass('active');});
            $(this).addClass('active');
        });
    }
}

function init_saimod_mojotrollz_servers_status() {
    {
        $('#tabs li a').each(function(){
            $(this).removeClass('active');});
        $('#menu_status').addClass('active');
    }
    
    {
        load_visualisation_mojotrollz_server('vis_tbc_player', 'stats_tbc_player', '#filter_vis_tbc_player', 'Players on WoW-TBC', 400,250);
        load_visualisation_mojotrollz_server('vis_classic_player', 'stats_classic_player', '#filter_vis_classic_player', 'Players on WoW-Classic', 400,250);
        
        load_visualisation_mojotrollz_server('vis_tbc_server', 'stats_tbc_server', '#filter_vis_tbc_server', 'WoW-TBC Server Status', 400,250);
        load_visualisation_mojotrollz_server('vis_classic_server', 'stats_classic_server', '#filter_vis_classic_server', 'WoW-Classic Server Status', 400,250);
        
        $('#filter_vis_tbc_player').on('change',function(){
            load_visualisation_mojotrollz_server('vis_tbc_player', 'stats_tbc_player', '#filter_vis_tbc_player', 'Players on WoW-TBC', 400,250);
        })
        $('#filter_vis_tbc_server').on('change',function(){
            load_visualisation_mojotrollz_server('vis_tbc_server', 'stats_tbc_server', '#filter_vis_tbc_server', 'WoW-TBC Server Status', 400,250);
        })
        
        $('#filter_vis_classic_player').on('change',function(){
            load_visualisation_mojotrollz_server('vis_classic_player', 'stats_classic_player', '#filter_vis_classic_player', 'Players on WoW-Classic', 400,250);
        })
        $('#filter_vis_classic_server').on('change',function(){
            load_visualisation_mojotrollz_server('vis_classic_server', 'stats_classic_server', '#filter_vis_classic_server', 'WoW-Classic Server Status', 400,250);
        })
    }
}

function init_saimod_mojotrollz_servers_update() {
    {
        $('#tabs li a').each(function(){
            $(this).removeClass('active');});
        $('#menu_update').addClass('active');
    }
    
    {
        $('#btn_update').click(function(){
            growl_start('Updating Server Repository... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_servers',
                                    action: 'update_server'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Server Repository updated successfully!");
                        }

            });
        });
        
        $('#btn_changes').click(function(){
            growl_start("Calculating Diferences on the Server");
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_servers',
                                    action: 'changes'},
                        success : function(data) {
                            if(data.status){
                                $('#table_changes').html('');
                                growl_end_success("Calculated diferences");
                                data.result.revert.forEach(function(entry){
                                   $('#table_changes').append('<tr><td>'+entry[0]+'</td><td>'+entry[1]+'</td><td><button onclick="revert_file(\''+entry[0]+'\',\''+entry[1]+'\')" class="btn-warning btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span> Revert</button></td></tr>');
                                });
                                data.result.remove.forEach(function(entry){
                                   $('#table_changes').append('<tr><td>'+entry[0]+'</td><td>'+entry[1]+'</td><td><button onclick="remove_file(\''+entry[0]+'\',\''+entry[1]+'\')" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Remove </button></td></tr>');
                                });
                            } else {
                                growl_end_error("An Error Occurred while calculating Diferences: "+data.result.message);
                            }
                            $('#output_log').append(data.result.log);
                        }

            });
        });
        
        $('#btn_clear').click(function(){
            $('#output_log').html('');
            $('#table_changes').html('');
        });
    }
}

function revert_file(path,submodule){
    growl_start("Reverting path "+path);
    $.ajax({    type :'GET',
                url  : './sai.php',
                data : {    sai_mod: '.SAI.saimod_mojotrollz_servers',
                            action: 'revert',
                            path: path,
                            submodule: submodule},
                success : function(data) {
                    if(data.status){
                        growl_end_success("Reverted path "+path);
                    } else {
                        growl_end_error("An Error Occurred while reverting: "+data.result.message);
                    }
                    $('#output_log').append(data.result.log);
                }

    });
}

function remove_file(path,submodule){
    growl_start("Removing file "+path);
    $.ajax({    type :'GET',
                url  : './sai.php',
                data : {    sai_mod: '.SAI.saimod_mojotrollz_servers',
                            action: 'remove',
                            path: path,
                            submodule: submodule},
                success : function(data) {
                    if(data.status){
                        growl_end_success("Removed file "+path);
                    } else {
                        growl_end_error("An Error Occurred while removing file: "+data.result.message);
                    }
                    $('#output_log').append(data.result.log);
                }

    });
}

function growl_start(message){
    $.bootstrapGrowl(message, {
            ele: 'body', // which element to append to
            type: 'info', // (null, 'info', 'danger', 'success')
            offset: {from: 'top', amount: 50}, // 'top', or 'bottom'
            align: 'right', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 7000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
            allow_dismiss: true, // If true then will display a cross to close the popup.
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
}

function growl_end_success(message){
    $.bootstrapGrowl(message, {
        ele: 'body', // which element to append to
        type: 'success', // (null, 'info', 'danger', 'success')
        offset: {from: 'top', amount: 50}, // 'top', or 'bottom'
        align: 'right', // ('left', 'right', or 'center')
        width: 250, // (integer, or 'auto')
        delay: 4500, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
        allow_dismiss: true, // If true then will display a cross to close the popup.
        stackup_spacing: 10 // spacing between consecutively stacked growls.
    });
}

function growl_end_error(message){
    $.bootstrapGrowl(message, {
        ele: 'body', // which element to append to
        type: 'danger', // (null, 'info', 'danger', 'success')
        offset: {from: 'top', amount: 50}, // 'top', or 'bottom'
        align: 'right', // ('left', 'right', or 'center')
        width: 250, // (integer, or 'auto')
        delay: 4500, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
        allow_dismiss: true, // If true then will display a cross to close the popup.
        stackup_spacing: 10 // spacing between consecutively stacked growls.
    });
}

function load_visualisation_mojotrollz_server(div, stats, filter, name, width, height){
    $.getJSON('./sai.php?sai_mod=.SAI.saimod_mojotrollz_servers&action='+stats+'&filter='+$(filter).val(),function(json){
        if(!json || json.status != true || !json.result){         
            return;}
        json = json.result;
        var data = new google.visualization.DataTable();
        first = true;        
        $.each(json[0], function(key, value){
            if(first){                
                data.addColumn('datetime',key);
                first = false;
            } else {
                data.addColumn('number',key);
            }       
        });            
        $.each(json, function(key, value){first = true; data.addRow($.map(value, function(v) { if(first){first=false;return [new Date(v)];}else{return [(v == null || parseFloat(v) <= 0) ? parseFloat(0) : parseFloat(v)];}}));});
                                
        var options = {title: name, aggregationTarget: 'category', selectionMode: 'multiple', curveType: 'function', /*focusTarget: 'category',*/ chartArea:{left:40,top:40},  vAxis:{logScale: false}, interpolateNulls: false,  width: width, height: height};
        new google.visualization.LineChart(document.getElementById(div)).draw(data, options);
    });
}