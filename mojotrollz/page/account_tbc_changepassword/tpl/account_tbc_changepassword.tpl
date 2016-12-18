<div class="panel panel-default">
    <div class="panel-heading"><h4>Change WoW TBC Account <b>${account}</b>'s Password</h4></div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-8">
                <form class="textbox" style="padding:10px" id="changepassword_user_form" account="${account}">
                    <div class="control-group">
                        <table>
                           <tbody>
                                <tr>
                                   <th>${basic_password_old}</th>
                                   <td style="vertical-align: top; padding-top: 17px;">
                                        <div class="control-group controls">
                                            <input  type="password"
                                                    size="35"
                                                    style="margin-bottom: 15px;"
                                                    id="user_password_old"
                                                    placeholder="${basic_placeholder_password}"
                                                    minlength="5" data-validation-minlength-message="${basic_password_short}"
                                                    maxlength="16" data-validation-maxlength-message="${basic_password_long}"
                                                    required data-validation-required-message="${basic_password_miss}"/>
                                        </div>
                                   </td>
                                </tr>
                                <tr>
                                    <th><hr></th>
                                    <th><hr></th>
                                </tr>
                                <tr>
                                    <th style="vertical-align: top; padding-top: 20px;">${basic_password_new}</th>
                                    <td>
                                        <div class="control-group" id="change_user_password">
                                            <div class="control-group controls" style="clear: both">
                                                <input  type="password"
                                                        size="35"
                                                        style="margin-bottom: 15px; float: left;"
                                                        id="user_password_new1"
                                                        name="user_password_new1"
                                                        placeholder="${basic_placeholder_password}"
                                                        minlength="5"
                                                        data-validation-minlength-message="${basic_password_short}"
                                                        required data-validation-required-message="${basic_password_miss}"/>
                                            </div>
                                            <div class="control-group controls" style="clear: both">
                                                <input  type="password"
                                                        size="35"
                                                        style="margin-bottom: 15px; float: left;"
                                                        id="user_password_new2"
                                                        name="user_password_new2"
                                                        placeholder="${basic_placeholder_password}"
                                                        data-validation-matches-match="user_password_new1"
                                                        required data-validation-matches-message="${basic_password_match}"/>
                                                <br/>
                                            </div>
                                            <p class="help-block" style="float: left; margin-top: 3px;"></p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <p style="float: left;"><a href="#!account(tbc_account);account.${account}">Back to WoW TBC Account</a></p>
                                    </th>
                                   <td>
                                        <p style="float: right;">
                                            <button class="btn-sm btn btn-success" style="clear: left; height: 32px; font-size: 13px;" type="submit" id="login_submit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> ${basic_change_password}</button>
                                        </p>
                                   </td>
                                </tr>
                           </tbody>
                        </table>
                        <p id="changepassword-help-block" style="float: left; margin-top: 3px;"></p>
                    </div>
                </form>
            </div>
            <div class="col-md-4" style="padding-top: 10px;">
                <p>Caution! This function does not change your Website-Account's Password.</p>
                <p>To change your Website-Accounts Password's visit your <a href="#!account">Account</a>.</p>
            </div>
        </div>
    </div>
</div>