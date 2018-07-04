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
     <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/bootstrap-theme.min.css" rel="stylesheet">
     <link href="theme.css" rel="stylesheet">
    <link href="css/hello.css" rel="stylesheet">
     <link rel="icon" href="c.jpg" type="image/gif" sizes="15*15">
     <style type="text/css">
     body{
      background-image: url("fu.png");
      }
     .container{
      margin-top: 0px;
      }
     .well{
      background-image: url("d.png");
      margin-left: 350px;
      margin-right: -240px;
      background-color: black;
      opacity: 0.9;
     }
     h1{
      background-color: black;
      color: white;
      opacity: 0.9;

     }
     h3{
       background: -webkit-linear-gradient(#e96443, #904e95);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-size: 32px;

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

.btn:hover {
  background-position: right center; 
}

.btn-3 {
  background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);
}


     </style>
     </head>
<h1><big><img  src="drdo.png"  class="img-circle">&nbsp;&nbsp;&nbsp;&nbsp;<b>LASER SCIENCE AND TECHNOLOGY CENTER</b></big></h1>
  
<br>
 

  
<br>
  <div class="col-lg-6 fbox" >
<div class="well" style="color: black" >

          <h3 style="color:blue;"><b><center> LOGIN</center></b></h3><BR>
        <CENTER>
        <form class="form-inline" method="POST" action="connect.php">
  <div class="form-group" >
          <span class="glyphicon glyphicon-user"></span>

    <label for="exampleInputName2">USERID:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="username" method="POST" class="form-control"  value="<?php if(isset($_COOKIE["username"])) {echo $_COOKIE["username"];}?>"   required />
  </div><BR><br>
  <div class="form-group">
          <span class="glyphicon glyphicon-lock"></span>

    <label for="exampleInputEmail2">PASSWORD:</label>
    <input type="password" name="password" method="POST" class="form-control"  value="<?php if(isset($_COOKIE["password"])) {echo $_COOKIE["password"];}?> "  required />
  </div><BR><br>
  <div class="has-success">
  <div class="checkbox">
    <label>
      <input type="checkbox" name="remember" id="checkboxSuccess" value=>
      REMEMBER ME!
    </label>
  </div>
</div><br>
  <button type="submit" name="submit" class="btn btn-3">SUBMIT</button>
</form></CENTER>


          </div>
          </div>
          
          
          
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
   
    <script src="js/ie10-viewport-bug-workaround.js"></script>
   
   
  
 </body>
 </html>
        