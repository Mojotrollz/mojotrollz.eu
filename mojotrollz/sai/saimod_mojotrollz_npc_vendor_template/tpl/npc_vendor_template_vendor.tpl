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
    <tr>
        <td><a href="#!mojotrollz_npc_vendor_template_vendor;entry.${entry}">${entry}</a></td>
        <td><input class="form-control" type="text" id="input_item" placeholder="item"></td>
        <td><input class="form-control" type="text" id="input_maxcount" placeholder="maxcount" value="0"></td>
        <td><input class="form-control" type="text" id="input_incrtime" placeholder="incrtime" value="0"></td>
        <td><input class="form-control" type="text" id="input_extendedcost" placeholder="ExtendedCost" value="0"></td>
        <td><input class="form-control" type="text" id="input_condition_id" placeholder="condition_id" value="0"></td>
        <td><button type="button" class="btn-sm btn btn-success" id="btn_add" _entry="${entry}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ${basic_add}</button></td>
    </tr>
</table>
<ul class="pagination">
    <li><a href="#!mojotrollz_npc_vendor_template_vendor;entry.${entry};search.${search};page.0">&laquo;</a></li>
    ${pagination}
    <li><a href="#!mojotrollz_npc_vendor_template_vendor;entry.${entry};search.${search};page.${page_last}">&raquo;</a></li>
</ul>
<br>
<button id="btn_back" onClick="system.back();" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> ${basic_back}</button>

<script id="wow-item-template" type="text/x-handlebars-template">
    <aside class="wow-item hidden" data-quality="{{ quality }}">
        <header class="wow-item__header">
            <p class="header__title">{{ name }}</p>
            {{#if ItemLevel}}
            <p class="info__item-level">Item Level {{ ItemLevel }}</p>
            {{/if}}
            {{#if binds}}<p class="header__binds">{{ binds }}</p>{{/if}}
      {{#if unique}}
        <p class="header__unique">Unique</p>
      {{/if}}
    </header>
    <section class="wow-item__type">
      <p class="type__slot">{{slot}}</p>
      <p class="type__item">{{type}}</p>
    </section>
    <section class="wow-item__stats">
      {{#if damage}}
      <p class="stats__damage-armor"><span class="value">{{ damage.min }} - {{damage.max}}</span> Damage</p>
      <p class="stats__speed">Speed <span class="value">{{ speed damage.speed }}</span></p>
      <p class="stats__dps">(<span class="value">{{ dps damage }}</span> damage per second)</p>
      {{/if}}
      
      {{#if armor}}
      <p class="stats__armor">{{ armor }} Armor</p>
      {{/if}}
      
      <div class="stats__list">
        {{#each stats}}
        <p class="stats__{{ type }} stats__list-item">+{{ value }} {{ stat }}</p>
        {{/each}}
      </div>
      
    </section>
    
    {{#if enchantments}}
    <section class="wow-item__enchantments">
      
      {{#each enchantments.enchants}}
      <p class="enchantments__enchant">{{ description }}</p>
      {{/each}}
      
      <div class="enchantments__sockets">
        
        {{#each enchantments.sockets }}
        <p class="enchantments__socket socket--{{ color }}">{{ color }} socket</p>
        {{/each}}

        {{#if enchantments.socketBonus}}
        <p class="enchantments__socket-bonus">Socket Bonus: {{ enchantments.socketBonus }}</p>
        {{/if}}
        
      </div>
      
    </section>
    {{/if}}
    
    <section class="wow-item__info">
      
      {{#if MaxDurability}}
      <p class="info__durability">Durability: {{ MaxDurability }} / {{ MaxDurability }}</p>
      {{/if}}
      
      {{#each chanceOnHit}}
      <p class="info__chance-on-hit">Chance on hit: {{ description }}</p>
      {{/each}}
      
      {{#if classes}}
      <p class="info__class-requirement">Classes: <span class="value">{{ classes classes }}</span></p>
      {{/if}}
      
      {{#if RequiredLevel}}
      <p class="info__level-requirement">Requires Level {{ RequiredLevel }}</p>
      {{/if}}
    </section>
    
    {{#if bonuses}}
    <section class="wow-item__bonuses">
      {{#each bonuses}}
      <p class="bonuses__bonus">{{ description }}</p>
      {{/each}}
    </section>
    {{/if}}
    
    <section class="wow-item__info">

      {{#if tradelevel }}
      <p class="info__trade-level">Requires {{ tradelevel.trade }} ({{ tradelevel.level }})</p>
      {{/if}}

      {{#if description }}
      <p class="info__flavour-text">"{{ description }}"</p>
      {{/if}}
    </section>
    <section class="wow-item__price">
      {{#if price_gold }}
      <p class="price__gold">Sell Price: {{ price_gold }}</p>
      {{/if}}
      {{#if price_silver }}
      <p class="price__silver">{{ price_silver }}</p>
      {{/if}}
      {{#if price_copper }}
      <p class="price__copper">{{ price_copper }}</p>
      {{/if}}
    </section>
  </aside>
</script>