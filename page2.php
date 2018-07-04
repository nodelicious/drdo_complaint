<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/css" charset="UTF-8">
<meta http-equiv="Content-Language" content="en-us">
<meta name="viewport" content="width=device-width ,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=10">
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
<link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/bootstrap-theme.min.css" rel="stylesheet">
     <link href="theme.css" rel="stylesheet">
    <link href="css/hello.css" rel="stylesheet">
<link rel="stylesheet" type="text/css">
<style>
body{
background-color:white;
 background: linear-gradient(to right,lightblue,white);
}

 h1{
      background-color: black;
      color: white;
    

     }
     .container{
	background-image: url("zx.jpg");
	border-style:solid;
	
	border-width:8px;
	margin-left:320px;
	margin-right:320px;
	padding-left: 100px;
	padding-right: 100px;
	
}
.btn {
  flex: 1 1 auto;
  margin: 30px;
  padding-left: 80px;
   padding-right: 80px;
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

.btn-2 {
  background-image: linear-gradient(to right, #ffecd2 0%, #fcb69f 51%, #ffecd2 100%);
}
.btn-3 {
  background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);
}
     </style>
</head>
<body>
  
   <h1><big><img  src="drdo.png"  class="img-circle">&nbsp;&nbsp;&nbsp;&nbsp;<b>LASER SCIENCE AND TECHNOLOGY CENTER</b></big></h1>
  
  
    
   <div class="container theme-showcase" role="main">
    <div align="center">
				<form name=frm_transportform method="POST" action="">
				<img type="submit" class="btn btn-2" src="complaint.png"  class="img-circle" class="img-responsive"value=" New Complaint " name="form" style="color: #800000; font-weight: bold"  onClick="parent.open('complaint.php')"'>
				</form>
			</div>
  <div align="center">
			<form name=frm_status method=post action="">
				<td width="301" align="center" >
				<img class="btn btn-2" src="status.png"  class="img-circle" class="img-responsive" type="submit" value="       Status     " name="status" style="color: #800000; font-weight: bold" onClick="parent.open('status.php')"'>
				</form>
</div>
<div align="center">
            <form name=frm_status method=post action="">
			<img type="submit" class="btn btn-2" src="box.png"  class="img-circle" class="img-responsive" value=" Mailbox " name="form" style="color: #800000; font-weight: bold"  onClick="parent.open('mailbox.php')"'>
			</form>
				
</div>	
	<center>
   <form name=frm_status method = "post" action="">
     <input type="submit" class="btn btn-3" value="Logout" name="logout btn"  onClick="parent.open('logout.php')">
   </form>
   
</center>


</div>
 
					


  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
   
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
  </html>
