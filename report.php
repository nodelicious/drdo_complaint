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
	  background-color:#33CCFF;
      color: white;
      opacity: 1;
		padding-bottom:20px;
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
  background-image: linear-gradient(to right, #fbc2eb 0%, #a6c1ee 51%, #fbc2eb 100%);
}

.logo{
padding-top:10px;
padding-bottom:20px;
}
.logo img{
  display: block;
  height: 100px;
  width: 100px;
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
}
table,td,tr{
	border:3px solid black;
	
}
.style33{width: 70%; background-color:#330033; font-size: 25pt; font-family: Georgia, "Times New Roman", Times, serif; color:WHITE;  text-align: center; line-height: 50px; align:"center" ;}
.btn-3 {
  background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);
}
</style>
</head>
<body>

   <h1><big><div class="logo"><img  src="logo.png"  class="img-circle"></div><center>&nbsp;&nbsp;&nbsp;&nbsp;<b><br>
   GRIEVANCE REDRESSAL SYSTEM</b></center></big></h1>
  <br>
  
    <br>
   <div class="container" role="main">
   <br>
  <center> <table class="table table-bordered">
  <h1 align="center" class="style33"><strong><span class="style36"><font size="6"></font><img src="srch.gif" width="95" height="104" align="right"/></font></strong></b><span class="style36"><br>
 </span><font size="5">**Select Search Category**</font></strong></h1>
   <tr>
				<form  method="POST" action="sortbyname.php"><INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?=$userid?>" ><INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $userpass?>" >
				<td> <input type="submit" class="btn btn-2"  value="SORT BY NAME"  >	</td>
			<td>For search by name click on this button</td>
				</form></tr>
	 
	 <br>
  <tr>
			<form name=frm_status method="post" action="sortbydate.php"><INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?=$userid?>" ><INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $userpass?>" >
			<td><input name="submit" type="submit"  class="btn btn-2" value="SORT BY DATE"  ></td>
			<td>For search by date click on this button</td>
	</form>
	</tr>

<br>
<tr>
            <form name=frm_status method="post" action="sortbymonth.php">
            <td>  <input type="submit" class="btn btn-2" value="SORT BY MONTH"   >	</td>
			<td>For search by month click on this button</td>
			</form>
			</tr>	
<tr>
            <form name=frm_status method="post" action="sortbyyear.php">
         <td>  <input type="submit"  class="btn btn-2"  value="SORT BY YEAR"   ></td>
		 <td>For search by year click on this button</td>
		
			</form>
				
</tr>
</table></center>
<br>
<center>
	<form method="POST" action="page2.php">

  <input type="submit" name="Back" value="Back"  class="btn btn-3">

  <INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?=$userid?>" ><INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $userpass?>" >
</form>

</center>
</div>
 
					


  </div>
  
</body>
 <center><footer style="color:red;"><h4>Prepared by IT & IS group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php date_default_timezone_set("Asia/Kolkata");echo date('d/m/Y'); ?> &nbsp;<?php echo date('h:i:sa');?></h4></footer></center>
</html>
