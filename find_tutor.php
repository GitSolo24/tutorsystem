<!DOCTYPE html>

<head>
	<meta name="keywords" content="Tutor Finder, Courses" />
	<link rel="stylesheet" type="text/css" href="kritika_css.css" media="screen,projection" />
<<<<<<< HEAD
	<title>Houston Online Tutors - Tutor Results  </title>
=======
	<title>Inter-School Tutoring System - Tutor Results  </title>
>>>>>>> 641bbdcdacad95f98de297a6d860f6cfa028c762
</head>

<body>

<div id="container">


<div id="logo">
 <p>
 
<<<<<<< HEAD
 <!--<h2 class="fname"> Houston Online Tutors - Convenient Online Sessions</h2>-->
 
 
<!--  <img src="images/logo.jpg" alt="logo" width="731" height="146" align="left" /></a>  -->

=======
>>>>>>> 641bbdcdacad95f98de297a6d860f6cfa028c762
</p>

</div>


<div id="navitabs">
  <h2 class="hide">Sample navigation menu:</h2>
<<<<<<< HEAD
  <p><img src="images/logo1.png" width="106" height="120" alt="logo" />
  <br />
    <a class="navitab" href="index.html"><b class="naviname">Home</b></a><span class="hide"> | </span> 
    <a class="navitab" href="FindTutors.html"><b class="naviname">Find Tutors</b></a><span class="hide"> | </span> 
    <a class="navitab" href="Student.html"><b class="naviname">Student Dashboard</b></a><span class="hide"> | </span> 
    <a class="navitab" href="Tutor.html"><b class="naviname">Tutor Dashboard</b></a><span class="hide">|  </span> 
    <a class="navitab" href="contactus.html"><b class="naviname">Contact Us</b></a>
  </p>
   
=======
  <p><img src="images/logo2.png" width="150" height="120" alt="logo" /> 
	<img src="images/background2.jpg" width="860" height="120" /> 
  </p>
   
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
   
>>>>>>> 641bbdcdacad95f98de297a6d860f6cfa028c762
</div>



<<<<<<< HEAD
<div id="main">
=======

<div id="main">

	<p>
			<img src="images/background1.jpg" width="800" height="10" /> 
			</p>
			
			<p>
				<img src="images/pic6.jpg" width="106" height="120" alt="" /> 
				<img src="images/pic5.jpg" width="106" height="120" alt="" /> 
				<img src="images/pic4.jpg" width="106" height="120" alt="" /> 
				<img src="images/pic1.jpg" width="106" height="120" alt="" /> 
				<img src="images/pic2.jpg" width="106" height="120" alt="" /> 
				<img src="images/pic6.jpg" width="106" height="120" alt="" /> 
				<img src="images/pic5.jpg" width="106" height="120" alt="" /> 
			</p>
>>>>>>> 641bbdcdacad95f98de297a6d860f6cfa028c762
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

<<<<<<< HEAD
</td>
</tr>
</table>			
=======

<p>
			<img src="images/background1.jpg" width="800" height="10" /> 
			</p>
</td>
</tr>


</table>


 
				 <table width="800" border="0" cellpadding="1">
	  	    <tr>
	  	      <td width="442" align="top" ><h2 class="fname"><b>Follow Inter-School Online Tutoring</b></h2><br/>
                      <a href="https://www.facebook.com/foreverbeautiful2020" target="_blank">
                      <img src="images/sn-facebook.png" width="40" height="40" alt="" /></a>&nbsp;&nbsp;&nbsp;&nbsp
                      <a href="https://www.instagram.com/foreverbeautiful_2020/" target="_blank">
                     <img src="images/sn-instagram.png" width="40" height="40" alt="" /></a>&nbsp;&nbsp;&nbsp;&nbsp
                     <a href="https://www.youtube.com/channel/UC7cPluS4L-3WX7fuxj2BsvA" target="_blank">
                     <img src="images/sn-youtube.png" width="40" height="40" alt="" /></a>
                    </td>
  	            </tr>
                   </table>
				   
				</p>   
				    <tr>
	  	      <td>
                     <img src="images/background2.jpg" width="1010" height="120" /> 
				</p>
                    </td>
  	            </tr>
                   </table>
				   			
>>>>>>> 641bbdcdacad95f98de297a6d860f6cfa028c762
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
<<<<<<< HEAD
      <td colspan="3" align="center" class="footer"><br /> Copyright &copy; 2021. All Rights Reserved.  Houston Online Tutors. 
=======
      <td colspan="3" align="center" class="footer"><br /> Copyright &copy; 2022. All Rights Reserved.  Houston Online Tutors. 
>>>>>>> 641bbdcdacad95f98de297a6d860f6cfa028c762
      </td>
    </tr>
          
  </div>


</div>
</body>
</html>