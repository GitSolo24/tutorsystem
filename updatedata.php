<?php
 error_reporting (0) ;
include("db_connection.php");
if($_POST['val'])
{
    $id = $_POST['val']; 
    $newcout = '3';
    $result = mysqli_query($con, "SELECT * from tutorial where id= '$id' AND is_enabled ='1'");
    $row = mysqli_fetch_row($result);
    $count = $row[2]+1;
    $update = "UPDATE `tutorial` SET `count` = '$count' WHERE `id` = '$id' ";
    if(mysqli_query($con, $update)){
        $total = '';
        $result= mysqli_query($con, "SELECT * from tutorial where is_enabled ='1'");
        while($row = mysqli_fetch_array($result)){
            $total = $total + $row[2];
        }
        $i = 0;
        $data = array('progress-bar-danger', 'progress-bar-warning', 'progress-bar-info');
        $result=mysqli_query($con, "SELECT * from tutorial where is_enabled ='1'");
        while($row=mysqli_fetch_array($result)){
            $percentage = ($row[2] / $total) * 100;
            echo '<div class="progress">';
            echo '<div class="progress-bar '.$data[$i].'" role="progressbar" aria-valuenow="'.$percentage.'" aria-valuemin="0" aria-valuemax="100" style="width:'.$percentage.'%">';
            echo $row[1].'('.round($percentage).')';
            echo '</div>';
            echo '</div>';
            $i++;
        }
    }
}
?>