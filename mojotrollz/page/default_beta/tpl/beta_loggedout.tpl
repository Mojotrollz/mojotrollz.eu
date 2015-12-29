<div class="panel panel-success">
    <div class="panel-heading"><h4>Join the Beta Here</h4></div>
    <div class="panel-body">
        <input id="input_beta_key" type="text" maxlength="6" placeholder="Enter Your Beta Key" style="width: 95%;"/>
        <br><br>
        <button id="btn_beta" class="btn btn-success btn-lg" style="width: 95%;">Join the Mojotribe</button>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading"><h4>Login</h4></div>
    <div class="panel-body">
        <form class="textbox" id="login_form">
            <div class="control-group">
                <div class="controls">
                    <input  type="text"
                            size="30"
                            style="margin-bottom: 15px; width: 95%;"
                            id="bt_login_user"
                            placeholder="${basic_placeholder_username}"
                            minlength="3" data-validation-minlength-message="Username too short."
                            maxlength="16" data-validation-maxlength-message="Username too long."
                            required data-validation-required-message="Username required."/>
                </div>
                <div class="controls">
                    <input  type="password"
                            size="30"
                            style="margin-bottom: 15px; width: 95%;"
                            id="bt_login_password"
                            placeholder="${basic_placeholder_password}"
                            minlength="5" data-validation-minlength-message="Password too short."
                            maxlength="16" data-validation-maxlength-message="Password too long."
                            required data-validation-required-message="Password required."/>
                </div>        
                <div class="help-block"></div>
                <button class="btn-sm btn btn-primary" style="width: 95%;" type="submit" id="login_submit"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> ${basic_login}</button>
            </div>
        </form>
    </div>
</div>