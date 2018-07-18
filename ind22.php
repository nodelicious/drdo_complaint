<?php
session_start();
 if(isset($_SESSION["uname"]))
 {
 if((time()-$_SESSION['lastlogin']) > 900)
 {
	 header('location:logout.php');
 }

 }
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="c.jpg">
    <title>DRDO</title>
     <meta http-equiv="Content-Type" content="text/css" charset="UTF-8">
<meta http-equiv="Content-Language" content="en-us">
<meta name="viewport" content="width=device-width ,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=10">
 <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="jquery1.css">
  <script src="jquery2.js"></script>
  <script src="jquery3.js"></script>
     <style type="text/css">
     body{
      background-image: url("fu.png");
 
      }
     .container{
      margin-top: 0px;
      }
     .well{
  
          background-color:white;
 background: linear-gradient(to right,lavender,lightblue,white);
  
      margin-left: 280px;
      margin-right: 280px;
	  padding-bottom:50px;
	  padding-top:20px;
      background-color: black;
    
     }
     h2{
      background-color: black;
      color: white;
      opacity: 0.9;
		padding-bottom:20px;
     }
     h3{
      

     }
     .btn {
  flex: 1 1 auto;
  margin: 20px;
  padding-left: 30px;
   padding-right: 30px;
  text-align: center;
  text-transform: uppercase;
  transition: 0.5s;
  background-size: 200% auto;
  color: white;
 /* text-shadow: 0px 0px 10px rgba(0,0,0,0.2);*/
  box-shadow: 0 0 20px #eee;
  border-radius: 20px;
 }
.heading{
background-color:green;
 background: -webkit-linear-gradient(#e96443, #904e95);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-size: 32px;
}
.btn:hover {
  background-position: right center; 
}

.btn-3 {
  background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);
}


     </style>
     </head>
<h2><big><img  src="drdo.png"  class="img-circle"  ><b>&nbsp;&nbsp;LASER SCIENCE & TECHNOLOGY CENTER</b></big></h2>
  
<br>
 

  
<br>

<CENTER><h3 style="color:BLACK;" >GRIEVANCE REDRESSAL SYSTEM </h3></CENTER>



  <center> <div class="col-lg-6 fbox" >
<div class="well" style="color: black" >

          <div class="heading" <h3 style="color:blue;"><b><center> LOGIN</center></b></h3></div><BR>
        <CENTER>
        <form class="form-inline" method="POST" action="connect.php">
  <div class="form-group" >
          <span class="glyphicon glyphicon-user"></span>

    <label for="exampleInputName2"><b>USER ID : </b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="username" method="POST" class="form-control"  value="<?php if(isset($_COOKIE["username"])) {echo $_COOKIE["username"];}?>"   required />
  </div><BR><br>
  <div class="form-group">
          <span class="glyphicon glyphicon-lock"></span>

    <label for="exampleInputEmail2"><b>PASSWORD : </b></label>
    <input type="password" name="password" method="POST" class="form-control"  value="<?php if(isset($_COOKIE["password"])) {echo $_COOKIE["password"];}?> "  required />
  </div><BR><br>
  <div class="has-success">
  <div class="checkbox">
    <label>
      <input type="checkbox" name="remember" id="checkboxSuccess" value=>
      <b>REMEMBER ME !</b>
    </label>
  </div>
</div><br><BR>
  <button type="submit" name="submit" class="btn btn-3">SUBMIT</button>
</form></CENTER>


          </div>
          </div>
          
          
          
   
   
  
 </body>
<br>
<footer style="color:red;">Prepared by IT & IS group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php date_default_timezone_set("Asia/Kolkata");echo date('d/m/Y'); ?> &nbsp;<?php echo date('h:i:sa');?></footer>
 </html>
        