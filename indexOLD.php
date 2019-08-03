=======OLD
	<!--
	@Author: Shoaib Rahman
	-->
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Shoaib</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">   
   <link rel="stylesheet" href="css/style.css">   

   <!-- script
   ================================================== -->   
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">
</head>
<body id="top" data-spy="scroll">
 
<!-- header 
   ================================================== -->
   <header>   	
   	<div class="row">

  		   		<div class="top-bar">

   			<a class="menu-toggle" href="#"><span>Menu</span></a>

	   		<div class="logo">
		         <a href="#">Shoaib</a>
		      </div>		      

		   	<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
						<li><a class="smoothscroll"  href="#insert " title="">Input Marks</a></li>
						<li><a class="smoothscroll"  href="#update " title="">Update Marks</a></li>
						<li><a class="smoothscroll"  href="#view " title="">View Marks</a></li>
						<li><a class="smoothscroll"  href="#delete " title="">Delete Marks</a></li>					
						<li><a class="smoothscroll"  href="#contact" title="">Contact</a></li>			
					</ul>
				</nav>    		
   		</div> <!-- /top-bar --> 
   		
   	</div> <!-- /row --> 		
   </header> <!-- /header -->

	<!-- intro section
   ================================================== -->
   <section id="intro">   

<div id="particles-js" style="position: absolute;z-index: 2;"><canvas class="particles-js-canvas-el" width="1349" height="600" style="width: 100%; height: 100%;"></canvas></div>
   	<div class="intro-content" style="position: relative;">
	   	<div class="intro-overlay"></div>
   	   		<div class="row">
   			<div class="col-twelve">
	   			<h4>بسم الله الرحمن الرحيم</h4>
	   			<h5>Hello Welcome Guy!</h5>
	   			<h1>SHOAIB RAHMAN</h1>

	   			<p class="intro-position">
	   				Strength : <span>Oracle Database</span>
	   				<span>Software Testing</span> 
	   			</p>

	   			<a class="button stroke smoothscroll" href="#insert " title="">Below More</a>

	   		</div>  
   			
   		</div>   		 		

   	</div> <!-- /intro-content --> 

   	<ul class="intro-social">        
         <li><a href="https://www.facebook.com/sharer/sharer.php?u=ShoaibRahman.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
         <li><a href="#" target="_blank"><i class="fa fa-google"></i></a></li>
         <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
         <li><a href="#" target="_blank"><i class="fa fa-reddit"></i></a></li>
         <li><a href="https://twitter.com/home?status=ShoaibRahman.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
	     <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
         <li><a href="#" target="_blank"><i class="fa fa-tumblr"></i></a></li>
         <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
               </ul> <!-- /intro-social -->      	
   </section> <!-- /intro -->

<section id="margined">

   <!-- Insert section
   ================================================== -->
   <section id="about" style="text-align: center;">
    	<?php
 	include("connection.php");
 if (isset($_POST['submitbtn'])) 
 {
  	$studid = $_POST['stdid'];
	$mark = $_POST['marks'];
	$labid = $_POST['labid'];
	$sem = $_POST['semester'];
	
 	$query= "CALL std_marks_entry('$studid','$labid','$mark','$sem')";
 	if (mysqli_query($conn,$query)) {
 		 		header("location:index.php?inserted=1");
 	}
} 
 if (isset($_GET["inserted"])) {
 	echo '<script>alert("Yeee! Data inserted Succesfully!")</script>';
 }
 else {echo "Did not insert yet :) ";}
 ?>
 
 <form method="post" action="">
<label><h1>Adv Db Lab final Marks Entry</h1></label>
<table style="text-align: center;">
<tr>
	<td>
	<label>Student ID</label>
	</td>	
	<td>
	<input type="text" name="stdid" id="stdid" maxlength="11" placeholder="162-35-16xx" required="true">	
	</td>	
</tr>
<tr>
	<td>
	<label>Lab ID</label>
	</td>	
	<td>
	<input type="text" name="labid" id="labid" maxlength="6" placeholder="SWE423" required="true">	
	</td>	
</tr>
<tr>
	<td>
		<label>Marks</label>
 	</td>
 	<td><input type="number" name="marks" id="marks" max="20" placeholder=" Out of 20" required="true">
 	</td>
