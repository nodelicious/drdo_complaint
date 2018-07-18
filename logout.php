
<!DOCTYPE html>
<html>
<head>
  <link href="css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="style2.css">
   <link href="css/bootstrap-theme.min.css" rel="stylesheet">
     <link href="theme.css" rel="stylesheet">
    <link href="css/hello.css" rel="stylesheet">
<!--     <link rel="icon" href="c.jpg" type="image/gif" sizes="15*15"> -->
 <style type="text/css">
 
 
 .jumbotron{
   background: blue; 
    background: linear-gradient(to right, lightblue , white); 
      margin-left:120px; 
      margin-right:120px;
      margin-top: 150px;
}
.header{
background-color:black;
color:white
}
 .container{
	background-image: url("tile.jpeg");
	border-style:solid;
	margin-top:50px;
	border-width:8px;
	border-color:#000000;
	padding-left: 100px;
	padding-right: 100px;
	
}
body{

  background: blue; 
    background: linear-gradient(to bottom,green,lightblue,green);

	  }
	  .btn-3 {
 background: linear-gradient(to bottom,green,lightblue,green);

 opacity:0.9;}
 h2{
 background: -webkit-linear-gradient(#e96443, #904e95);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-size: 32px;
  font-stretch:10px;}
   h4{
      background-color: black;
      color: white;
      opacity: 1;
		padding-top:20px;
		padding-bottom:20px;
     }
	 .footer{
	 padding-top:2px;
	  background-color:#33CCFF;
      color: white;
      opacity: 1;
		padding-bottom:20px;
	 }
	 .logo img{
  display: block;
  height: 100px;
  width: 100px;
  float: left;
  margin-left:20px;
  margin-top:10px;
}
.h1{
  padding-top:60px;
	  pading-bottom:30px;}
</style>



</head>
<body>

<meta http-equiv="Content-Type" content="text/css" charset="UTF-8">
<div class="header">

<div class="logo"><img src="logo.png" height="80px" width="100px" class="img-circle" align="left"></div>

<h1><big><center><b>लेज़र विज्ञान और प्रोद्योगिकी केंद्र&nbsp;&nbsp;<br>GRIEVANCE REDRESSAL SYSTEM</b></center></big></h1>
<br>
</div>
<div class="container theme-showcase" role="main">
<div class="jumbotron">
<center><h2 class="display-4"><b>YOU HAVE BEEN LOGOUT SUCCESSFULLY</b></h2></center>
<center><img src="complaint.png" height="100" width="150"></center>
</div>

<center>
<input type="button" class="btn btn-3" name="HOME " value="HOME"  onClick="parent.open('ind.php')">
</center><br>
</div>


</body><br> <br><br><br><br><br><br><br><center><footer style="color:red;"><h4>Prepared by IT & IS group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php date_default_timezone_set("Asia/Kolkata");echo date('d/m/Y'); ?> &nbsp;<?php echo date('h:i:sa');?></h4></footer></center>
</html>