
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
      margin-top: 70px;
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
	border-color:black;
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
	
      color: white;
      opacity: 1;
		padding-bottom:20px;
		
		float: bottom;
		bottom:0px;
		width: 100%;
			 }
.logo img{
  display: block;
  height: 150px;
  width: 150px;
  float: left;
  margin-left:20px;
  margin-top:20px;
}

</style>



</head>
<body>
<meta http-equiv="Content-Type" content="text/css" charset="UTF-8">
<?php
$connection='DRIVER={SQL SERVER};SERVER=lasteclab;dsn=mis;database=mis';
$user='mis';
$pass='mis';
$conn=odbc_connect($connection, $user, $pass);
$sql =  "SELECT MAX(reqno) AS max FROM user_complaint;" ;
$userquery=odbc_exec($conn, $sql);
while(odbc_fetch_row($userquery)){
$largestNumber =  odbc_result($userquery, 'max');

}

?>

<meta http-equiv="Content-Type" content="text/css" charset="UTF-8">
<div class="header">
<div class="logo"><img  src="logo.png" height="100px" width="100px" class="img-circle" align="left"></div>
<h1><center>
  <big><b><big><br>
  <big><b>आई.टी एवं आई.एस शिकायत निवारण प्रणाली </b></big></big></b></big><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IT &amp; IS GRIEVANCE REDRESSAL SYSTEM
</center></h1>
<br>
</div>
<div class="container theme-showcase" role="main">
<div class="jumbotron">

<center>
  <h2 class="display-4"> <br>
   <b> शिकायत संख्या <?php echo $largestNumber;?> सफलतापूर्वक दर्ज कर दी गई है ।</b><br>
    complaint number <?php echo $largestNumber;?> &nbsp;has been submitted successfully.</h2>
</center>
<center><img src="complaint_succ.png" height="100" width="150"></center>
</div>

<center>
<input type="button" class="btn btn-3" name="Log Out" value="लॉग आउट  /  LOGOUT" onClick="parent.open('logout.php')" >
</center><br>
</div>
 <br><br><br><br><br><br><br> <br>
</body> <center><div class="footer"><h4>Designed and Developed  by IT & IS group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php date_default_timezone_set("Asia/Kolkata");echo date('d/m/Y'); ?> &nbsp;<?php echo date('h:i:sa');?></h4></div></center>
</html>