<tr class="${tr_class} server_entries" cls="${class}">
    <td>${id}</td>
    <td><a href="./sai.php#!text(edittext(editor));id.${link};lang.enUS">${link}</a></td>
    <td>${img}</td>
    <td><a href="./sai.php#!text(edittext(editor));id.${text};lang.enUS">${text}</a></td>
    <td><a href="./sai.php#!text(edittext(editor));id.${subtext};lang.enUS">${subtext}</a></td>
    <td>
        <button type="button" class="btn-sm btn btn-success btn_download_edit" _id="${id}" _link="${link}" _img="${img}" _text="${text}" _subtext="${subtext}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
    </td>
    <td>
        <button type="button" class="btn-sm btn btn-danger btn_download_del" _id="${id}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
    </td>
</tr>