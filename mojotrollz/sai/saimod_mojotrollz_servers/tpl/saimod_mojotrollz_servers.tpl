<h4>Mojotrollz Servers</h4>
<hr>
Cron Last Visit: ${last_visit}<br/>
<a href="./sai.php?call=cron" target="_blank">Start Cron</a>
<div id="servers_content">
    <table class="table table-hover table-condensed sai_table tablesorter" id="servers_table" style="overflow: auto;">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>url</th>
                <th>version</th>
                <th>description</th>
                <th>score</th>
                <th>visible</th>
                <th></th>
                <th>action</th>
                <th></th>
            </tr>
        </thead>   
        <tbody>
            ${content}
        </tbody>    
        <tr>
            <td><input class="form-control" type="text" id="input_id" placeholder="id" style="width: 100%;"></td>
            <td><input class="form-control" type="text" id="input_name" placeholder="name" style="width: 100%;"></td>
            <td><input class="form-control" type="text" id="input_url" placeholder="url" style="width: 100%;"></td>
            <td><input class="form-control" type="text" id="input_version" placeholder="version" style="width: 100%;"></td>
            <td><input class="form-control" type="text" id="input_description" placeholder="description" style="width: 100%;"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><button type="button" class="btn-sm btn btn-success" id="btn_server_save"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ${basic_save}</button></td>
        </tr> 
    </table>
</div>
