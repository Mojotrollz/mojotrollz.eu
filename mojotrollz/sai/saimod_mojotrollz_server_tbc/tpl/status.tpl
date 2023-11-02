<div class="card card-default">
    <div class="card-header"><h4>TBC - Status</h4></div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div id="vis_tbc_player"></div>
                <select id="filter_vis_tbc_player">
                        <option value="2692000">30d</option>
                        <option value="1209600">14d</option>
                        <option value="604800">7d</option>
                        <option value="172800">2d</option>
                        <option value="86400">1d</option>
                        <option value="43200">12h</option>
                        <option value="21600">6h</option>
                        <option value="14400">4h</option>
                        <option value="7200">2h</option>
                        <option value="3600">1h</option>
                        <option value="1800">30m</option>
                        <option value="600" selected>10m</option>
                </select>
                <br>
                <br>
            </div>
            <div class="col-md-6">
                <div id="vis_tbc_server"></div>
                <select id="filter_vis_tbc_server">
                    <option value="2692000">30d</option>
                    <option value="1209600">14d</option>
                    <option value="604800">7d</option>
                    <option value="172800">2d</option>
                    <option value="86400">1d</option>
                    <option value="43200">12h</option>
                    <option value="21600">6h</option>
                    <option value="14400">4h</option>
                    <option value="7200">2h</option>
                    <option value="3600">1h</option>
                    <option value="1800">30m</option>
                    <option value="600" selected>10m</option>
                </select>
                <br>
                <br>
            </div>
        </div>
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
    </div>
</div>