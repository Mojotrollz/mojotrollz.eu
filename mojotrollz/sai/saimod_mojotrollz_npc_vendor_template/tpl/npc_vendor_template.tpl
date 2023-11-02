<h6>${basic_rows}: ${count} ${basic_page}: ${page}</h6>
<table class="sai_table" style="width: 100%;">
    <tr>
        <th>entry</th>
        <th>items</th>
        <th>comments</th>
        <th>actions</th>
    </tr>
    <tr>
        <td>
            <input class="input-medium search-query action-control" id="input_search_entry" type="text" placeholder="${basic_placeholder_search}" size="20" value="${search_entry}"/>
        </td>
        <td>
            <input class="input-medium search-query action-control" id="input_search_items" type="text" placeholder="${basic_placeholder_search}" size="20" value="${search_items}"/>
        </td>
        <td>
            <input class="input-medium search-query action-control" id="input_search_comments" type="text" placeholder="${basic_placeholder_search}" size="20" value="${search_comments}"/>
        </td>
        <td>
            <button class="btn-sm btn btn-success" id="btn_search" type="submit"><span class="fa fa-search" aria-hidden="true"></span> ${basic_search}</button>
        </td>
    </tr>
    ${entries}
    <tr>
        <td><input class="form-control" type="text" id="input_entry" placeholder="entry"></td>
        <td><input class="form-control" type="text" id="input_item" placeholder="item"></td>
        <td>
            <input class="form-control" type="text" id="input_maxcount" placeholder="maxcount" style="width: 50px; float: left;">
            <input class="form-control" type="text" id="input_incrtime" placeholder="incrtime" style="width: 50px; float: left;">
            <input class="form-control" type="text" id="input_extendedcost" placeholder="ExtendedCost" style="width: 50px; float: left;">
            <input class="form-control" type="text" id="input_condition_id" placeholder="condition_id" style="width: 50px; float: left;">
        </td>
        <td><button type="button" class="btn-sm btn btn-success" id="btn_add"><span class="fa fa-plus" aria-hidden="true"></span> ${basic_add}</button></td>
    </tr>
</table>
<ul class="pagination">
    <li><a href="#!mojotrollz_npc_vendor_template;search.${search};page.0">&laquo;</a></li>
    ${pagination}
    <li><a href="#!mojotrollz_npc_vendor_template;search.${search};page.${page_last}">&raquo;</a></li>
</ul>