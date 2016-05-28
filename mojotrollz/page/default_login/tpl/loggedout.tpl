<div class="row-fluid">
    <br><br>
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-success">
            <div class="panel-heading"><h4>Mojotrollz - Login</h4></div>
            <div class="panel-body">
                <form class="textbox" style="padding:10px" id="login_form">
                    <div class="control-group">
                        <table id="userLoginTable">
                           <tbody>
                                <tr>
                                   <th style="width: 200px;">${basic_username}</th>
                                   <td>
                                       <div class="controls">
                                            <input  type="text"
                                                    size="35"
                                                    style="margin-bottom: 15px;"
                                                    id="bt_login_user"
                                                    placeholder="${basic_placeholder_username}"
                                                    minlength="3" data-validation-minlength-message="${sai_error_username_short}"
                                                    maxlength="16" data-validation-maxlength-message="${sai_error_username_long}"
                                                    required data-validation-required-message="${sai_error_username_miss}"/>
                                        </div>
                                   </td>
                                </tr>
                                <tr>
                                   <th>${basic_password}</th>
                                   <td>
                                        <div class="controls">
                                            <input  type="password"
                                                    size="35"
                                                    style="margin-bottom: 15px;"
                                                    id="bt_login_password"
                                                    placeholder="${basic_placeholder_password}"
                                                    minlength="5" data-validation-minlength-message="${sai_error_password_short}"
                                                    maxlength="16" data-validation-maxlength-message="${sai_error_password_long}"
                                                    required data-validation-required-message="${sai_error_password_miss}"/>
                                        </div>
                                   </td>
                                </tr>
                                <tr>
                                    <th>
                                        <p style="float: left;"><a href="#!register">Register an Account</a></p>
                                    </th>
                                   <td>
                                        <p style="float: right;">
                                            <button class="btn-sm btn btn-success" style="clear: left; height: 32px; font-size: 13px;" type="submit" id="login_submit"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> ${basic_login}</button>
                                        </p>
                                   </td>
                                </tr>
                           </tbody>
                        </table>
                        <p class="help-block" style="float: left; margin-top: 3px;"></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>