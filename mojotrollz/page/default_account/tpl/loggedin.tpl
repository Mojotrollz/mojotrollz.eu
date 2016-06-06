<div class="row-fluid">
    <br><br>
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-success">
            <div class="panel-heading"><h4>Account</h4></div>
            <div class="panel-body">
                You are logged in as <b>${email}</b><br>
                Your Website Account-Name is: <b>${username}</b><br>
                ${option_confirm_email}
            </div>
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading"><h4>WoW Account</h4></div>
            <div class="panel-body">
                <div class="row-fluid">
                    <div class="col-md-6"><b>Username</b></div>
                    <div class="col-md-3"><b>Chars</b></div>
                    <div class="col-md-3"><b>Online</b></div>
                </div>
                ${wow_accounts}
                ${wow_accounts_confirm}
            </div>
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="col-md-6 col-md-offset-3">
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
    </div>
</div>