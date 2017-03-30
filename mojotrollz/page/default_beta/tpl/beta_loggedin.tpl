<div class="panel panel-success">
    <div class="panel-heading"><h4>You are part of the Beta!</h4></div>
    <div class="panel-body">
        <h4>Mojotrollz 2.4.3 TBC Progressive</h4>
        <p>
            <b>Realmlist: </b><a href="./files/server/realmlist.wtf" target="blank">set realmlist mojotrollz.eu</a>
            <br>
            <b>Client: </b><a href="${link_wow_2_4_3}">${mojotrollz_wow_2_4_3}</a>
        </p>
    </div>
</div>
<div class="panel panel-success">
    <div class="panel-heading"><h4>Server Status</h4></div>
    <div class="panel-body">
        <table style="width: 100%;">
            <tr>
                <td>
                    <b>Realm Server:&nbsp;&nbsp;</b>
                </td>
                <td style="text-align: right;">
                    ${realm_online}&nbsp;&nbsp;<img src="./files/content/${realm_online}.png" width="18" height="18"/>
                </td>
            </tr>
            <tr>
                <td>
                    <b>World Server: </b>
                </td>
                <td style="text-align: right;">
                    ${world_online}&nbsp;&nbsp;<img src="./files/content/${world_online}.png" width="18" height="18"/>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Test Server: </b>
                </td>
                <td style="text-align: right;">
                    ${test_online}&nbsp;&nbsp;<img src="./files/content/${test_online}.png" width="18" height="18"/>
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading"><h4>WoW Account</h4></div>
    <div class="panel-body">
        <table style="width: 100%;">
            <tr>
                <td><b>Username</b></td>
                <td><b>Chars</b></td>
                <td style="text-align: right;"><b>Online</b></td>
            </tr>
            ${wow_accounts}
        </table>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading"><h4>Account</h4></div>
    <div class="panel-body">
        You are logged in as <b>${email}</b><br>
        Your Website Account-Name is: <b>${username}</b>
        <br><br>
        <form class="textbox" style="padding:10px" id="logout_form">
            <div class="control-group">
                <input type="hidden" />
                <button class="btn-sm btn btn-primary" style="width: 100%;" type="submit" id="logout_submit"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> ${basic_logout}</button>
                <div class="help-block"></div>
            </div>
        </form>
    </div>
</div>