
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
               <a href="#" class="menu-toggle">Shoaib</a>
            </div>            

            <nav id="main-nav-wrap">
               <ul class="main-navigation">
                  <li class="current"><a href="index.php" target="_blank" title="">Home</a></li>
                  <li><a  href="insert.php#about" title="">Input Marks</a></li>
                  <li><a  href="view.php#portfolio" title="">View Marks</a></li>
                  <li><a  href="delete.php#services" title="">Delete Marks</a></li>                
             
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
                              <h2>Hello Ma'am</h2>
               <h1 style="color: white">Update Info Below</h1>
               <p class="intro-position">
   <h5>

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
 else {echo "Did not update yet :) ";}
 ?>
 

</h5>
               </p>

            </div>  
            
         </div>               

      </div> <!-- /intro-content --> 
   </section> <!-- /intro -->

<section id="margined">

   <section id="resume" class="grey-section">

 <form method="post" action="#intro" target="_top">
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
      <input type="submit" value="UPDATE" name="submitbtn">
   </td>
</tr> 

</table>
 </form>

</section>



   <footer>
         <div class="col-six tab-full">
            <div class="copyright">
               <span><b>Developed &</b></span>
               <span> <b>© Shoaib Rahman 2019</b></span> 
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