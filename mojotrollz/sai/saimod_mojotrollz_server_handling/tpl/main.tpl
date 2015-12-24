<div class="panel panel-default">
    <div class="panel-heading"><h4>Mojotrollz Server</h4></div>
    <div class="panel-body">
        <button id="btn_update" class="btn-primary btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Update</button>
        <button id="btn_changes" class="btn-warning btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Find Changes</button>
        <br>
        <br>
        <div id="vis_ts"></div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><h4>Classic - Status</h4></div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>realm</th>
                        <td>${classic_realm_status}</td>
                    </tr>
                    <tr>
                        <th>world</th>
                        <td>${classic_world_status}</td>
                    </tr>
                    <tr>
                        <th>world_test</th>
                        <td>${classic_world_test_status}</td>
                    </tr>
                    <tr>
                        <th>players live</th>
                        <td>${classic_players_online}</td>
                    </tr>
                    <tr>
                        <th>players test</th>
                        <td>${classic_test_players_online}</td>
                    </tr>
                </table>
                <div id="vis_classic"></div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading"><h4>Classic - Run</h4></div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>realm</th>
                        <td style="text-align: right;"><button id="btn_classic_realm_start" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-play" aria-hidden="true"></span> start</button></td>
                        <td style="text-align: right;"><button id="btn_classic_realm_stop" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-stop" aria-hidden="true"></span> stop</button></td>
                        <td style="text-align: right;"><button id="btn_classic_realm_status" class="btn-primary btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> status</button></td>
                    </tr>
                    <tr>
                        <th>world</th>
                        <td style="text-align: right;"><button id="btn_classic_world_start" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-play" aria-hidden="true"></span> start</button></td>
                        <td style="text-align: right;"><button id="btn_classic_world_stop" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-stop" aria-hidden="true"></span> stop</button></td>
                        <td style="text-align: right;"><button id="btn_classic_world_status" class="btn-primary btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> status</button></td>
                    </tr>
                    <tr>
                        <th>world_test</th>
                        <td style="text-align: right;"><button id="btn_classic_world_test_start" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-play" aria-hidden="true"></span> start</button></td>
                        <td style="text-align: right;"><button id="btn_classic_world_test_stop" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-stop" aria-hidden="true"></span> stop</button></td>
                        <td style="text-align: right;"><button id="btn_classic_world_test_status" class="btn-primary btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> status</button></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading"><h4>Classic - Database <font color="red" size="2">Stop the Server first!</font></h4></div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>realm</th>
                        <td style="text-align: right;"><button id="btn_db_classic_realm_live" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> deploy live</button></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>chars</th>
                        <td style="text-align: right;"><button id="btn_db_classic_chars_live" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> deploy live</button></td>
                        <td style="text-align: right;"><button id="btn_db_classic_chars_test" class="btn-warning btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> deploy test</button></td>
                    </tr>
                    <tr>
                        <th>world</th>
                        <td style="text-align: right;"><button id="btn_db_classic_world_live" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> deploy live</button></td>
                        <td style="text-align: right;"><button id="btn_db_classic_world_test" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> deploy test</button></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading"><h4>Classic - Compile <font color="red" size="2">Stop the Server first!</font></h4></div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>live</th>
                        <td style="text-align: right;"><button id="btn_compile_classic_live" class="btn-warning btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> compile</button></td>
                    </tr>
                    <tr>
                        <th>test</th>
                        <td style="text-align: right;"><button id="btn_compile_classic_test" class="btn-warning btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> compile</button></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading"><h4>Classic - Log</h4></div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>Char.log</th>
                        <td style="text-align: right;"><button id="btn_log_classic_chars_live" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> live</button></td>
                        <td style="text-align: right;"><button id="btn_logdel_classic_chars_live" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                        <td style="text-align: right;"><button id="btn_log_classic_chars_test" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> test</button></td>
                        <td style="text-align: right;"><button id="btn_logdel_classic_chars_test" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                    </tr>
                    <tr>
                        <th>DBErrors.log</th>
                        <td style="text-align: right;"><button id="btn_log_classic_db_live" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> live</button></td>
                        <td style="text-align: right;"><button id="btn_logdel_classic_db_live" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                        <td style="text-align: right;"><button id="btn_log_classic_db_test" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> test</button></td>
                        <td style="text-align: right;"><button id="btn_logdel_classic_db_test" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                    </tr>
                    <tr>
                        <th>EventAIErrors.log</th>
                        <td style="text-align: right;"><button id="btn_log_classic_eventai_live" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> live</button></td>
                        <td style="text-align: right;"><button id="btn_logdel_classic_eventai_live" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                        <td style="text-align: right;"><button id="btn_log_classic_eventai_test" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> test</button></td>
                        <td style="text-align: right;"><button id="btn_logdel_classic_eventai_test" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                    </tr>
                    <tr>
                        <th>Realmd.log</th>
                        <td style="text-align: right;"><button id="btn_log_classic_realm_live" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> live</button></td>
                        <td style="text-align: right;"><button id="btn_logdel_classic_realm_live" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                        <td style="text-align: right;"><button id="btn_log_classic_realm_test" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> test</button></td>
                        <td style="text-align: right;"><button id="btn_logdel_classic_realm_test" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                    </tr>
                    <tr>
                        <th>SD2Errors.log</th>
                        <td style="text-align: right;"><button id="btn_log_classic_sd2_live" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> live</button></td>
                        <td style="text-align: right;"><button id="btn_logdel_classic_sd2_live" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                        <td style="text-align: right;"><button id="btn_log_classic_sd2_test" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> test</button></td>
                        <td style="text-align: right;"><button id="btn_logdel_classic_sd2_test" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                    </tr>
                    <tr>
                        <th>Server.log</th>
                        <td style="text-align: right;"><button id="btn_log_classic_server_live" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> live</button></td>
                        <td style="text-align: right;"><button id="btn_logdel_classic_server_live" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                        <td style="text-align: right;"><button id="btn_log_classic_server_test" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> test</button></td>
                        <td style="text-align: right;"><button id="btn_logdel_classic_server_test" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
                    
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><h4>TBC - Status</h4></div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>realm</th>
                        <td>${tbc_realm_status}</td>
                    </tr>
                    <tr>
                        <th>world</th>
                        <td>${tbc_world_status}</td>
                    </tr>
                    <tr>
                        <th>world_test</th>
                        <td>${tbc_world_test_status}</td>
                    </tr>
                    <tr>
                        <th>players live</th>
                        <td>${tbc_players_online}</td>
                    </tr>
                    <tr>
                        <th>players test</th>
                        <td>${tbc_test_players_online}</td>
                    </tr>
                </table>
                <div id="vis_tbc"></div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading"><h4>TBC - Run</h4></div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>realm</th>
                        <td style="text-align: right;"><button id="btn_tbc_realm_start" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-play" aria-hidden="true"></span> start</button></td>
                        <td style="text-align: right;"><button id="btn_tbc_realm_stop" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-stop" aria-hidden="true"></span> stop</button></td>
                        <td style="text-align: right;"><button id="btn_tbc_realm_status" class="btn-primary btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> status</button></td>
                    </tr>
                    <tr>
                        <th>world</th>
                        <td style="text-align: right;"><button id="btn_tbc_world_start" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-play" aria-hidden="true"></span> start</button></td>
                        <td style="text-align: right;"><button id="btn_tbc_world_stop" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-stop" aria-hidden="true"></span> stop</button></td>
                        <td style="text-align: right;"><button id="btn_tbc_world_status" class="btn-primary btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> status</button></td>
                    </tr>
                    <tr>
                        <th>world_test</th>
                        <td style="text-align: right;"><button id="btn_tbc_world_test_start" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-play" aria-hidden="true"></span> start</button></td>
                        <td style="text-align: right;"><button id="btn_tbc_world_test_stop" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-stop" aria-hidden="true"></span> stop</button></td>
                        <td style="text-align: right;"><button id="btn_tbc_world_test_status" class="btn-primary btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> status</button></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading"><h4>TBC - Database <font color="red" size="2">Stop the Server first!</font></h4></div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>realm</th>
                        <td style="text-align: right;"><button id="btn_db_tbc_realm_live" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> deploy live</button></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>chars</th>
                        <td style="text-align: right;"><button id="btn_db_tbc_chars_live" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> deploy live</button></td>
                        <td style="text-align: right;"><button id="btn_db_tbc_chars_test" class="btn-warning btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> deploy test</button></td>
                    </tr>
                    <tr>
                        <th>world</th>
                        <td style="text-align: right;"><button id="btn_db_tbc_world_live" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> deploy live</button></td>
                        <td style="text-align: right;"><button id="btn_db_tbc_world_test" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> deploy test</button></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading"><h4>TBC - Compile <font color="red" size="2">Stop the Server first!</font></h4></div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>live</th>
                        <td style="text-align: right;"><button id="btn_compile_tbc_live" class="btn-warning btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> compile</button></td>
                    </tr>
                    <tr>
                        <th>test</th>
                        <td style="text-align: right;"><button id="btn_compile_tbc_test" class="btn-warning btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> compile</button></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading"><h4>TBC - Log</h4></div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>Char.log</th>
                        <td style="text-align: right;"><button id="btn_log_tbc_chars_live" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> live</button></td>
                        <td style="text-align: right;"><button id="btn_logdel_tbc_chars_live" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                        <td style="text-align: right;"><button id="btn_log_tbc_chars_test" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> test</button></td>
                        <td style="text-align: right;"><button id="btn_logdel_tbc_chars_test" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                    </tr>
                    <tr>
                        <th>DBErrors.log</th>
                        <td style="text-align: right;"><button id="btn_log_tbc_db_live" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> live</button></td>
                        <td style="text-align: right;"><button id="btn_logdel_tbc_db_live" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                        <td style="text-align: right;"><button id="btn_log_tbc_db_test" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> test</button></td>
                        <td style="text-align: right;"><button id="btn_logdel_tbc_db_test" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                    </tr>
                    <tr>
                        <th>EventAIErrors.log</th>
                        <td style="text-align: right;"><button id="btn_log_tbc_eventai_live" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> live</button></td>
                        <td style="text-align: right;"><button id="btn_logdel_tbc_eventai_live" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                        <td style="text-align: right;"><button id="btn_log_tbc_eventai_test" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> test</button></td>
                        <td style="text-align: right;"><button id="btn_logdel_tbc_eventai_test" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                    </tr>
                    <tr>
                        <th>Realmd.log</th>
                        <td style="text-align: right;"><button id="btn_log_tbc_realm_live" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> live</button></td>
                        <td style="text-align: right;"><button id="btn_logdel_tbc_realm_live" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                        <td style="text-align: right;"><button id="btn_log_tbc_realm_test" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> test</button></td>
                        <td style="text-align: right;"><button id="btn_logdel_tbc_realm_test" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                    </tr>
                    <tr>
                        <th>SD2Errors.log</th>
                        <td style="text-align: right;"><button id="btn_log_tbc_sd2_live" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> live</button></td>
                        <td style="text-align: right;"><button id="btn_logdel_tbc_sd2_live" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                        <td style="text-align: right;"><button id="btn_log_tbc_sd2_test" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> test</button></td>
                        <td style="text-align: right;"><button id="btn_logdel_tbc_sd2_test" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                    </tr>
                    <tr>
                        <th>Server.log</th>
                        <td style="text-align: right;"><button id="btn_log_tbc_server_live" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> live</button></td>
                        <td style="text-align: right;"><button id="btn_logdel_tbc_server_live" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                        <td style="text-align: right;"><button id="btn_log_tbc_server_test" class="btn-success btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> test</button></td>
                        <td style="text-align: right;"><button id="btn_logdel_tbc_server_test" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading"><h4>Output</h4></div>
    <div class="panel-body">
        <table>
            <thead>
                <tr>
                    <th>Path</th>
                    <th>Submodule</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="table_changes">
            </tbody>
        </table>
        <textarea id="output_log" style="width: 100%; height: 350px;"></textarea>
        <button id="btn_clear" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Clear</button>
    </div>
</div>