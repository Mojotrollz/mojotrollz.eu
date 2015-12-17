<div class="panel panel-default">
    <div class="panel-heading"><h4>Mojotrollz Server</h4></div>
    <div class="panel-body">
        <button id="btn_update" class="btn-primary btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> ${basic_update}</button>
        <button id="btn_changes" class="btn-warning btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> ${basic_find_changes}</button>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><h4>Classic</h4></div>
            <div class="panel-body">
                Status:
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading"><h4>compile</h4></div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>live</th>
                        <td>compile</td>
                    </tr>
                    <tr>
                        <th>test</th>
                        <td>compile</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading"><h4>db</h4></div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>world</th>
                        <td>deploy live</td>
                        <td>deploy test</td>
                    </tr>
                    <tr>
                        <th>realm</th>
                        <td>deploy live</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>chars</th>
                        <td>deploy live</td>
                        <td>deploy test</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading"><h4>run</h4></div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>world</th>
                        <td>start</td>
                        <td>stop</td>
                        <td>status</td>
                    </tr>
                    <tr>
                        <th>realm</th>
                        <td>start</td>
                        <td>stop</td>
                        <td>status</td>
                    </tr>
                    <tr>
                        <th>world_test</th>
                        <td>start</td>
                        <td>stop</td>
                        <td>status</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><h4>TBC</h4></div>
            <div class="panel-body">
                Status: 
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading"><h4>compile</h4></div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>live</th>
                        <td>compile</td>
                    </tr>
                    <tr>
                        <th>test</th>
                        <td>compile</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading"><h4>db</h4></div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>world</th>
                        <td>deploy live</td>
                        <td>deploy test</td>
                    </tr>
                    <tr>
                        <th>realm</th>
                        <td>deploy live</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>chars</th>
                        <td>deploy live</td>
                        <td>deploy test</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading"><h4>run</h4></div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>world</th>
                        <td>start</td>
                        <td>stop</td>
                        <td>status</td>
                    </tr>
                    <tr>
                        <th>realm</th>
                        <td>start</td>
                        <td>stop</td>
                        <td>status</td>
                    </tr>
                    <tr>
                        <th>world_test</th>
                        <td>start</td>
                        <td>stop</td>
                        <td>status</td>
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
                    <th>${table_path}</th>
                    <th>${table_submodule}</th>
                    <th>${table_action}</th>
                </tr>
            </thead>
            <tbody id="table_changes">
            </tbody>
        </table>
        <textarea id="output_log" style="width: 100%; height: 350px;"></textarea>
        <button id="btn_clear" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> ${basic_clear}</button>
    </div>
</div>