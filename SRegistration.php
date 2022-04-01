<html>
    <body><?php

session_start();

$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'online_tutor');
        
        
        
$SID = $_POST['SID'];
$SUSERNAME = $_POST['SUSERNAME'];
$SFIRSTNAME = $_POST['SFIRSTNAME'];
$SLASTNAME = $_POST['SLASTNAME'];
$SPASSWORD = $_POST['SPASSWORD'];
$CID = $_POST['CID'];

    
$sql="select * from student where SUSERNAME='$SUSERNAME'";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num == 1)
{
    echo"username already Exits";
    
}

else
{
    $reg="insert into student (SID,SUSERNAME,SFIRSTNAME,SLASTNAME,SPASSWORD, CID) values ('$SID','$SUSERNAME','$SFIRSTNAME','$SLASTNAME','$SPASSWORD','$CID')";
    mysqli_query($con,$reg);
    echo"Registration Successful";
    header( "Location: student_dashboard.html" );
    exit ;   
}

?>
    </body>
</html>