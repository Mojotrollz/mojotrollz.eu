<div class="row-fluid">
    <br><br>
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading"><h4>Register for the Mojotrollz Beta</h4></div>
            <div class="panel-body">
                <form class="textbox" id="register_user_form">
                    <div class="control-group" id="register_username_control_group">
                        <table id="userRegisterTable" class="">
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
                                   <th>E-Mail</th>
                                   <td>
                                        <div class="control-group controls">
                                            <input  type="email"
                                                    size="35"
                                                    style="margin-bottom: 15px; float: left;"
                                                    id="register_email"
                                                    placeholder="${basic_placeholder_email}"
                                                    data-validation-email-message="${basic_email_wrong}"
                                                    required data-validation-required-message="${basic_email_miss}"/>
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
                                        <p style="float: left;"><a href="#!login">Login an existing Account</a></p>
                                    </th>
                                   <td>
                                        <p style="float: right; margin-top: 3px;">
                                            <button class="btn-lg btn-success" type="submit" style="width: 200px;"><i class="icon-ok icon-white"></i> Join the Mojotribe</button>
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