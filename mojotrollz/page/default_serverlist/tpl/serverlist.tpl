<div class="row-fluid mojotrollz_col_contentmain">
    ${mojotrollz_servers_text}
    <div class="col-md-12 nopadding">
        <div class="table-responsive">
        <table class="mojotrollz_table table" style="width: 100%;">
            <tr>
                <th class="col-md-1">${basic_vote}</th>
                <th class="col-md-2">${basic_name}</th>
                <th class="col-md-2">${basic_version}</th>
                <th class="col-md-1">${basic_score}</th>
                <th class="col-md-4">${basic_description}</th>
                <th class="col-md-1"></th>
                <th class="col-md-1"></th>
            </tr>
            ${server_list}
        </table>
        </div>
    </div>
    <div class="col-md-4 nopadding">
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
                <button type="submit" class="btn-sm btn btn-success" style="margin-top: 5px;"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;&nbsp;Submit for Evaluation!</button>
            </div>
            <div class="help-block"></div>
        </form>
    </div>
</div>