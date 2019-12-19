<!DOCTYPE html>
<html>
<head>
<title>AJAX-Based Event Management System with Bootstrap</title>
<link rel="stylesheet" href="fullcalendar/fullcalendar.min.css" />
<script src="fullcalendar/lib/jquery.min.js"></script>
<script src="fullcalendar/lib/moment.min.js"></script>
<script src="fullcalendar/fullcalendar.min.js"></script>
<script>
$(document).ready(function() {
    var calendar = $('#calendar').fullCalendar({
        editable:true,
        events: 'loadcalendar.php',
        selectable:true,
        selectHelper:true,
        select: function(start,allDay)
        {
             var Event = prompt("Add Event");
             if(Event)
             {
                  var Date = $.fullCalendar.formatDate(start, "Y-MM-DD");
                  $("#event-action-response").hide();
                  $.ajax({
                       url:"addEvent.php",
                       type:"POST",
                       data:{title:Event, start:Date},
                       success:function()
                       {
                        calendar.fullCalendar('refetchEvents');
                        $("#event-action-response").html("Event added Successfully");
                        $("#event-action-response").show();
                       }
                  })
             }
        },
        eventDrop: function(event, delta, revertFunc) {
            if (!confirm("Are you sure about to move this event?")) {
                 revertFunc();
            } else {
                var editedDate = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                $("#event-action-response").hide();
                $.ajax({
                    url:"editevent.php",
                    type:"POST",
                    data:{event_id:event.id, start:editedDate},
                    success:function(resource)
                    {
                     calendar.fullCalendar('refetchEvents');
                     $("#event-action-response").html("Event moved Successfully");
                     $("#event-action-response").show();
                    }
                })
            }
        },        
    });
});  
</script>
<style>
body {
    font-family: Arial;
}
h1#demo-title {
    margin: 30px 0px 80px 0px;
    text-align: center;
}

#event-action-response {
    background-color: #5ce4c6;
    border: #57d4b8 1px solid;
    padding: 10px 20px;
    border-radius: 3px;
    margin-bottom: 15px;
    color: #333;
    display: none;
}

.fc-day-grid-event .fc-content {
    background: #586e75;
    color: #FFF;
}

.fc-event, .fc-event-dot {
    background-color: #586e75;
}

.fc-event {
    border: 1px solid #485b61;
}
</style>
</head>
<body>
    <div class="container">
        <h1 id="demo-title">Concerts</h1>
        <div id="event-action-response"></div>
        <div id="calendar"></div>
    </div>
</body>
</html>