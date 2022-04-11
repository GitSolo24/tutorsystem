<!--calendarindex.php-->
<!DOCTYPE html>

<head>
    <meta name="keywords" content="Tutor Finder, Courses" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <title>Houston Online Tutors - Calendar </title>
</head>
<script>
    $(document).ready(function() {
        var calendar = $('#calendar').fullCalendar({
            editable: true,
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            events: 'load.php',
            selectable: true,
            selectHelper: true,
            select: function(start, end, allDay) {
                var title = prompt("Enter Event Title");
                if (title) {
                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                    $.ajax({
                        url: "insert.php",
                        type: "POST",
                        data: {
                            title: title,
                            start: start,
                            end: end
                        },
                        success: function() {
                            calendar.fullCalendar('refetchEvents');
                            alert("Added Successfully");
                        }
                    })
                }
            },
            editable: true,
            eventResize: function(event) {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                var title = event.title;
                var id = event.id;
                $.ajax({
                    url: "update.php",
                    type: "POST",
                    data: {
                        title: title,
                        start: start,
                        end: end,
                        id: id
                    },
                    success: function() {
                        calendar.fullCalendar('refetchEvents');
                        alert('Event Update');
                    }
                })
            },

            eventDrop: function(event) {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                var title = event.title;
                var id = event.id;
                $.ajax({
                    url: "update.php",
                    type: "POST",
                    data: {
                        title: title,
                        start: start,
                        end: end,
                        id: id
                    },
                    success: function() {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event Updated");
                    }
                });
            },

            eventClick: function(event) {
                if (confirm("Are you sure you want to remove it?")) {
                    var id = event.id;
                    $.ajax({
                        url: "deleteevent.php",
                        type: "POST",
                        data: {
                            id: id
                        },
                        success: function() {
                            calendar.fullCalendar('refetchEvents');
                            alert("Event Removed");
                        }
                    })
                }
            },

        });
    });
</script>


<body>
    <div id="container">


        <div id="logo">
            <p>

                <!--<h2 class="fname"> Houston Online Tutors - Convenient Online Sessions</h2>-->


                <!--  <img src="images/logo.jpg" alt="logo" width="731" height="146" align="left" /></a>  -->

            </p>

        </div>



        <div id="main">
            <table width="558" border="0" cellpadding="1">
                <tr>
                    <td width="442" align="top">
                        <p class="fname"><a href="student_dashboard.html">Back to Student Dashboard </a></p>
                    </td>
                </tr>
            </table>
            <!--SPACE FOR THE CALENDAR -->
            <br />
            <h2 align="center"> ISTS Calendar </h2>
            <br />
            <div class="container">
                <div id="calendar"></div>
            </div>


            <!--SPACE FOR THE CALENDAR -->






        </div>




        <div id="footer">
            <tr>
                <td align="top" width="675"> <img src="images/footerline.gif" width=720 height=50 border="0" alt="footer" /></td>
            </tr>

            <tr>
                <td colspan="3" align="center" class="footer"><br /> Copyright &copy; 2021. All Rights Reserved. Houston Online Tutors.
                </td>
            </tr>

        </div>


    </div>
</body>

</html>