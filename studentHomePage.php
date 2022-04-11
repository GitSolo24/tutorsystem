<!DOCTYPE html>

<head>
    <meta name="keywords" content="Tutor Finder, Courses" />
    <link rel="stylesheet" type="text/css" href="kritika_css.css" media="screen,projection" />
    <title>Houston Online Tutors - Student Dashboard </title>

    <style>
        .column {
            float: left;
            width: 25%;
            padding: 10px;
            height: 300px;
            border: 1px solid BLACK;

        }

        .row:after {
            content: "";
            display: table;
            clear: both;

        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        .chat,
        .calendar {
            margin: 0;
            padding: 0;
            position: center;
            border: 3px solid #800020;

        }

        .h2,
        .h3 {
            float: center;
        }
    </style>
</head>



<body>
    <div id="container">


        <div id="logo">
            <p>

                <!--<h2 class="fname"> Houston Online Tutors - Convenient Online Sessions</h2>-->


                <!--  <img src="images/logo.jpg" alt="logo" width="731" height="146" align="left" /></a>  -->

            </p>

        </div>


        <div id="navitabs">
            <h2 class="hide">Sample navigation menu:</h2>
            <p><img src="images/logo2.png" width="150" height="120" alt="logo" />
                <img src="images/background2.jpg" width="860" heights="120" />
            </p>
            \

            <!---  add the link to the student page-->
            <div class="dropdown">
                <button class="dropbtn"><a href="index.html">Home</a></button>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Find Tutors</button>
                <div class="dropdown-content">
                    <a href="course_catalog.html">Course Catalog</a>
                    <a href="FindTutors.html">Find Tutor</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Student Dashboard</button>
                <div class="dropdown-content">
                    <a href="Student.html">Log In</a>
                    <a href="RequestTutor.html">Request A Tutor</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Tutor Dashboard</button>
                <div class="dropdown-content">
                    <a href="Tutor.html">Log In</a>
                    <a href="AboutTutor.html">About Tutor Jobs</a>
                    <a href="FindTutoringJobs.html">Find Tutoring Jobs</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">About Us</button>
                <div class="dropdown-content">
                    <a href="Carrers.html">Carrers</a>
                    <a href="ContactUs.html">Contact Us</a>
                </div>
            </div>

        </div>


        <div id="main">
            <table width="558" border="0" cellpadding="1">
                <tr>
                    <td width="442" align="top">
                        <h2 class="fname"><b>Student's Home </b></h2>
                    </td>
                </tr>
            </table>





            <table width="558" border="0" cellpadding="1">
                <tr>
                    <td>
                        <!-- adding to the home page-->
                        <div class="row">

                            <!-- INBOX-->
                            <div class="column">

                                <table>
                                    <tr>
                                        <th>INBOX</th>

                                    </tr>
                                    <tr>
                                        <td>Re:COMP4212 I would but I am ....<a href="studentinbox.html"> see more </a></td>

                                    </tr>
                                    <tr>
                                        <td>Details About Your Homework #2 ...<a href="studentinbox.html"> see more </a></td>

                                    </tr>
                                    <tr>
                                        <td>TUTOR MATCH: DEVIN MATHIS <a href="studentinbox.html"> see more </a></td>

                                    </tr>
                                    <tr>
                                        <td>TUTOR MATCH: DEVIN MATHIS <a href="studentinbox.html"> see more </a></td>


                                    </tr>
                                </table>
                            </div>
                            <div class="column">
                                <h2> LIVE CHATS </h2>

                                <div class="chat">
                                    <h3><a href="studentLiveChats.php"> CLICK HERE TO START A CHAT</a>
                                </div>
                                </h3>
                            </div>
                            <div class="column">
                                <h2> APPOINTMENTS </h2>
                                <div class="calendar">
                                    <h3><a href="calendarindex.php"> SCHEDULE YOUR MEETING </a>
                                </div>

                            </div>



                        </div>




                    </td>
                </tr>
            </table>
        </div>

        <div id="sidebar">
            <!--<p align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/logo1.png" width="106" height="120" alt="logo" /> 
</p>-->

            <h3 class="fname">News and Events:</h3>
            <ul class="sidelink">
                <li><a href="https://www.insidehighered.com/news/2021/03/16/face-face-peer-tutoring-decimated-pandemic-universities-turn-new-tools-times-and" class="linkcolor" target="_blank">As Students Dispersed, Tutoring Services Adapted</a></li>
                <li><a href="https://www.edsurge.com/news/2020-07-31-to-combat-the-covid-slide-tutoring-program-pairs-elementary-schoolers-with-college-students" target="_blank" class="linkcolor">To Combat the COVID Slide - Tutoring Program Pairs Elementary Schoolers with College Students</a></li>
            </ul>

            <h3 class="fname">Collaboration:</h3>
            <ul class="sidelink">
                <li><a href="https://www.tutor.com/" target="_blank" class="linkcolor">&nbsp;Tutor.com</a></li>
                <li><a href="https://www.pvamu.edu/" target="_blank" class="linkcolor">Prairie View A&M University</a></li>
                <li><a href="https://www.varsitytutors.com/tutoring-houston" target="_blank" class="linkcolor">Varsity Tutors</a></li>
            </ul>
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