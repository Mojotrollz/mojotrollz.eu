<div class="panel panel-default">
    <div class="panel-heading"><h4>Change Account EMail</h4></div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-8">
                <form class="textbox" style="padding:10px" id="changeemail_user_form">
                    <div class="control-group">
                        <table>
                           <tbody>
                                <tr>
                                   <th>${basic_email_new}</th>
                                   <td style="vertical-align: top; padding-top: 17px;">
                                        <div class="control-group controls">
                                            <input  type="email"
                                                    size="35"
                                                    style="margin-bottom: 15px; float: left;"
                                                    id="user_email_new"
                                                    placeholder="${basic_placeholder_email}"
                                                    data-validation-email-message="${basic_email_wrong}"
                                                    required data-validation-required-message="${basic_email_miss}"/>
                                        </div>
                                   </td>
                                </tr>
                                <tr>
                                    <th>
                                        <p style="float: left;"><a href="#!account">Back to Website Account</a></p>
                                    </th>
                                    <td>
                                        <p style="float: right;">
                                            <button class="btn-sm btn btn-success" style="clear: left; height: 32px; font-size: 13px;" type="submit" id="emailchange_submit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> ${basic_change_email}</button>
                                        </p>
                                    </td>
                                </tr>
                           </tbody>
                        </table>
                    </div>
                    <p class="help-block" id="changeemail-help-block" style="float: left; margin-top: 3px;"></p>
                </form>
            </div>
            <div class="col-md-4" style="padding-top: 10px;">
                <p>This function sends an EMail to your old Email-Address with a link to confirm the EMail-Change.</p>
                <p>The EMail-Change effects the Website Account and all WoW-Accounts.</p>
            </div>
        </div>
    </div>
</div>