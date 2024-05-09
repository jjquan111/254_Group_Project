<!DOCTYPE html>
<html>
<head>
   <title>Dynamic Full Calendar</title>
   <!--link for FullCalendar CSS-->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" />
   <!-- Linking jQuery -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <!-- Linking Moment.js and FullCalendar JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
</head>
<body>

<style>
.add_event {
      padding: 10px 20px;
      background-color: #9290C3;
      color: #ffffff;
      border: none;
      font-size: 16px;
      border-radius: 5px;
    }
.add_event:hover {
      background-color: #535C91;
    }
</style>

    <!--calendar container-->
   <div id="calendar"></div>


   <!--add event button-->
   <button id="addEventBtn" class="add_event">Add Event</button>


   <script>
   $(document).ready(function() {
      //initialize fullcallendar
       $('#calendar').fullCalendar({
            //default view of the calendar
           defaultView: 'month',
           selectable: false,
           //dont display the event time
           displayEventTime: false,
           //fetch events
           events: 'fetch_events.php'
       });


       //add event button 
       $('#addEventBtn').click(function() {
           window.location.href = 'add_event.html'; //redirect to add_event.html
       });
   });
   </script>
</body>
</html>
