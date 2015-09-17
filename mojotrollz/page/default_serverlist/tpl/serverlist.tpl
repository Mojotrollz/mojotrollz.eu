<hr>
<h3>SERVERS</h3>
<table style="width: 100%;" class="mojotrollz_table">
    <tr>
        <th class="col-md-2" style="padding: 0;">Name</th>
        <th class="col-md-2" style="padding: 0;">Version</th>
        <th class="col-md-4" style="padding: 0;">Description</th>
        <th class="col-md-1" style="padding: 0;">Score</th>
        <th class="col-md-1" style="padding: 0;">Vote</th>
        <th class="col-md-1"></th>
        <th class="col-md-1"></th>
    </tr>
    ${server_list}
</table>
<div class="col-md-4" style="padding: 0;">
    <br>
    Submit the Server's address you are playing on here!
    <form class="textbox trojan" style="padding-top:10px" id="newserver_form">
        <div class="control-group">
            <div class="controls" style="width: 100%;">
                <input class="form-control text_width"
                       type="text"
                       id="input_server_address"
                       placeholder="Address of your Server "
                       minlength="5"
                       required data-validation-required-message="Please tell us your Server's Address ;-).">
            </div>
            <button type="submit" class="btn-sm btn btn-success" style="width: 50%; margin-top: 5px;"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;&nbsp;Submit for Evaluation!</button>
        </div>
        <div class="help-block"></div>
    </form>
</div>