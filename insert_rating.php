<?php
if(isset($_POST['submit_rating']))
{
  include('db_connection.php');
  mysqli_query($con,"use online_tutor");
  
  $php_rating=$_POST['phprating'];
  $asp_rating=$_POST['asprating'];
  $jsp_rating=$_POST['jsprating'];
  $insert=mysqli_query($con, "insert into rating values('','$php_rating','$asp_rating','$jsp_rating')");
}
?>