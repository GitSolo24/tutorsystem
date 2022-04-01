<html>
    <body><?php

session_start();

$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'online_tutor');
        
        
        
$TID = $_POST['TID'];
$TUSERNAME = $_POST['TUSERNAME'];
$TFIRSTNAME = $_POST['TFIRSTNAME'];
$TLASTNAME = $_POST['TLASTNAME'];
$TPASSWORD = $_POST['TPASSWORD'];
$CID = $_POST['CID'];

    
$sql="select * from tutor where TUSERNAME='$TUSERNAME'";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num == 1)
{
    echo"username already Exits";
    
}

else
{
    $reg="insert into tutor (TID,TUSERNAME,TFIRSTNAME,TLASTNAME,TPASSWORD, CID) values ('$TID','$TUSERNAME','$TFIRSTNAME','$TLASTNAME','$TPASSWORD','$CID')";
    mysqli_query($con,$reg);
    echo"Registration Successful";
    header( "Location: tutor_dashboard.html" );
    exit ;   
}

?>
    </body>
</html>