<div class="panel panel-success">
    <div class="panel-heading"><h4>Public Beta</h4></div>
    <div class="panel-body">
        <!--<input id="input_beta_key" type="text" maxlength="6" placeholder="Enter Your Beta Key" style="width: 95%;"/>
        <br><br>
        <button id="btn_beta" class="btn btn-success btn-lg" style="width: 95%;">Join the Mojotribe</button>-->
        <h4>Mojotrollz 2.4.3 TBC Progressive</h4>
        <p>
            <b>Realmlist: </b><a href="./api.php?call=files&cat=server&id=realmlist.wtf" target="blank">set realmlist mojotrollz.eu</a>
            <br>
            <b>Client: </b><a href="${link_wow_2_4_3}">${mojotrollz_wow_2_4_3}</a>
        </p>
        <button id="btn_beta" class="btn btn-success btn-lg" style="width: 100%;">Join the Mojotribe</button>
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
                            style="margin-bottom: 15px; width: 100%;"
                            id="bt_login_user"
                            placeholder="${basic_placeholder_username}"
                            minlength="3" data-validation-minlength-message="${sai_error_username_short}"
                            maxlength="16" data-validation-maxlength-message="${sai_error_username_long}"
                            required data-validation-required-message="${sai_error_username_miss}"/>
                </div>
                <div class="controls">
                    <input  type="password"
                            size="30"
                            style="margin-bottom: 15px; width: 100%;"
                            id="bt_login_password"
                            placeholder="${basic_placeholder_password}"
                            minlength="5" data-validation-minlength-message="${sai_error_password_short}"
                            maxlength="16" data-validation-maxlength-message="${sai_error_password_long}"
                            required data-validation-required-message="${sai_error_password_miss}"/>
                </div>        
                <button class="btn-sm btn btn-primary" style="width: 100%;" type="submit" id="login_submit"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> ${basic_login}</button>
                <div class="help-block"></div>
            </div>
        </form>
    </div>
</div>