<!DOCTYPE html>
<html>
<head>
   <title>Dynamic Full Calendar</title>
   <!--link for FullCalendar and Bootstrap-->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" />
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   <!-- Linking jQuery, Popper.js, and Bootstrap JS -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <!-- Linking Moment.js and FullCalendar JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
</head>
<body>
    <!--calendar container-->
   <div id="calendar"></div>


   <!--add event button-->
   <button id="addEventBtn" class="btn btn-primary">Add Event</button>


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
           window.location.href = 'add-event.html'; //redirect to add_event.html
       });
   });
   </script>
</body>
</html>
