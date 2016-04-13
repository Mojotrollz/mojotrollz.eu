<tr>
    <td><a href="#!mojotrollz_npc_vendor_template_vendor;entry.${entry}">${entry}</a></td>
    <td>${item} <i class="wow-icon" data-item-id="${item}"></i></td>
    <td>${maxcount}</td>
    <td>${incrtime}</td>
    <td>${ExtendedCost} <i class="wow-icon" data-itemextendedcost-id="${ExtendedCost}"></i></td>
    <td>${condition_id}</td>
    <td>
        <button type="button" class="btn-sm btn btn-success btn_edit" _entry="${entry}" _item="${item}" _maxcount="${maxcount}" _incrtime="${incrtime}" _extendedcost="${extendedcost}" _condition_id="${condition_id}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
        <button type="button" class="btn-sm btn btn-danger btn_del" _entry="${entry}" _item="${item}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
    </td>
</tr>