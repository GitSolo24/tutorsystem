<!DOCTYPE html>
<html>
    <head>
	<title>Inter-School Tutoring System </title>
        <style type="text/css">
            .container{ border: 1px solid black; background-color: #66ff99; padding: 10px; }
            #showvotebar { margin-top: 20px;}
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript">
            function countvalue($val){
                $.ajax({
                    type: 'POST',
                    url: 'updatedata.php', //call storeemdata.php to store form data
                    data: { 
                    val: $val
                    },
                    success: function(response ) { 
                        var ajaxDisplay = document.getElementById('showvotebar');
                        ajaxDisplay.innerHTML = response;
                    }
                });
            }
        </script>
    </head>
    <body>
        <center>
			Who is the best Tutor? Please cast your vote.
            <div class="container">
            <?php
			 error_reporting (0) ;
            include('db_connection.php');
            $mysql_query = "SELECT * FROM tutorial WHERE is_enabled = '1' ";
            $result = mysqli_query($con, $mysql_query);
            while($row = mysqli_fetch_array($result)) {
                ?>
                <button name="vote" onclick="countvalue(this.value)" value="<?php echo $row['id']; ?>"  class="btn btn-primary">
                    <?php echo '<b>'.$row['tutorial'].'</b>'; ?>
                </button>
                <?php
            }
            ?>
            <div id="showvotebar">
                <?php 
                $data = array('progress-bar-danger', 'progress-bar-warning', 'progress-bar-info');
                $total = '';
                $result= mysqli_query($con, "SELECT * from tutorial where is_enabled ='1'");
                while($row = mysqli_fetch_array($result)){
                   $total = $total + $row[2];
                } 
                $i = 0;
                $result = mysqli_query($con, "SELECT * from tutorial where is_enabled ='1'");
                while($row = mysqli_fetch_array($result)){ 
                    $percentage = ($row[2] / $total) * 100;
                    echo '<div class="progress">';
                    echo '<div class="progress-bar '.$data[$i].'" role="progressbar" aria-valuenow="'.$percentage.'" aria-valuemin="0" aria-valuemax="100" style="width:'.$percentage.'%">';
                    echo $row[1].'('.round($percentage).')';
                    echo '</div>';
                    echo '</div>';
                    $i++;
                }
                ?>
            </div>
			<button>
			<a href="student_dashboard.html">Home</a>
			</button>
        </center>
		
		
    </body>
</html>