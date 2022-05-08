<!DOCTYPE html>

<head>
    <meta name="keywords" content="Tutor Finder, Courses" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

    
    <title>Inter-School Tutoring System </title>

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


 

        </div>
        <table width="558" border="0" cellpadding="1">
	  	    <tr>
	  	    <td>
			
			<p >
			<button>
			<a href="student_dashboard.html">Home</a>
			</button>
	  	    </p>			
			

			</td>
  	        </tr>
            </table>
        

        <!-- note from adesola: the start of the dashboard --->

        <br />
        <h2 align="center"><a href="#">SpeakYourMind!</a></h2>
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