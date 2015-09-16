<hr>
<h3>SERVERS</h3>
<table style="width: 100%;" class="mojotrollz_table">
    <tr>
        <th>Name</th>
        <th>Version</th>
        <th>Description</th>
        <th>Score</th>
        <th>Vote</th>
    </tr>
    ${server_list}
</table>
<form class="textbox trojan" style="padding:10px" id="newserver_form">
    <div class="control-group">
        <div class="controls" style="float: left; width: 300px;">
            <input class="form-control text_width"
                   type="text"
                   id="input_server_address"
                   placeholder="Address of your Server "
                   minlength="5"
                   required data-validation-required-message="Please tell us your Server's Address ;-).">
        </div>&nbsp;
        <button type="submit" class="btn-sm btn btn-success"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;&nbsp;Submit for Evaluation!</button>
    </div>
    <div class="help-block"></div>
</form>