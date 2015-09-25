<h4>${sai_cron_title}</h4>
<hr>
Last Visit: ${last_visit}<br/>
<a href="./sai.php?call=cron" target="_blank">Start Cron</a>
<div id="cron_content">
    <table class="table table-hover table-condensed sai_table tablesorter" id="sai_mod_cron_table" style="overflow: auto;">
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
            <td>ID</td>
            <td><input class="form-control" type="text" id="input_cron_min" placeholder="name" value="0" style="width: 40px;"></td>
            <td><input class="form-control" type="text" id="input_cron_hour" placeholder="url" value="0" style="width: 40px;"></td>
            <td><input class="form-control" type="text" id="input_cron_day" placeholder="version" value="0" style="width: 40px;"></td>
            <td><input class="form-control" type="text" id="input_cron_day_week" placeholder="description" value="0" style="width: 40px;"></td>
            <td>VISIBLE</td>
            <td></td>
            <td></td>
            <td></td>
            <td><button type="button" class="btn-sm btn btn-success" id="btn_servers_add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ${basic_edit}</button></td>
        </tr> 
    </table>
</div>
