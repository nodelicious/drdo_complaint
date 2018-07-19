<?php


 $username=$_POST['userid'];
 $password=$_POST['userpass'];

$username=stripcslashes($username);
$password=stripcslashes($password);
//$username=mysql_real_escape_string($username);
//$password=mysql_real_escape_string($password);
$connection='DRIVER={SQL SERVER};SERVER=lasteclab;dsn=mis;database=mis';
$user='mis';
$pass='mis';
$conn=odbc_connect($connection, $user, $pass);
$sql="select * from logins where Login_id='$username' and password='$password';";
$result=odbc_exec($conn, $sql);
       
	 	

 if(odbc_result($result, 'Login_id')===$username && odbc_result($result, 'password')===$password)
 {


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
  color: black;
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
.left{
margin-left:20px;}
 h3{
       background: -webkit-linear-gradient(#e96443, #904e95);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-size: 32px;

     }
	 td{
	 margin-top:40px;
	 margin-bottom:40px;
	 margin-left:40px;
	 margin-right:40px;  }  
     </style>
</head>
<body>

   <h1><big><div class="logo"><img  src="logo.png"  class="img-circle"></div><center>
     &nbsp;&nbsp;&nbsp;&nbsp;<b><big><b>आई.टी एवं आई.एस </b>शिकायत निवारण प्रणाली </big></b><br>
   IT &amp; IS GRIEVANCE REDRESSAL SYSTEM
   </center></big></h1>
  <br>
  
    <br>
   <div class="container" role="main">
   <br>
 
	<center>
	<table>
		<tr><td width="390"><form  method="POST" action="complaint.php">
				  <input type="submit" value="" style="display: block; width:300px; height:300px; background-image:url(complaint2.jpg);  background-size: contain; border-width:5px ; border-color:#000000; " ><INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?= $username;?>" >
		<INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $password;?>" >
				</form>
	 
	 </td>
                                                
                 	<td width="418" >	<form name=frm_status method="post" action="status.php">
  
     <input name="submit" type="submit" style="display: block; width:300px; height:300px; background-image:url(status2.jpg);  border-width:5px ; border-color:#000000; " value=""  >
     
           
      
             	  
     <INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?= $username;?>" >
		<INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $password;?>" >
	</form></td></tr>
<td height="67"></div>
<?php    if ($username=='9012' || $username=='1207'){
?>

       <tr><td>     <form name=frm_status method="post" action="mailbox.php">
         <input name="submit2" type="submit" style="display: block; width:300px; height:300px; background-image:url(mailbox3.jpg);  background-size: cover; background-position: bottom;border-width:5px ; border-color:#000000; " value=""  >
         <INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?= $username;?>" >
		<INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $password;?>" >
			</form>
				
</td>                                                   




         <td>   <form name=frm_status method="post" action="report.php">
           <INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?= $username;?>" >
		<INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $password;?>" >
         <input name="submit3" type="submit" style="display: block; width:300px; height:300px; background-image:url(report2.jpg); border-width:5px ; border-color:#000000;" value=""   >
         </form></td></tr>
	</center>

<td height="21"></div><</td>?php } ?>
</table>
	</center>
<?php    if ($username!='9012' && $username!='1207'){
?>



<table><tr><center>
   <form name=frm_status method="post" action="mailbox.php">
          <input name="submit2" type="submit" style="display: block; width:310px; height:310px; background-image:url(mailbox3.jpg);  background-size: cover; background-position: bottom;border-width:5px ; border-color:#000000; " value=""  >
         <INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?= $username;?>" >
		<INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $password;?>" >
			</form></center></tr></table><?php } ?>
<center>
   <form name=frm_status method = "post" action="">
     <input type="submit" class="btn btn-3" value=" लॉग आउट / LOGOUT" name="logout btn"  onClick="parent.open('logout.php')">
   </form>
   
</center>
</div>


 
					



  
  </body>
 <center><div class="footer"><h4>Designed and Developed by IT & IS group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php date_default_timezone_set("Asia/Kolkata");echo date('d/m/Y'); ?> &nbsp;</h4></div></center>
</html>
<?php

}
 
 else
 {
 	header('location:notvalid.php');
 }}
?>