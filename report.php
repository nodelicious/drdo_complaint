<?php


 $userid=$_POST['userid'];
 $userpass=$_POST['userpass'];

//$userid=stripcslashes($username);
//$userpass=stripcslashes($password);
//$username=mysql_real_escape_string($username);
//$password=mysql_real_escape_string($password);
	 	




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
 background: linear-gradient(to bottom,green,lightblue,green);
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
	 .table{
color:black;
	border-color:black;
	border-style:solid;
	margin-left:10px;
	margin-right:120px;
	border-width:5px;
	padding-left:5px;
	

}
p{
 border: 1px solid powderblue;
  background-color: powderblue;

}
.icon{
display:block;
height:337px;
width:336px;
}
 h1{
      background-color: black;
      color: white;
    

     }
     .container{
	background-image: url("tilestyle.jpg");
	border-style:solid;
	border-color:#000000;
	border-width:8px;
	margin-left:350px;
	margin-right:350px;
	padding-left: 100px;
	padding-right: 100px;
	
}   h4{
      background-color: black;
      color: white;
      opacity: 1;
		padding-top:20px;
		padding-bottom:20px;
     }
.btn {
 
 
  padding-left: 100px;
   padding-right: 80px;
   padding-top:20px;
   padding-bottom: 20px;
  text-align: center;
  text-transform: uppercase;
  transition: 0.5s;
  background-size: 200% auto;
  color: white;
 /* text-shadow: 0px 0px 10px rgba(0,0,0,0.2);*/
  box-shadow: 0 0 20px #eee;

 }

.btn:hover {
  background-position: right center; 
}

.btn-2 {
  background-image: linear-gradient(to right, #FF6347 0%, #8B4513 90%, #8B4513 100%);
  width: 100%;
  
}
.btn-4{
   background-image: linear-gradient(to right, #32CD32 0%, #8B4513 90%, #8B4513 100%);
   width: 100%;
}
.btn-5{
   background-image: linear-gradient(to right, #00bfff 0%, #8B4513 90%, #8B4513 100%);
   width: 100%;
}
.btn-6{
   background-image: linear-gradient(to right, #FFFF00 0%, #8B4513 90%, #8B4513 100%);
   width: 100%;
}


.logo{
padding-top:10px;
padding-bottom:20px;
}
.logo img{
  display: block;
  height: 150px;
  width: 150px;
  float: left;
 
}
.head{
background-color:#CCFFFF;
margin-left:505px;
margin-right:505px;
 
}
 h3{
       background: -webkit-linear-gradient(#e96443, #904e95);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-size: 32px;

     }
     .btn1 {  flex: 1 1 auto;
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
  padding-top:10px;
  padding-bottom:10px;
}
table,td,tr{
	border:3px solid black;
  background-color: lavender;
	
}
.btnn{
font-size:150%;
}
.style33{width: 70%; background-color:#330033; font-size: 25pt; font-family: Georgia, "Times New Roman", Times, serif; color:WHITE;  text-align: center; line-height: 50px; align:"center" ;}
.btn-3 {
  background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);
}
.btn11 {flex: 1 1 auto;
  margin: 30px;
  padding-left: 80px;
   padding-right: 80px;
  text-align: center;
  text-transform: uppercase;
  transition: 0.5s;
  background-size: 200% auto;
  color: black;
 /* text-shadow: 0px 0px 10px rgba(0,0,0,0.2);*/
  box-shadow: 0 0 20px #eee;
  border-radius: 20px;
  padding-top:10px;
  padding-bottom:10px;
}
</style>
</head>
<body>

<center>   <h1><big><div class="logo"><img  src="logo.png"  class="img-circle"><br>
     <big> <b>आई.टी एवं आई.एस शिकायत निवारण प्रणाली </b></big><br>
   IT &amp; IS GRIEVANCE REDRESSAL SYSTEM</div>
       </big></h1></center>
  <br>
  
    <br>
   <div class="container" role="main">
   <br>
  <center> <table class="table table-bordered">
  <h1 align="center" class="style33"><strong><span class="style36"><font size="6"></font><img src="srch.gif" width="95" height="104" align="right"/></font></strong></b><span class="style36">
 </span><font size="5"><b>**खोज श्रेणी का चयन करें**</b>
<br>**Select Search Category**</br></font></strong></h1>
   <tr>
				<form  method="POST" action="sortbyname.php"><INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?=$userid?>" ><INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $userpass?>" >
				<td class="btnn"> <input type="submit" class="btn btn-2"  value="नाम अनुसार खोजें / SEARCH BY NAME&nbsp;&nbsp;&nbsp;"  >	</td>
			<td><b>
			<p>नाम से खोज के लिए इस बटन पर क्लिक करें |  <br>
			  For search by name click on this button.</p>
			</b></td>
				</form></tr>
	 
	 <br>
  <tr>
			<form name=frm_status method="post" action="sortbydate.php"><INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?=$userid?>" ><INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $userpass?>" >
			<td class="btnn"><input name="submit" type="submit"  class="btn btn-4" value="दिनांक अनुसार खोजें / SEARCH BY DATE&nbsp;&nbsp;&nbsp;&nbsp;"  ></td>
			<td><b>
			<p>तिथि के आधार पर खोज के लिए इस बटन पर क्लिक करें | <br>
			  For search by date click on this button.</p>
			</b></td>
	</form>
	</tr>

<br>
<tr>
            <form name=frm_status method="post" action="sortbymonth.php"><INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?=$userid?>" ><INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $userpass?>" >
            <td class="btnn">  <input type="submit" class="btn btn-5" value="महीने के अनुसार खोजें / SEARCH BY MONTH"   >	</td>
			<td><b>
			<p>महीने के आधार पर खोज के लिए इस बटन पर क्लिक करें | <br>
			  For search by month click on this button.</p>
			</b></td>
			</form>
	  </tr>	
<tr>
            <form name=frm_status method="post" action="sortbyyear.php"><INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?=$userid?>" ><INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $userpass?>" >
         <td class="btnn">  <input type="submit"  class="btn btn-6"  value="वर्ष के अनुसार खोजें / SEARCH BY YEAR&nbsp;&nbsp;&nbsp;"   ></td>
		 <td><b>
		 <p>साल के आधार पर खोज के लिए इस बटन पर क्लिक करें |<br>
		   For search by year click on this button.</p>
		 </b></td>
		
			</form>
				
</tr>
</table></center>
<br>
<center>
	<form method="POST" action="page2.php">
	  <input type="submit" name="Back" value="वापस / Back"  class="btn1 btn-3">
	  <INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?=$userid?>" ><INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $userpass?>" >
</form>

</center>
</div>
 
					


  </div>
  
</body>
 <center><div class="footer"><h4>Designed and developed by IT & IS group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php date_default_timezone_set("Asia/Kolkata");echo date('d/m/Y'); ?> &nbsp;</h4></div></center>
</html>
