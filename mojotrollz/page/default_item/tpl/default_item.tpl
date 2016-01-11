<head>
    ${css}
</head>
<boddy>
<header class="page">
  <h2>Warcraft Tooltips</h2>
  <h3>with css, handlebars and some jQuery</h3>
</header>

<div class="bag">
  
  <header>Backpack</header> 
  
  <i class="wow-icon"
     data-item-id="hearthstone">
  </i>
  
  <i class="wow-icon" 
     data-item-id="shiny-red-apple">
  </i>
  
  <i class="wow-icon" 
     data-item-id="melon-juice">
  </i>
  
  <i class="wow-icon" 
     data-item-id="red-linen-shirt">
  </i>

  <i class="wow-icon" 
     data-item-id="medicine-staff-of-the-monkey">
  </i>

  <i class="wow-icon" 
     data-item-id="hoggers-trousers">
  </i>

  <i class="wow-icon" 
     data-item-id="deepdive-helmet">
  </i>

  <i class="wow-icon" 
     data-item-id="hanzo-sword">
  </i>

  <i class="wow-icon" 
     data-item-id="boots-of-the-petrified-forest">
  </i>

  <i class="wow-icon" 
     data-item-id="the-2-ring">
  </i>

  <i class="wow-icon" 
     data-item-id="dragonwrath-tarecgosas-rest">
  </i>

  <i class="wow-icon" 
     data-item-id="green-hills-of-stranglethorn-11">
  </i>

  <i class="wow-icon" 
     data-item-id="hopeglow-spaulders">
  </i>
  
</div>









<script id="wow-item-template" type="text/x-handlebars-template">

  <aside class="wow-item hidden" data-quality="{{ quality }}">
    <header class="wow-item__header">
      <p class="header__title">{{ name }}</p>
      {{#if binds}}<p class="header__binds">Binds {{ binds }}</p>{{/if}}
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
      
      {{#if durability}}
      <p class="info__durability">Durability: {{ durability }} / {{ durability }}</p>
      {{/if}}
      
      {{#each chanceOnHit}}
      <p class="info__chance-on-hit">Chance on hit: {{ description }}</p>
      {{/each}}
      
      {{#if classes}}
      <p class="info__class-requirement">Classes: <span class="value">{{ classes classes }}</span></p>
      {{/if}}
      
      {{#if level}}
      <p class="info__level-requirement">Requires Level {{ level }}</p>
      {{/if}}
      
      {{#if ilevel}}
      <p class="info__item-level">Item Level {{ ilevel }}</p>
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

      {{#if flavour }}
      <p class="info__flavour-text">"{{ flavour }}"</p>
      {{/if}}
      
    </section>
    
  </aside>
  
</script>
${js}
</boddy>