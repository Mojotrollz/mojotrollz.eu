function init_saimod_mojotrollz_teamspeak(){
    load_visualisation_mojotrollz_teamspeak('vis_ts', 'stats', '#filter_vis_ts', 'Players on Teamspeak', 700,400);        
    $('#filter_vis_ts').on('change',function(){
        load_visualisation_mojotrollz_teamspeak('vis_ts', 'stats', '#filter_vis_ts', 'Players on Teamspeak', 700,400);
    })
}

function load_visualisation_mojotrollz_teamspeak(div, action, filter, name, width, height){
    var db = $(filter).attr('db') == null ? '' : '&db='+$(filter).attr('db');
    $.getJSON('./sai.php?sai_mod=.SAI.saimod_mojotrollz_teamspeak&action='+action+'&filter='+$(filter).val()+db,function(json){
        if(!json || json.status != true || !json.result){         
            return;}
        json = json.result;
        if(json.length > 0){
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
        } else {
            $('#'+div).html('No Data!');
        }
    });
}