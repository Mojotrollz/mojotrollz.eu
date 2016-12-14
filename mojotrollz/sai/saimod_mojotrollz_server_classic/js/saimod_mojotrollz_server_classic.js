function init_saimod_mojotrollz_server_classic(){
    {
        load_visualisation_mojotrollz_classic('vis_classic_player', 'stats_classic_player', '#filter_vis_classic_player', 'Players on WoW-Classic', 400,250);
        
        load_visualisation_mojotrollz_classic('vis_classic_server', 'stats_classic_server', '#filter_vis_classic_server', 'WoW-Classic Server Status', 400,250);
        
        $('#filter_vis_classic_player').on('change',function(){
            load_visualisation_mojotrollz_classic('vis_classic_player', 'stats_classic_player', '#filter_vis_classic_player', 'Players on WoW-Classic', 400,250);
        })
        $('#filter_vis_classic_server').on('change',function(){
            load_visualisation_mojotrollz_classic('vis_classic_server', 'stats_classic_server', '#filter_vis_classic_server', 'WoW-Classic Server Status', 400,250);
        })
    }
    
    $('#btn_clear').click(function(){
        $('#output_log').html('');
        $('#table_changes').html('');
    });
    
    register_classic();
}

function register_classic(){
    {
        $('#btn_classic_realm_start').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'run_classic_realm_start'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_classic_realm_stop').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'run_classic_realm_stop'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_classic_realm_status').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'run_classic_realm_status'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
    }
    {
        $('#btn_classic_world_start').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'run_classic_world_start'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_classic_world_stop').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'run_classic_world_stop'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_classic_world_status').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'run_classic_world_status'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
    }
    {
        $('#btn_classic_world_test_start').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'run_classic_world_test_start'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_classic_world_test_stop').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'run_classic_world_test_stop'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_classic_world_test_status').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'run_classic_world_test_status'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
    }
    {
        $('#btn_compile_classic_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'compile_classic_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_compile_classic_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'compile_classic_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
    }
    {
        $('#btn_db_classic_realm_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'db_classic_realm_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_db_classic_chars_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'db_classic_chars_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_db_classic_chars_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'db_classic_chars_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_db_classic_world_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'db_classic_world_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_db_classic_world_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'db_classic_world_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        
    }
    {
        $('#btn_log_classic_chars_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'log_classic_chars_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_log_classic_chars_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'log_classic_chars_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_log_classic_db_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'log_classic_db_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_log_classic_db_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'log_classic_db_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_log_classic_eventai_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'log_classic_eventai_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_log_classic_eventai_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'log_classic_eventai_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_log_classic_realm_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'log_classic_realm_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_log_classic_realm_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'log_classic_realm_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_log_classic_sd2_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'log_classic_sd2_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_log_classic_sd2_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'log_classic_sd2_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_log_classic_server_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'log_classic_server_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_log_classic_server_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'log_classic_server_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
    }
    {
        $('#btn_logdel_classic_chars_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'logdel_classic_chars_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_logdel_classic_chars_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'logdel_classic_chars_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_logdel_classic_db_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'logdel_classic_db_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_logdel_classic_db_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'logdel_classic_db_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_logdel_classic_eventai_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'logdel_classic_eventai_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_logdel_classic_eventai_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'logdel_classic_eventai_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_logdel_classic_realm_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'logdel_classic_realm_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_logdel_classic_realm_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'logdel_classic_realm_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_logdel_classic_sd2_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'logdel_classic_sd2_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_logdel_classic_sd2_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'logdel_classic_sd2_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_logdel_classic_server_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'logdel_classic_server_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_logdel_classic_server_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_classic',
                                    action: 'logdel_classic_server_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
    }
}

function growl_start(message){
    $.bootstrapGrowl(message, {
            ele: 'body', // which element to append to
            type: 'info', // (null, 'info', 'danger', 'success')
            offset: {from: 'top', amount: 50}, // 'top', or 'bottom'
            align: 'right', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            //delay: 7000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
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

function load_visualisation_mojotrollz_classic(div, stats, filter, name, width, height){
    $.getJSON('./sai.php?sai_mod=.SAI.saimod_mojotrollz_server_classic&action='+stats+'&filter='+$(filter).val(),function(json){
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