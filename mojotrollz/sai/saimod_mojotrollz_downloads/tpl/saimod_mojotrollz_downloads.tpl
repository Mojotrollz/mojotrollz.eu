<h4>Mojotrollz Downloads</h4>
<hr>
<div id="downloads_content">
    <table class="table table-hover table-condensed sai_table tablesorter" id="servers_table" style="overflow: auto;">
        <thead>
            <tr>
                <th style="min-width: 55px;">id</th>
                <th>link</th>
                <th>img</th>
                <th>text</th>
                <th>subtext</th>
                <th>action</th>
                <th></th>
            </tr>
        </thead>   
        <tbody>
            ${content}
        </tbody>    
        <tr>
            <td><input class="form-control" type="text" id="input_id" placeholder="id" style="width: 100%;"></td>
            <td><input class="form-control" type="text" id="input_link" placeholder="link" style="width: 100%;"></td>
            <td><input class="form-control" type="text" id="input_img" placeholder="img" style="width: 100%;"></td>
            <td><input class="form-control" type="text" id="input_text" placeholder="text" style="width: 100%;"></td>
            <td><input class="form-control" type="text" id="input_subtext" placeholder="subtext" style="width: 100%;"></td>
            <td></td>
            <td><button type="button" class="btn-sm btn btn-success" id="btn_download_save"><span class="fa fa-plus" aria-hidden="true"></span> ${basic_save}</button></td>
        </tr> 
    </table>
</div>
