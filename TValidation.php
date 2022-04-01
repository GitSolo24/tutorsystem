<?php

session_start();

$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'online_tutor');

$TUSERNAME = $_POST['TUSERNAME'];
$TPASSWORD = $_POST['TPASSWORD'];

$sql="select * from tutor where TUSERNAME='$TUSERNAME' && TPASSWORD = '$TPASSWORD'";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num == 1){
    $_SESSION['TUSERNAME'] = $TUSERNAME;
    header('location:tutor_dashboard.html');
}
else{
    header('location:tutor.html');
}
?>