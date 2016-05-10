function init_saimod_mojotrollz_teamspeak(){
    load_visualisation_mojotrollz_server('vis_ts', 'stats_ts', '#filter_vis_ts', 'Players on Teamspeak', 900,400);        
    $('#filter_vis_ts').on('change',function(){
        load_visualisation_mojotrollz_server('vis_ts', 'stats_ts', '#filter_vis_ts', 'Players on Teamspeak', 900,400);
    })
}

function load_visualisation_mojotrollz_server(div, stats, filter, name, width, height){
    $.getJSON('./sai.php?sai_mod=.SAI.saimod_mojotrollz_teamspeak&action='+stats+'&filter='+$(filter).val(),function(json){
        if(!json || json.status != true || !json.result){         
            return;}
        json = json.result;
        var data = new google.visualization.DataTable();
        first = true;        
        $.each(json[0], function(key, value){
            if(first){                
                data.addColumn('datetime',key);
                first = false;
            } else {
                data.addColumn('number',key);
            }       
        });            
        $.each(json, function(key, value){first = true; data.addRow($.map(value, function(v) { if(first){first=false;return [new Date(v)];}else{return [(v == null || parseFloat(v) <= 0) ? parseFloat(0) : parseFloat(v)];}}));});
                                
        var options = {title: name, aggregationTarget: 'category', selectionMode: 'multiple', curveType: 'function', /*focusTarget: 'category',*/ chartArea:{left:40,top:40},  vAxis:{logScale: false}, interpolateNulls: false,  width: width, height: height};
        new google.visualization.LineChart(document.getElementById(div)).draw(data, options);
    });
}