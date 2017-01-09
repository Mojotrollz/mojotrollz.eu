<div class="panel panel-default">
    <div class="panel-heading"><h4>TBC - Account - <b>${username}</b></h4></div>
    <div class="panel-body">
        <table class="table table-hover table-condensed sai_table tablesorter">
            <tr>
                <th>ID</th>
                <td>${id}</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>${username}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>${email}</td>
            </tr>
            <tr>
                <th>Join Date</th>
                <td>${joindate}</td>
            </tr>
            <tr>
                <th>Last Login</th>
                <td>${last_login}</td>
            </tr>
            <tr>
                <th>System Account</th>
                <td><a href="#!security(user);username.${system_account}">${system_account}</a></td>
            </tr>  
        </table>
        <br/>
        <table class="table table-hover table-condensed sai_table tablesorter">
            <tr>
                <th>GUID</th>
                <th>Name</th>
                <th>Level</th>
                <th>Bot</th>
                <th>On</th>
            </tr>
            ${entries}
            <tr>
                <th colspan="5">Test Server</th>
            </tr>
            ${entries_test}
        </table>
        <button class="btn-sm btn btn-success" id="btn_back" onclick="system.load('mojotrollz_server_tbc(account)')"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Back</button>
    </div>
</div>