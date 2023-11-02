<div class="card mt-3">
    <div class="card-header">Mojotrollz Teamspeak</div>
    <div class="card-body">
        <div class="tab-pane active" id="tab_ts_nav">    
            <div class="tabbable tabs-left subtabs row">
                <ul class="nav flex-column nav-pills col-md-3">
                    <a class="nav-link active" data-toggle="pill" href="#!mojotrollz_teamspeak" role="tab" aria-controls="v-pills-home" aria-selected="true">Current Month</a>
                    ${db_nav}
                </ul>
                <div class="tab-content col-md-9">
                    <div class="tab-pane active" id="tab_stats">
                        <div id="vis_ts"></div>
                        <select id="filter_vis_ts" db="${db}">
                                <option value="86400" selected>1d</option>
                                <option value="43200">12h</option>
                                <option value="21600">6h</option>
                                <option value="14400">4h</option>
                                <option value="7200">2h</option>
                                <option value="3600">1h</option>
                                <option value="1800">30m</option>
                                <option value="600">10m</option>
                        </select>
                    </div>
                </div>      
            </div>    
        </div>
    </div>
</div>