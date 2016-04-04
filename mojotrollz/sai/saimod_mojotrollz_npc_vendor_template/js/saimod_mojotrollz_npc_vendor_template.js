function init_saimod_mojotrollz_npc_vendor_template(){
    $('.btn_comment').click(function(){
        entry = $(this).attr('entry');
        $.ajax({    type :'POST',
                    url  : './sai.php?sai_mod=.SAI.saimod_mojotrollz_npc_vendor_template&action=comment',
                    data : {    entry: entry,
                                comment: $('#input_comment_'+entry).val()},
                    success : function(data) {
                        if(data.status){
                            system.reload();
                        }else{
                            alert('Problem: '+data);}
                    }
        });
    });
    
    $('#btn_search').click(function(){
        search = {  entry: $('#input_search_entry').val(),
                    items: $('#input_search_items').val(),
                    comments: $('#input_search_comments').val()}
        system.load('mojotrollz_npc_vendor_template;search.'+JSON.stringify(search),true);
    });
    
    $('#btn_add').click(function() {
        var entry = $('#input_entry').val();
        var item = $('#input_item').val();
        var maxcount = $('#input_maxcount').val();
        var incrtime = $('#input_incrtime').val();
        var extendedcost = $('#input_extendedcost').val();
        var condition_id = $('#input_condition_id').val();
        $.ajax({url: './sai.php',
                data: { sai_mod: '.SAI.saimod_mojotrollz_npc_vendor_template',
                        action: 'add',
                        entry: entry,
                        item: item,
                        maxcount: maxcount,
                        incrtime: incrtime,
                        extendedcost: extendedcost,
                        condition_id: condition_id},
                type: 'GET',
                success: function(data) {
                    if(data.status){
                        system.reload()
                    }else{
                        alert('Problem: '+data);}
                }
        });
    });
}

