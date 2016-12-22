<div class="panel panel-default">
    <div class="panel-heading"><h4>Server Status</h4></div>
    <div class="panel-body">
        <table style="width: 100%;">
            <tr>
                <td>
                    <b>Realm Server:&nbsp;&nbsp;</b>
                </td>
                <td style="text-align: right;">
                    ${realm_online}&nbsp;&nbsp;<img src="./api.php?call=files&cat=content&id=${realm_online}.png" width="18" height="18"/>
                </td>
            </tr>
            <tr>
                <td>
                    <b>World Server: </b>
                </td>
                <td style="text-align: right;">
                    ${world_online}&nbsp;&nbsp;<img src="./api.php?call=files&cat=content&id=${world_online}.png" width="18" height="18"/>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Test Server: </b>
                </td>
                <td style="text-align: right;">
                    ${test_online}&nbsp;&nbsp;<img src="./api.php?call=files&cat=content&id=${test_online}.png" width="18" height="18"/>
                </td>
            </tr>
        </table>
    </div>
</div>