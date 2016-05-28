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