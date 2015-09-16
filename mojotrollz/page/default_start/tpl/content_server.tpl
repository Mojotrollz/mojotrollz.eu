<div class="row-fluid row_centered clearfix" id="mojotrollz_server_row">
    <div class="col-md-12 row_centered mojotrollz_server" style="padding-left: 50px; padding-right: 50px;">
        <hr>
        <h3>SERVERS</h3>
        <table style="width: 100%;">
            <tr>
                <th>Name</th>
                <th>Version</th>
                <th>Score</th>
                <th>Vote</th>
            </tr>
            ${server_list}
        </table>
        <form class="textbox trojan" style="padding:10px" id="newserver_form">
            <div class="help-block"></div>
            <div class="control-group">
                <div class="controls" style="float: left; width: 450px;">
                    <input class="form-control text_width"
                           type="text"
                           id="input_server_address"
                           placeholder="Address of the new Server "
                           required data-validation-required-message="Please tell us the Server's Address ;-).">
                </div>&nbsp;
                <button type="submit" class="btn-sm btn btn-success"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;Submit for Evaluation!</button>
            </div>
        </form>
    </div>
</div>