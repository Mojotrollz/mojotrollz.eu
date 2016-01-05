<button id="btn_back" onClick="system.back();" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> ${basic_back}</button>
<h6>${basic_rows}: ${count} ${basic_page}: ${page}</h6>
<table class="sai_table" style="width: 100%;">
    <tr>
        <th>entry</th>
        <th>item</th>
        <th>maxcount</th>
        <th>incrtime</th>
        <th>ExtendedCost</th>
        <th>condition_id</th>
        <th>actions</th>
    </tr>
    <tr>
        <td>
        </td>
        <td>
            <input class="input-medium search-query action-control" id="input_search_item" type="text" placeholder="${basic_placeholder_search}" size="20" value="${search_item}"/>
        </td>
        <td>
            <input class="input-medium search-query action-control" id="input_search_maxcount" type="text" placeholder="${basic_placeholder_search}" size="20" value="${search_maxcount}"/>
        </td>
        <td>
            <input class="input-medium search-query action-control" id="input_search_incrtime" type="text" placeholder="${basic_placeholder_search}" size="20" value="${search_incrtime}"/>
        </td>
        <td>
            <input class="input-medium search-query action-control" id="input_search_extendedcost" type="text" placeholder="${basic_placeholder_search}" size="20" value="${search_extendedcost}"/>
        </td>
        <td>
            <input class="input-medium search-query action-control" id="input_search_condition_id" type="text" placeholder="${basic_placeholder_search}" size="20" value="${search_condition_id}"/>
        </td>
        <td>
            <button class="btn-sm btn btn-success" id="btn_search" entry="${entry}" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> ${basic_search}</button>
        </td>
    </tr>
    ${entries}
</table>
<ul class="pagination">
    <li><a href="#!mojotrollz_npc_vendor_template_vendor;entry.${entry};search.${search};page.0">&laquo;</a></li>
    ${pagination}
    <li><a href="#!mojotrollz_npc_vendor_template_vendor;entry.${entry};search.${search};page.${page_last}">&raquo;</a></li>
</ul>
<br>
<button id="btn_back" onClick="system.back();" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> ${basic_back}</button>