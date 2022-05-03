<?php

error_reporting(0);

require_once("Rate.php");
$rate = new Rate();
$result = $rate->getAllPost();
?>
<HTML>
<HEAD>


<meta name="keywords" content="Tutor Finder, Courses" />
	<link rel="stylesheet" type="text/css" href="kritika_css.css" media="screen,projection" />
	<title>Inter-School Tutoring System </title>
	
<style>
body{width:610;}
.demo-table {width: 100%;border-spacing: initial;margin: 20px 0px;word-break: break-word;table-layout: auto;line-height:1.8em;color:#333;}
.demo-table th {background: #999;padding: 5px;text-align: left;color:#FFF;}
.demo-table td {border-bottom: #f0f0f0 1px solid;background-color: #ffffff;padding: 5px;}
.demo-table td div.feed_title{text-decoration: none;color:#00d4ff;font-weight:bold;}
.demo-table ul{margin:0;padding:0;}
.demo-table li{cursor:pointer;list-style-type: none;display: inline-block;color: #F0F0F0;text-shadow: 0 0 1px #666666;font-size:20px;}
.demo-table .highlight, .demo-table .selected {color:#F4B30A;text-shadow: 0 0 1px #F48F0A;}
</style>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>function highlightStar(obj,id) {
	removeHighlight(id);		
	$('.demo-table #tutorial-'+id+' li').each(function(index) {
		$(this).addClass('highlight');
		if(index == $('.demo-table #tutorial-'+id+' li').index(obj)) {
			return false;	
		}
	});
}

function removeHighlight(id) {
	$('.demo-table #tutorial-'+id+' li').removeClass('selected');
	$('.demo-table #tutorial-'+id+' li').removeClass('highlight');
}

function addRating(obj,id) {
	$('.demo-table #tutorial-'+id+' li').each(function(index) {
		$(this).addClass('selected');
		$('#tutorial-'+id+' #rating').val((index+1));
		if(index == $('.demo-table #tutorial-'+id+' li').index(obj)) {
			return false;	
		}
	});
	$.ajax({
	url: "add_rating.php",
	data:'id='+id+'&rating='+$('#tutorial-'+id+' #rating').val(),
	type: "POST"
	});
}

function resetRating(id) {
	if($('#tutorial-'+id+' #rating').val() != 0) {
		$('.demo-table #tutorial-'+id+' li').each(function(index) {
			$(this).addClass('selected');
			if((index+1) == $('#tutorial-'+id+' #rating').val()) {
				return false;	
			}
		});
	}
} </script>

</HEAD>


<BODY>




<div id="container">


<div id="logo">
 <p>
 
</p>

</div>


<div id="navitabs">
  <h2 class="hide">Sample navigation menu:</h2>
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
   
</div>

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

		<table width="558" border="0" cellpadding="1">
	  	    <tr>
	  	      <td width="442" align="top" ><h2 class="fname"><b>Student Dashboard </b></h2>
              </td>
			</tr>
			</table>





	  	    <table width="558" border="0" cellpadding="1">
	  	    <tr>
	  	    <td>
			
						
			<tr>
			<td>
			<p >
			<button>
			Home
			</button>
	  	    </p>
			</td>
			</tr>
			
	
			
			</td>
  	        </tr>
            </table>
			
			<table class="demo-table">
<tbody>
<tr>
<th><strong>RateMYTutor </strong></th>
</tr>
<?php
if(!empty($result)) {
$i=0;
foreach ($result as $tutorial) {
?>
<tr>
<td valign="top">
<div class="feed_title"><?php echo $tutorial["title"]; ?></div>
<div id="tutorial-<?php echo $tutorial["id"]; ?>">
<input type="hidden" name="rating" id="rating" value="<?php echo $tutorial["rating"]; ?>" />
<ul onMouseOut="resetRating(<?php echo $tutorial["id"]; ?>);">
  <?php
  for($i=1;$i<=5;$i++) {
  $selected = "";
  if(!empty($tutorial["rating"]) && $i<=$tutorial["rating"]) {
	$selected = "selected";
  }
  ?>
  <li class='<?php echo $selected; ?>' onmouseover="highlightStar(this,<?php echo $tutorial["id"]; ?>);" onmouseout="removeHighlight(<?php echo $tutorial["id"]; ?>);" onClick="addRating(this,<?php echo $tutorial["id"]; ?>);">&#9733;</li>  
  <?php }  ?>
<ul>
</div>
<div><?php echo $tutorial["description"]; ?></div>
</td>
</tr>
<?php		
}
}
?>
</tbody>
</table>

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
      <td colspan="3" align="center" class="footer"><br /> Copyright &copy; 2022. All Rights Reserved.  Inter-School Tutoring System. 
      </td>
    </tr>
          
  </div>


</div>

</BODY>
</HTML>