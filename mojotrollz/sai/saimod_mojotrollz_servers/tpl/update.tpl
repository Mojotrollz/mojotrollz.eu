<div class="card card-default">
    <div class="card-header"><h4>Update Mojotrollz WoW-Servers</h4></div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <button id="btn_update" class="btn-primary btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="fa fa-sync" aria-hidden="true"></span> Update</button>
                <button id="btn_changes" class="btn-warning btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="fa fa-search" aria-hidden="true"></span> Find Changes</button>
            </div>
        </div>
    </div>
</div>
<div class="card card-default mt-3">
    <div class="card-header"><h4>Output</h4></div>
    <div class="card-body">
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
        <button id="btn_clear" class="btn-danger btn btn-sm" style="margin-right: 15px; height: 32px; font-size: 13px;"><span class="fa fa-trash" aria-hidden="true"></span> Clear</button>
    </div>
</div>