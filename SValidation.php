<?php

session_start();

$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'online_tutor');

$SUSERNAME = $_POST['SUSERNAME'];
$SPASSWORD = $_POST['SPASSWORD'];

$sql="select * from student where SUSERNAME='$SUSERNAME' && SPASSWORD = '$SPASSWORD'";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num == 1){
    $_SESSION['SUSERNAME'] = $SUSERNAME;
    header('location:student_dashboard.html');
}
else{
    header('location:student.html');
}
?>