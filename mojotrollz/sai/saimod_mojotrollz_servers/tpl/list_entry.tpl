<tr class="${tr_class} cron_entries" cls="${class}">
    <td>${id}</td>
    <td>${name}</td>
    <td>${url}</td>
    <td>${version}</td>
    <td>${description}</td>
    <td>${score}</td>
    <td>
        <select class="form-control" id="select_status_${i}">
            <option ${selected_0} value="0">INVISIBLE</option>
            <option ${selected_1} value="1">VISIBLE</option>
        </select>
    </td>
    <td>
        <button type="button" class="btn-sm btn btn-warning btn_cron_status" _i="${i}"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span></button>
    </td>
    <td>
        <button type="button" class="btn-sm btn btn-success btn_cron_edit" _class="${class}" _min="${min}" _hour="${hour}" _day="${day}" _day_week="${day_week}" _month="${month}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
    </td>
    <td>
        <button type="button" class="btn-sm btn btn-danger btn_cron_del" _class="${class}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
    </td>
</tr>