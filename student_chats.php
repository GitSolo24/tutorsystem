<!DOCTYPE html>

<head>
    <meta name="keywords" content="Tutor Finder, Courses" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

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
        <br>

        <a href="student_dashboard.html"> Back to the Student's Page </a>
        <br>
        <br>
        \

        <!-- note from adesola: the start of the dashboard --->

        <br />
        <h2 align="center"><a href="#">Speak Your Mind!</a></h2>
        <br />
        <div class="container">
            <form method="POST" id="comment_form">
                <div class="form-group">
                    <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
                </div>
                <div class="form-group">
                    <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" name="comment_id" id="comment_id" value="0" />
                    <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
                </div>
            </form>
            <span id="comment_message"></span>
            <br />
            <div id="display_comment"></div>
        </div>
        <!-- note from adesola:  the end of the dashboard --->









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


<script>
    $(document).ready(function() {

        $('#comment_form').on('submit', function(event) {
            event.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                url: "add_comment.php",
                method: "POST",
                data: form_data,
                dataType: "JSON",
                success: function(data) {
                    if (data.error != '') {
                        $('#comment_form')[0].reset();
                        $('#comment_message').html(data.error);
                        $('#comment_id').val('0');
                        load_comment();
                    }
                }
            })
        });

        load_comment();

        function load_comment() {
            $.ajax({
                url: "fetch_comment.php",
                method: "POST",
                success: function(data) {
                    $('#display_comment').html(data);
                }
            })
        }

        $(document).on('click', '.reply', function() {
            var comment_id = $(this).attr("id");
            $('#comment_id').val(comment_id);
            $('#comment_name').focus();
        });

    });
</script>