</tr>
<tr>
	<td>
		<label>Semester</label>
	</td>
	<td>
	 <select id="semester" name="semester" required="true">
	<option value="summer" >Summer</option>
	<option value="spring" >Spring</option>
	<option value="fall" >Fall</option></select>	
	</td>
	</tr>
<tr>
	<td></td>
	<td>
		<input type="submit" name="submitbtn">
	</td>
</tr>	
<tr>
	<td><a href="/myadvdbproject/viewmarks.php" target="_blank">View Results </a></td>
	<td><a href="/myadvdbproject/update.php" target="_blank"> Update Results </a></td>
	<td><a href="/myadvdbproject/delete.php" target="_blank"> Delete Results</a></td>
</tr>
</table>
 </form>  
   </section>
   
<!-- Update Sction
==================================-->

 <section id="resume" style="text-align: center;">
  
 	<?php
 	include("connection.php");
 if (isset($_POST['submitbtn'])) 
 {
  	$studid = $_POST['stdid'];
	$labid = $_POST['labid'];
	$sem = $_POST['semester'];
	$mark = $_POST['marks'];
	
 	$query= "CALL update_std('$studid','$labid','$sem','$mark')";
 	if (mysqli_query($conn,$query)) {
 		 		header("location:update.php?Updated=1");
 	}
} 
 if (isset($_GET["Updated"])) {
 	echo '<script>alert("Xoss! Mars Updated Succesfully!")</script>';
 }
 else {echo "Did not insert yet :) ";}
 ?>
 
 <form method="post" action="">
<label><h1>Adv Db Lab final Marks Update</h1></label>
<table>
<tr>
	<td>
	<label>Student ID</label>
	</td>	
	<td>
	<input type="text" name="stdid" id="stdid" maxlength="11" placeholder="162-35-16xx" required="true">	
	</td>	
</tr>
<tr>
	<td>
		<label>New Marks</label>
 	</td>
 	<td><input type="number" name="marks" id="marks" max="20" placeholder=" Out of 20" required="true">
 	</td>
</tr>
<tr>
	<td>
		<label>Select Lab ID</label>
	</td>
	<td>
    <select id="labid" name="labid" required="true" required="true">
	<option value="swe422" >Telecom - SWE 422</option>
	<option value="swe423" >Advanced DB - SWE 423</option>
	<option value="swe424" >Network Security - SWE 424</option>
	<option value="swe425" >Intro to Database - SWE 425</option>
	</select>	
	</td>
</tr>
<tr>
	<td>
		<label>Semester</label>
	</td>
	<td>
    <select id="semester" name="semester" required="true">
	<option value="summer" >Summer</option>
	<option value="spring" >Spring</option>
	<option value="fall" >Fall</option></select>	
	</td>
	</tr>
<tr>
	<td></td>
	<td>
		<input type="submit" name="submitbtn">
	</td>
</tr>	
<tr>
	<td><a href="/index.php" target="_blank">HOME</a></td>
	<td><a href="/myadvdbproject/insert.php" target="_blank">View Results </a></td>
	<td><a href="/myadvdbproject/viewmarks.php" target="_blank"> Input Results </a></td>
	<td><a href="/myadvdbproject/delete.php" target="_blank"> Delete Results</a></td>
</tr>
</table>
 </form>
  </section>

 <section id="portfolio" style="text-align: center;">
  
<?php
 	include("connection.php");
 if (isset($_POST['submitbtn'])) 
 {
  	$studid = $_POST['stdid'];
	$labid = $_POST['labid'];
	$sem = $_POST['semester'];
	
//$query= "CALL vp('$studid','$labid','$sem')";
//	$query="select * from students_marks where std_id='162-35-1688' and lab_id='swe423' and semester='fall'";
//	if (mysqli_query($conn,$query)) {

//	$result=mysqli_query($conn,$query);
//	$result = mysqli_query($conn, "CALL test2('".$studid."')") or die("failed:".mysqli_error());
	$result = mysqli_query($conn, "CALL vp('".$studid."','".$labid."','".$sem."')") or die("failed:".mysqli_error());


while ($rows=mysqli_fetch_array($result)) {
	$id=NULL;
	$marks=NULL;
	$sem=NULL;
	$tname=null;
	
		$lid= $rows["lab_id"];
		$marks= $rows["std_marks"];
		$sem= $rows["semester"];
		$tname= $rows["teacher_name"];
echo "<table><tr><th><td>ID</td><td>Marks</td><td>Semester</td><td>Teacher</td></th></tr>";
echo "<tr>";
echo "<td></td>";
echo "<td>" .$lid. "</td>" ;
echo "<td>" .$marks. "</td>"; 
echo "<td>". $sem. "</td>" ;
echo "<td>". $tname. "</td>" ;
echo "<tr>";
echo "</table>";
}
}
//}
?>


   
<!-- View Sction
==================================-->

