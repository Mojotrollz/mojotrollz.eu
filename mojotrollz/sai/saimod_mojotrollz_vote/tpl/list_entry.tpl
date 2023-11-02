<tr class="${tr_class} server_entries" cls="${class}">
    <td>${id}</td>
    <td>${name}</td>
    <td>${url}</td>
    <td>${version}</td>
    <td>${description}</td>
    <td>${score}</td>
    <td>
        <select class="form-control" id="select_visible_${i}">
            <option ${selected_0} value="0">INVISIBLE</option>
            <option ${selected_1} value="1">VISIBLE</option>
        </select>
    </td>
    <td>
        <button type="button" class="btn-sm btn btn-warning btn_server_visible" _id="${id}" _i="${i}"><span class="fa fa-redo" aria-hidden="true"></span></button>
    </td>
    <td>
        <button type="button" class="btn-sm btn btn-success btn_server_edit" _id="${id}" _name="${name}" _url="${url}" _version="${version}" _description="${description}"><span class="fa fa-edit" aria-hidden="true"></span></button>
    </td>
    <td>
        <button type="button" class="btn-sm btn btn-danger btn_server_del" _id="${id}"><span class="fa fa-trash" aria-hidden="true"></span></button>
    </td>
</tr>