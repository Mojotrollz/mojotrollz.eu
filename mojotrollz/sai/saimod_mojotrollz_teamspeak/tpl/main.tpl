<div class="panel panel-default">
    <div class="panel-heading"><h4>Mojotrollz Teamspeak</h4></div>
    <div class="panel-body">
        <div class="tab-pane active" id="tab_ts_nav">    
            <div class="tabbable tabs-left subtabs">
                <ul class="nav nav-stacked nav-pills col-md-3">
                    <li class="active"><a href="#!mojotrollz_teamspeak">Current Month</a></li>
                    ${db_nav}
                </ul>
                <div class="tab-content col-md-9">
                    <div class="tab-pane active" id="tab_stats">
                        <div id="vis_ts"></div>
                        <select id="filter_vis_ts" db="${db}">
                                <option value="86400">1d</option>
                                <option value="43200">12h</option>
                                <option value="21600">6h</option>
                                <option value="14400">4h</option>
                                <option value="7200">2h</option>
                                <option value="3600">1h</option>
                                <option value="1800">30m</option>
                                <option value="600" selected>10m</option>
                        </select>
                    </div>
                </div>      
            </div>    
        </div>
    </div>
</div>