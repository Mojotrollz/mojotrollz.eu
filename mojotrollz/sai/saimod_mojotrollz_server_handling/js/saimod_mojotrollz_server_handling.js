function init_saimod_mojotrollz_server(){
    {
        $('#btn_update').click(function(){
            growl_start('Updating Server Repository... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'update'},
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
    }
    
    $('#btn_clear').click(function(){
        $('#output_log').html('');
        $('#table_changes').html('');
    });
    
    register_classic();
    register_tbc();
}

function register_classic(){
    {
        $('#btn_classic_realm_start').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'logdel_classic_server_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
    }
}

function register_tbc(){
    {
        $('#btn_tbc_realm_start').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'run_tbc_realm_start'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_tbc_realm_stop').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'run_tbc_realm_stop'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_tbc_realm_status').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'run_tbc_realm_status'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
    }
    {
        $('#btn_tbc_world_start').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'run_tbc_world_start'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_tbc_world_stop').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'run_tbc_world_stop'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_tbc_world_status').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'run_tbc_world_status'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
    }
    {
        $('#btn_tbc_world_test_start').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'run_tbc_world_test_start'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_tbc_world_test_stop').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'run_tbc_world_test_stop'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_tbc_world_test_status').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'run_tbc_world_test_status'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
    }
    {
        $('#btn_compile_tbc_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'compile_tbc_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_compile_tbc_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'compile_tbc_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
    }
    {
        $('#btn_db_tbc_realm_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'db_tbc_realm_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_db_tbc_chars_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'db_tbc_chars_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_db_tbc_chars_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'db_tbc_chars_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_db_tbc_world_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'db_tbc_world_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_db_tbc_world_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'db_tbc_world_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        
    }
    {
        $('#btn_log_tbc_chars_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'log_tbc_chars_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_log_tbc_chars_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'log_tbc_chars_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_log_tbc_db_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'log_tbc_db_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_log_tbc_db_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'log_tbc_db_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_log_tbc_eventai_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'log_tbc_eventai_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_log_tbc_eventai_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'log_tbc_eventai_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_log_tbc_realm_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'log_tbc_realm_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_log_tbc_realm_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'log_tbc_realm_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_log_tbc_sd2_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'log_tbc_sd2_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_log_tbc_sd2_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'log_tbc_sd2_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_log_tbc_server_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'log_tbc_server_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_log_tbc_server_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'log_tbc_server_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
    }
    {
        $('#btn_logdel_tbc_chars_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'logdel_tbc_chars_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_logdel_tbc_chars_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'logdel_tbc_chars_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_logdel_tbc_db_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'logdel_tbc_db_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_logdel_tbc_db_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'logdel_tbc_db_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_logdel_tbc_eventai_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'logdel_tbc_eventai_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_logdel_tbc_eventai_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'logdel_tbc_eventai_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_logdel_tbc_realm_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'logdel_tbc_realm_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_logdel_tbc_realm_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'logdel_tbc_realm_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_logdel_tbc_sd2_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'logdel_tbc_sd2_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_logdel_tbc_sd2_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'logdel_tbc_sd2_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_logdel_tbc_server_live').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'logdel_tbc_server_live'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
        $('#btn_logdel_tbc_server_test').click(function(){
            growl_start('Doing ... please wait')
            $.ajax({    type :'GET',
                        url  : './sai.php',
                        data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
                                    action: 'logdel_tbc_server_test'},
                        success : function(data) {
                            $('#output_log').append(data);
                            growl_end_success("Updated successfully!");
                        }

            });
        });
    }
}

function revert_file(path,submodule){
    growl_start("Reverting path "+path);
    $.ajax({    type :'GET',
                url  : './sai.php',
                data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
                data : {    sai_mod: '.SAI.saimod_mojotrollz_server_handling',
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
