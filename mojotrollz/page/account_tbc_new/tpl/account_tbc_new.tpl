<div class="panel panel-default">
    <div class="panel-heading"><h4>Register a new TBC Account</h4></div>
    <div class="panel-body" style="padding-bottom: 0;">
        <div class="row">
            <div class="col-md-8">
                <form class="textbox" id="register_tbc_form">
                    <div class="control-group">
                        <table>
                           <tbody>
                                <tr>
                                   <th style="width: 200px;">${basic_username}</th>
                                   <td>
                                       <div class="control-group controls">
                                            <input  type="text"
                                                    size="35"
                                                    style="margin-bottom: 15px; float: left;"
                                                    id="register_username"
                                                    placeholder="peter"
                                                    minlength="3" data-validation-minlength-message="${basic_username_short}"
                                                    required data-validation-required-message="${basic_username_miss}"/>
                                            <br/>
                                        </div>
                                   </td>
                                </tr>
                                <tr>
                                   <th style="vertical-align: top; padding-top: 7px;">${basic_password}</th>
                                   <td>
                                        <div class="control-group" id="change_user_password">
                                            <div class="control-group controls" style="clear: both">
                                                <input  type="password"
                                                        size="35"
                                                        style="margin-bottom: 15px; float: left;"
                                                        id="user_register_password1"
                                                        name="user_register_password1"
                                                        placeholder="${basic_placeholder_password}"
                                                        minlength="5"
                                                        data-validation-minlength-message="${basic_password_short}"
                                                        required data-validation-required-message="${basic_password_miss}"/>
                                                <br/>
                                            </div>
                                              <div class="control-group controls" style="clear: both">
                                                 <input  type="password"
                                                         size="35"
                                                         style="margin-bottom: 15px; float: left;"
                                                         id="user_register_password2"
                                                         name="user_register_password2"
                                                         placeholder="${basic_placeholder_password}"
                                                         data-validation-matches-match="user_register_password1"
                                                         data-validation-matches-message="${basic_password_match}"/>
                                                 <br/>
                                             </div>
                                        </div>
                                   </td>
                                </tr>
                                <tr>
                                    <th>
                                        <p style="float: left;"><a href="#!account(tbc)">Back to TBC-Accounts</a></p>
                                    </th>
                                    <td>
                                        <p style="float: right; margin-top: 3px;">
                                            <button class="btn btn-success" type="submit" style="width: 200px;"><i class="icon-ok icon-white"></i> Register Account</button>
                                        </p>
                                    </td>
                                </tr>
                           </tbody>
                        </table>
                        <p class="help-block" id="help_block_tbc_register" style="float: left; margin-top: 3px;"></p>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <p>Create another WoW TBC Account for your Website Account.</p>
                <p><a href="#!account"><b>Website-Accounts</b></a></p>
                <p><a href="#!account(tbc)"><b>TBC-Accounts</b></a></p>
            </div>
        </div>
    </div>
</div>