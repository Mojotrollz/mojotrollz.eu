<div class="row-fluid">
    <br>
    <br>
    <div class="col-md-3">
        <div class="panel panel-success">
            <div class="panel-heading"><h4>Account</h4></div>
            <div class="panel-body">
                <ul class="nav nav-pills nav-stacked" id="account_menu">
                    <li id="li_account" class="active"><a href="#!account"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;Website Account</a></li>
                    <li id="li_serverstatus"><a href="#!account(serverstatus)"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;&nbsp;Serverstatus</a></li>
                    <li id="li_tbc"><a href="#!account(tbc)"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp;&nbsp;WoW TBC Accounts</a></li>
                    <br>
                    <li>
                        <form class="textbox" style="padding:10px" id="logout_form">
                            <div class="control-group">
                                <input type="hidden" />
                                <button class="btn-sm btn btn-primary" style="width: 100%;" type="submit" id="logout_submit"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> ${basic_logout}</button>
                                <div class="help-block"></div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        
    </div>
    <div class="col-md-9" id="content_account"></div>
</div>