<label><h1>Marks View</h1></label>

 <form method="post" action="">
<table>
<tr>
	<td>
	<label>Student ID</label>
	</td>	
	<td>
	<input type="text" name="stdid" id="stdid" maxlength="11" placeholder="162-35-16xx">	
	</td>	
</tr>
<tr>
	<td>
		<label>Lab ID?</label>
	</td>
	<td>
	<select id="labid" name="labid" required="true">
	<option value="swe423" >SWE423</option>
	<option value="swe425" >SWE425</option>
	<option value="swe424" >SWE424</option></select>	
	</td>
	</tr>
<tr>
	<td>
		<label>Semester?</label>
	</td>
	<td>
	 <select id="semester" name="semester" required="true">
	<option value="summer" >Summer</option>
	<option value="spring" >Spring</option>
	<option value="fall" >Fall</option></select>	
	</td>
	</tr>
<tr>
	<td></td>
	<td>
		<input type="submit" name="submitbtn">
	</td>
</tr>	
<tr>
	<td><a href="/myadvdbproject/index.php" target="_blank">Insert Marks</a></td>
</tr>

</table>
 </form>
  </section>

 <section id="services" style="text-align: center;">
   	<?php
 	include("connection.php");
 if (isset($_POST['submitbtn'])) 
 {
  	$studid = $_POST['stdid'];
	$labid = $_POST['labid'];
	$sem = $_POST['semester'];
	$mark = $_POST['marks'];
	
 	$query= "CALL update_std('$studid','$labid','$sem','$mark')";
 	if (mysqli_query($conn,$query)) {
 		 		header("location:update.php?Updated=1");
 	}
} 
 if (isset($_GET["Updated"])) {
 	echo '<script>alert("Xoss! Mars Updated Succesfully!")</script>';
 }
 else {echo "Did not insert yet :) ";}
 ?>
 
 <form method="post" action="">
<label><h1>Adv Db Lab final Marks Update</h1></label>
<table>
<tr>
	<td>
	<label>Student ID</label>
	</td>	
	<td>
	<input type="text" name="stdid" id="stdid" maxlength="11" placeholder="162-35-16xx" required="true">	
	</td>	
</tr>
<tr>
	<td>
		<label>New Marks</label>
 	</td>
 	<td><input type="number" name="marks" id="marks" max="20" placeholder=" Out of 20" required="true">
 	</td>
</tr>
<tr>
	<td>
		<label>Select Lab ID</label>
	</td>
	<td>
    <select id="labid" name="labid" required="true" required="true">
	<option value="swe422" >Telecom - SWE 422</option>
	<option value="swe423" >Advanced DB - SWE 423</option>
	<option value="swe424" >Network Security - SWE 424</option>
	<option value="swe425" >Intro to Database - SWE 425</option>
	</select>	
	</td>
</tr>
<tr>
	<td>
		<label>Semester</label>
	</td>
	<td>
    <select id="semester" name="semester" required="true">
	<option value="summer" >Summer</option>
	<option value="spring" >Spring</option>
	<option value="fall" >Fall</option></select>	
	</td>
	</tr>
<tr>
	<td></td>
	<td>
		<input type="submit" name="submitbtn">
	</td>
</tr>	
</table>
 </form>
  </section>


</section>



   <footer>
      	<div class="col-six tab-full">
	      	<div class="copyright">
		        	<span><b>Developed &</b></span>
		        	<span> <b>© Shoaib Rahman 2017</b></span> 
		         </div>		                  
	      	</div>

	      	<div id="go-top">
		         <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
		      </div>

      	</div> <!-- /row -->     	
   </footer>  

   <div id="preloader"> 
  	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>
	<script src="js/particles.js"></script>
   <script src="js/app.js"></script>

   
</body>

</html>