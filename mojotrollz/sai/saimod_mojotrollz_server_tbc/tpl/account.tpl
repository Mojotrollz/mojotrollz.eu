<div class="panel panel-default">
    <div class="panel-heading"><h4>TBC - Account</h4></div>
    <div class="panel-body">
        <button class="btn-sm btn btn-success" id="btn_search" type="submit" style="float: right; margin-left: 10px;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>
        <input class="input-medium search-query action-control" id="input_search" type="text" placeholder="Search..." size="20" style="float: right;" value="${search}"/>
        <h6>Rows: ${count} Page: ${page}</h6>
        <table class="table table-hover table-condensed sai_table tablesorter">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Chars</th>
                    <th>JoinDate</th>
                    <th>LastLogin</th>
                    <th>Sys</th>
                    <th>Bot</th>
                    <th>On</th>
                </tr>
            </thead>
            <tbody>
                ${entries}
            </tbody>    
        </table>
        <ul class="pagination">
            <li><a href="#!mojotrollz_server_tbc(account);search.${search};page.0">&laquo;</a></li>
            ${pagination}
            <li><a href="#!mojotrollz_server_tbc(account);search.${search};page.${page_last}">&raquo;</a></li>
        </ul>
    </div>
</div>