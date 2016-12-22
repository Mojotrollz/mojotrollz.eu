<div class="panel panel-success">
    <div class="panel-heading"><h4>You are part of the Beta!</h4></div>
    <div class="panel-body">
        You are logged in as <b>${email}</b><br>
        Your Website Account-Name is: <b>${username}</b>
        <br><br>
        <h4>Mojotrollz 2.4.3 TBC Progressive</h4>
        <p>
            <b>Realmlist: </b><a href="./api.php?call=files&cat=server&id=realmlist.wtf" target="blank">set realmlist mojotrollz.eu</a>
            <br>
            <b>Client: </b><a href="${link_wow_2_4_3}">${mojotrollz_wow_2_4_3}</a>
        </p>
    </div>
</div>
<div class="panel panel-success">
    <div class="panel-heading"><h4>Server Status</h4></div>
    <div class="panel-body">
        <table>
            <tr>
                <td>
                    <b>Realm:&nbsp;&nbsp;</b>
                </td>
                <td>
                    <img src="./api.php?call=files&cat=content&id=${realm_online}.png" width="18" height="18"/>&nbsp;&nbsp;${realm_online}
                </td>
            </tr>
            <tr>
                <td>
                    <b>World: </b>
                </td>
                <td>
                    <img src="./api.php?call=files&cat=content&id=${world_online}.png" width="18" height="18"/>&nbsp;&nbsp;${world_online}
                </td>
            </tr>
            <tr>
                <td>
                    <b>Test: </b>
                </td>
                <td>
                    <img src="./api.php?call=files&cat=content&id=${test_online}.png" width="18" height="18"/>&nbsp;&nbsp;${test_online}
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading"><h4>WoW Account</h4></div>
    <div class="panel-body">
        <div class="row-fluid">
            <div class="col-md-6"><b>Username</b></div>
            <div class="col-md-3"><b>Chars</b></div>
            <div class="col-md-3"><b>Online</b></div>
        </div>
        ${wow_accounts}
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <form class="textbox" style="padding:10px" id="logout_form">
            <div class="control-group">
                <input type="hidden" />
                <button class="btn-sm btn btn-primary" style="width: 100%;" type="submit" id="logout_submit"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> ${basic_logout}</button>
                <div class="help-block"></div>
            </div>
        </form>
    </div>
</div>