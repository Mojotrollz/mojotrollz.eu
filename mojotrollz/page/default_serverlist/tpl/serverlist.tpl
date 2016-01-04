<hr style="width: 100%;">
${mojotrollz_servers_text}
<table class="mojotrollz_table">
    <tr>
        <th class="col-md-2" style="padding: 0;">${basic_name}</th>
        <th class="col-md-2" style="padding: 0;">${basic_version}</th>
        <th class="col-md-5" style="padding: 0;">${basic_description}</th>
        <th class="col-md-2" style="padding: 0;">${basic_score}</th>
        <th class="col-md-1" style="padding: 0;">${basic_vote}</th>
        <th class="col-md-1" style="padding: 0;">${basic_visit}</th>
        <th class="col-md-1" style="padding: 0;">${basic_download}</th>
    </tr>
    ${server_list}
</table>
<div class="col-md-4" style="padding: 0;">
    <br>
    ${mojotrollz_submit_server}
    <form class="textbox trojan" style="padding-top:10px" id="newserver_form">
        <div class="control-group">
            <div class="controls" style="width: 100%;">
                <input class="form-control text_width"
                       type="text"
                       id="input_server_address"
                       placeholder="${mojotrollz_address_server}"
                       minlength="5"
                       required data-validation-required-message="§{mojotrollz_please_address_server}">
            </div>
            <button type="submit" class="btn-sm btn btn-success" style="width: 50%; margin-top: 5px;"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;&nbsp;Submit for Evaluation!</button>
        </div>
        <div class="help-block"></div>
    </form>
</div>