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
 body{

  background: blue; 
    background: linear-gradient(to bottom,green,lightblue,green);

	  }
.jumbotron{
 background: linear-gradient(to right, lightblue , white); 
      margin-left:30px; 
      margin-right:30px;
      margin-top: 50px;
}
h2{
 background: -webkit-linear-gradient(#e96443, #904e95);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-size: 32px;
  font-stretch:10px;}
.header{
background-color:black;
color:white;
margin-left:10px;
margin-right:10px;
}
     .container{
	background-image: url("tile.jpeg");
	border-style:solid;
	margin-top:50px;
	border-width:8px;
	border-color:black;
	padding-left: 100px;
	padding-right: 100px;
	
}
body{

background-color:white;
 background: linear-gradient(to bottom,green,lightblue,green);
	  }
	  .btn-3 {
 background: linear-gradient(to bottom,green,lightblue,green);

 opacity:0.9;}
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
  margin-top:30px;
}
 h1{
      background-color: black;
      color: white;
	  padding-top:0px;
	  padding-bottom:20px;
    

     }
</style>



</head>
<body>
<meta http-equiv="Content-Type" content="text/css" charset="UTF-8">
<div class="header">
 <big><div class="logo"> <img  src="logo.png" height="80px" width="100px" class="img-circle" align="left"></div>
  <h1><center><b><u>&nbsp;&nbsp;&nbsp;<b><br>GRIEVANCE REDRESSAL SYSTEM</u></b></center></h1>
<br>
</div>
  <div class="container theme-showcase" role="main">
<div class="jumbotron">
<center><h2 class="display-4"><b>ENTER THE MONTH</b></h2></center>
<center><form action="" method="POST"><input name="month" type="text"  required></form></center>
</div>


<center><b>
<input type="button" class="btn btn-3" name="back" value="BACK" onClick="parent.open('ind.php')"></b>
</center><br>

</div>
</body> <br><br><br><br><br><br><br> <br><br><br><br><br><center><footer style="color:red;"><h4>Prepared by IT & IS group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php date_default_timezone_set("Asia/Kolkata");echo date('d/m/Y'); ?> &nbsp;<?php echo date('h:i:sa');?></h4></footer></center>
</html>
