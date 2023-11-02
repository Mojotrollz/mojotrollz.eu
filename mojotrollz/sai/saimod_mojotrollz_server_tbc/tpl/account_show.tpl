<div class="card card-default">
    <div class="card-header"><h4>TBC - Account - <b>${username}</b></h4></div>
    <div class="card-body">
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
            <tr>
                <th></th>
                <td></td>
            </tr>
            <tr>
                <th>Delete Account</th>
                <td>
                    <button account="${id}" class="btn-sm btn btn-danger" id="btn_del_account" type="submit"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Delete</button>
                </td>
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
        <button class="btn-sm btn btn-success" id="btn_back" onclick="system.back()"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Back</button>
    </div>
</div>