function init_saimod_mojotrollz_npc_vendor_template_vendor(){
    $('#btn_search').click(function(){
        entry = $(this).attr('entry');
        search = {  item: $('#input_search_item').val(),
                    maxcount: $('#input_search_maxcount').val(),
                    incrtime: $('#input_search_incrtime').val(),
                    extendedcost: $('#input_search_extendedcost').val(),
                    condition_id: $('#input_search_condition_id').val()}
        system.load('mojotrollz_npc_vendor_template_vendor;entry.'+entry+';search.'+JSON.stringify(search),true);
    });
    
    $('.btn_del').click(function(){
        $.ajax({    type :'GET',
                    url  : './sai.php?sai_mod=.SAI.saimod_mojotrollz_npc_vendor_template&action=del'+
                            '&entry='+$(this).attr('_entry')+
                            '&item='+$(this).attr('_item'),
                    success : function(data) {
                        if(data.status){
                            system.reload()
                        }else{
                            alert('Problem: '+data);}
                    }
        });
    });
    
    $('.btn_edit').click(function(){
        $('#input_entry').val($(this).attr('_entry'));
        $('#input_item').val($(this).attr('_item'));
        $('#input_maxcount').val($(this).attr('_maxcount'));
        $('#input_incrtime').val($(this).attr('_incrtime'));
        $('#input_extendedcost').val($(this).attr('_extendedcost'));
        $('#input_condition_id').val($(this).attr('_condition_id')); 
        $("#btn_add").focus();
    });
    
    $('#btn_add').click(function() {
        var entry = $(this).attr('_entry');
        var item = $('#input_item').val();
        var maxcount = $('#input_maxcount').val();
        var incrtime = $('#input_incrtime').val();
        var extendedcost = $('#input_extendedcost').val();
        var condition_id = $('#input_condition_id').val();
        $.ajax({url: './sai.php',
                data: { sai_mod: '.SAI.saimod_mojotrollz_npc_vendor_template',
                        action: 'add',
                        entry: entry,
                        item: item,
                        maxcount: maxcount,
                        incrtime: incrtime,
                        extendedcost: extendedcost,
                        condition_id: condition_id},
                type: 'GET',
                success: function(data) {
                    if(data.status){
                        system.reload()
                    }else{
                        alert('Problem: '+data);}
                }
        });
    });
    
    //item hover
    var items = {}
    Handlebars.registerHelper("speed", function( speed ) {
      return speed.toFixed(2);
    });

    Handlebars.registerHelper("dps", function( damage ) {
      var damageTotal = damage.max + damage.min;
      if( damage.extras ) {
        for( var i = 0; i < damage.extras.min.length; i++ ) {
          damageTotal += damage.extras.min[i];
        }
        for( var i = 0; i < damage.extras.max.length; i++ ) {
          damageTotal += damage.extras.max[i];
        }
      }
      return ((damageTotal/2) / damage.speed).toFixed(1);
    });

    Handlebars.registerHelper("classes", function( array ) {
      var classes = array.toString().replace(/\s/g,"&nbsp;").replace(/,/g,", ");
      return new Handlebars.SafeString( classes );
    });

    var source = $("#wow-item-template").html();
    var template = Handlebars.compile(source);
    var $body = $("body");
    var $wowIcons = $(".wow-icon");
    var lastHovered;

    $wowIcons.each(function(k,v) {
        var $this = $(this);
        var id = $this.data("item-id");
        $.getJSON('./api.php?call=tbc&action=item&id='+id,function(json){
            if(!json || json.status !== true || !json.result){
                return;}
            items[json.result.entry] = json.result;
            if( json.result.icon ) {
                $this.css({"background-image": "url(http://wow.zamimg.com/images/wow/icons/medium/"+ json.result.icon +".jpg)"});
            }
            if( json.result.stack ) {
                $this.append("<span class='stack'>"+json.result.stack+"</span>");}
        });

    });

    $wowIcons.on("mouseover.wow", function(e) {
        console.log(items);
      var $this = $(this);
      var $html;

      if( !lastHovered || !lastHovered.is( $this ) ) {

        var id = $this.data("item-id");
        $html = $( template(items[id]) );

        $body.find(".wow-item").remove();
        $body.append( $html );

        $html.css({
          left: e.clientX + 20,
          top: e.clientY - 10
        });

        lastHovered = $this;

      } else {
        $html = $(".wow-item");
      }

      setTimeout(function() {
        $html.removeClass("hidden");
      },10);

      $this.on("mousemove.wow", function(e) {
        $html.css({
          left: e.clientX + 20,
          top: e.clientY - 30
        });
      });

    });

    $wowIcons.on("mouseout.wow",function(e) {
      $body.find(".wow-item").addClass("hidden");
      $(this).off("mousemove.wow");
    });

    $body.on("mouseover.wow", ".wow-item" , function(e) {
      //$(this).removeClass("hidden");
    });

    $body.on("mouseout.wow", ".wow-item" , function(e) {
      $(this).addClass("hidden");
    });

/*var example = {
  
  // most values can be left blank
  // or omitted if they aren't needed.
  
  "example": {
    
    icon: "icon_name"
    quality: "trash",
    name: "Example Tooltip",
    binds: "when picked up",
    unique: true,
    slot: "Two-Hand",
    type: "Axe",

    damage: {
      min: 25,
      max: 39,
      // extras is for stuff like additional fire dmg
      extras: {
        min: [],
        max: []
      },
      speed: 2.50
    },
    
    stats: [
      { stat: "Agility", value: 4, type: "primary" },
      { stat: "Stamina", value: 4, type: "primary" },
      { stat: "Hit", value: 4, type: "secondary" },
      { stat: "Haste", value: 4, type: "secondary" }
    ],

    enchantments: {

      enchants: [
        { description: "Flametongue" }
      ],

      sockets: [
        { color: "red" },
        { color: "blue" },
        { color: "yellow" },
        { color: "meta" },
        { color: "prismatic" }
      ],
      
      socketBonus: "+12 Haste"

    },

    durability: 65,

    chanceOnHit: [
      { description: "Strike an enemy for an additional 2 fire damage." },
      { description: "Explode." }
    ],

    classes: [ "Warrior", "Paladin", "Death Knight" ],

    level: 14,
    ilevel: 19,

    bonuses: [
      { description: "Equip: Increases your PVP Power by 10." },
      { description: "Use: Summon a basilisk as a buddy for 10 seconds." }
    ]

  }

};*/
}