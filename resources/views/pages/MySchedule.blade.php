@extends('layouts.app')


@section('content')

<div id="scheduler_here" class="dhx_cal_container" style='width:100%; height:100vh;'>
   <div class="dhx_cal_navline">
       <div class="dhx_cal_prev_button">&nbsp;</div>
       <div class="dhx_cal_next_button">&nbsp;</div>
       <div class="dhx_cal_today_button"></div>
       <div class="dhx_cal_date"></div>
       <div class="dhx_cal_tab" name="day_tab"></div>
       <div class="dhx_cal_tab" name="week_tab"></div>
       <div class="dhx_cal_tab" name="month_tab"></div>
   </div>
   <div class="dhx_cal_header"></div>
   <div class="dhx_cal_data"></div>
</div>


<script type="text/javascript">
    scheduler.config.xml_date = "%Y-%m-%d %H:%i:%s";
    {{-- scheduler.attachEvent("onEmptyClick", function(date, e){
                console.log(date);
    }); --}}

    
    scheduler.locale.labels.section_owner="Owner";
    scheduler.config.lightbox.sections=[
        {name:"description", height:50, map_to:"text", type:"textarea" , focus:true},
        {name:"owner", height:30, type:"select", options:scheduler.serverList("users"), map_to:"user_id" },
        {name:"resource", height:30, type:"select", options:scheduler.serverList("resources"), map_to:"resource_id" },
        {name:"time", height:72, type:"time", map_to:"auto"}
    ];

    function getUserById(id){
        var allUsers = scheduler.serverList("users");
        var user = null;
        for(var i = 0; i < allUsers.length; i++){
            if(allUsers[i].key == id){
                user = allUsers[i];
                break;
            }
        }
        return user;
    }

    function getResourceById(id){
        var allResources = scheduler.serverList("resources");
        var resource = null;
        for(var i = 0; i < allResources.length; i++){
            if(allResources[i].key == id){
                resource = allResources[i];
                break;
            }
        }
        return resource;
    }
      
    {{--     
    scheduler.attachEvent("onBeforeViewChange", function(old_mode,old_date,mode,date){

      //get events from displayed date range
      var evs = scheduler.getEvents(date, scheduler.date.add(date, 1, mode));
      var res = '';

      for(var i =0; i < evs.length; i++){
            evs[i].color = evs[i].textColor = null;
            res = getResourceById(i);

            if(mode == "month"){
              evs[i].textColor = evs[i].event_color;
            }else{
              evs[i].color = res.color;
            }
          }

          return true;
        });
        --}}

    scheduler.templates.event_text = function(start, end, event){
        
        var user = getUserById(event.user_id);
        var resource = getResourceById(event.resource_id);

        var html = '';
        var userLabel = user ? user.label : "not available";
        var resourceLabel = resource ? resource.label : "not available";
        html += "<br>User: " + userLabel + "<br>Resource: " + userLabel + "<br>Description: " + event.text ;



       // var user = getUserById(event.user_id);
       // var resource = getResourceById(event.resource_id);

       // var html = '';
        
       // html += "<br>User: " + user.label + "<br>Resource: " + resource.label + "<br>Description: " + event.text ;
        console.log("event text user: " + userLabel);
        console.log("event text resource: " + resource.Label);
      
        return html;
    }
    scheduler.templates.event_bar_text = function(start, end, event){
        var user = getUserById(event.user_id);
        var resource = getResourceById(event.resource_id);

        var html = '';
        
        html += "<b> Resource: </b>" + resource.label + ",<b> User: </b>" + user.label ;
        console.log("event bar user: " + user.label);
        console.log("event bar resource: " + resource.label);
        console.log("event bar resource color: " + resource.color);
        return html;
    }

    scheduler.setLoadMode("day");//!

    {{-- scheduler.init("scheduler_here", new Date(2019, 3, 1), "week"); --}}
    scheduler.init("scheduler_here", new Date(Today()), "month");

   {{-- scheduler.attachEvent("onBeforeViewChange", function(old_mode,old_date,mode,date){
        debugger;
        return true;
    });
    
    scheduler.attachEvent("onEmptyClick", function (date, e){
       console.log(date);
    });

    scheduler.attachEvent("onBeforeViewChange", function(old_mode,old_date,mode,date){
        debugger;
        return true;
    });
    
    scheduler.attachEvent("onClearAll", function (){
        debugger;
    }); --}}

    scheduler.load("/api/events", "json");//!
    var dp = new dataProcessor("/api/events");//!

    dp.init(scheduler);
    dp.setTransactionMode("REST");
</script>

@endsection
