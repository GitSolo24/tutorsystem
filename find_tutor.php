<!DOCTYPE html>

<head>
	<meta name="keywords" content="Tutor Finder, Courses" />
	<link rel="stylesheet" type="text/css" href="kritika_css.css" media="screen,projection" />
	<title>Houston Online Tutors - Tutor Results  </title>
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
  <p><img src="images/logo1.png" width="106" height="120" alt="logo" />
  <br />
    <a class="navitab" href="index.html"><b class="naviname">Home</b></a><span class="hide"> | </span> 
    <a class="navitab" href="FindTutors.html"><b class="naviname">Find Tutors</b></a><span class="hide"> | </span> 
    <a class="navitab" href="Student.html"><b class="naviname">Student Dashboard</b></a><span class="hide"> | </span> 
    <a class="navitab" href="Tutor.html"><b class="naviname">Tutor Dashboard</b></a><span class="hide">|  </span> 
    <a class="navitab" href="contactus.html"><b class="naviname">Contact Us</b></a>
  </p>
   
</div>



<div id="main">
			<table width="558" border="0" cellpadding="1">
	  	    <tr>
	  	      <td width="442" align="top" ><h2 class="fname"><b>Tutor results are listed below </b></h2>
             	     </td>
			</tr>
			<tr>
			<td>

<?php

include('db_connection.php');
mysqli_query($con,"use online_tutor");

$CNAME = $_POST['CNAME'];
$sql="
      select TID, TFIRSTNAME, TLASTNAME from tutor where CID = (select CID from course where cname ='$CNAME') ;
     ";

$ret = mysqli_query($con, $sql);

echo "Tutor for:", "&nbsp",$CNAME,"<br><br>"; 

while ($row = mysqli_fetch_array($ret)){
      echo "Tutor ID: " .$row['TID']," <br> Name: " . $row['TFIRSTNAME']. " " . $row['TLASTNAME'],"<br><br>";
}
  
 ?>

</td>
</tr>
</table>			
</div>




<div id="sidebar">
<!--<p align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/logo1.png" width="106" height="120" alt="logo" /> 
</p>-->
    
<h3 class="fname">News and Events:</h3>
	  <ul class="sidelink">
      	    <li ><a href="https://www.insidehighered.com/news/2021/03/16/face-face-peer-tutoring-decimated-pandemic-universities-turn-new-tools-times-and" class="linkcolor" target="_blank">As Students Dispersed, Tutoring Services Adapted</a></li>
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
     <td align="top" width="675"> <img src="images/footerline.gif" width=720 height=50 border="0" alt="footer"/></td>
    </tr>

    <tr>
      <td colspan="3" align="center" class="footer"><br /> Copyright &copy; 2021. All Rights Reserved.  Houston Online Tutors. 
      </td>
    </tr>
          
  </div>


</div>
</body>
</html>