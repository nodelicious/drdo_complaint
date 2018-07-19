<html>
<head>
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
  margin-top:30px;
}
 h1{
      background-color: black;
      color: white;
	 
	  padding-bottom:20px;
    

     }
	 
.hindi {
   font-weight: bold;
   width: 100%;

}
.eng{
   font-weight: normal;
   text-align:center;
   font-size:
}
</style>



</head>
<body>
<?php $userid=$_POST['userid'];
  $userpass=$_POST['userpass'];?>

<div class="header">
 <big><div class="logo"> <img  src="logo.png" height="80px" width="100px" class="img-circle" align="left"></div>
  <h1><center>
    <b><big><br>
    <div class="hindi"><big><b>&#2310;&#2312;.&#2335;&#2368; &#2319;&#2357;&#2306; &#2310;&#2312;.&#2319;&#2360; &#2358;&#2367;&#2325;&#2366;&#2351;&#2340; &#2344;&#2367;&#2357;&#2366;&#2352;&#2339; &#2346;&#2381;&#2352;&#2339;&#2366;&#2354;&#2368;</b></big></div> 
    </big><br>
  <div class="eng">IT &amp; IS GRIEVANCE REDRESSAL SYSTEM</div>
    </b>
  </center></h1>
<br>
</div>
  <div class="container theme-showcase" role="main">
<div class="jumbotron">
<center>
  <h2 class="display-4"><b><div class="hindi"><br>
    &#2340;&#2366;&#2352;&#2368;&#2393; &#2342;&#2352;&#2381;&#2332; &#2325;&#2352;&#2375;&#2306; ।</div>
  </b> <br>
  <div class="eng">ENTER THE DATE</div></h2>
</center>
<center><form action="sortbydate2.php" method="POST"> <input type="date" name="date" ><INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?=$userid?>" ><INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $userpass?>" ><input type="submit" name="submit" value="जमा करें / submit" class="btn btn-3"></form></center>
</div>


<center><b>
<form method="POST" action="report.php">
  <input type="submit" name="Back" value="वापस / Back"  class="btn btn-3">
  <INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?=$userid?>" ><INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $userpass?>" >
</form></center>

</div>
</body> <br><br><br><br><br><br><br> <br><br><br><br><br><center><footer style="color:red;"><h4>Designed and developed by IT & IS group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php date_default_timezone_set("Asia/Kolkata");echo date('d/m/Y'); ?> &nbsp;</h4></footer></center>
</html>