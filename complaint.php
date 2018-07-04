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
     textarea:focus {
    background-color: lightblue;
}
table,td,tr{
	border:3px solid black;
	
}

.row1,.row2,.row3{
  border-color:black;
  border-style:solid:
  border-width:3px;
  

}
.table{
color:black;
	border-color:black;
	border-style:solid;
	margin-left:10px;
	margin-right:0px;
	border-width:5px;

}
.box{
	background-color:lavender;
	border-style:solid;
	border-color:blue;
	border-width:8px;
	margin-left:320px;
	margin-right:320px;
	padding-left: 100px;
	padding-right: 100px;
	
}
h2{

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
.btn-2 {
  background-image: linear-gradient(to right, #fbc2eb 0%, #a6c1ee 51%, #fbc2eb 100%);
}
textarea{
	padding-left: 100px;
	padding-right: 100px;
	width: 100%;
	
}
hr{
	width: 600px;
	border-width: 5px;
	border-color: red;
}

</style>
</head>
<body>

<h1><big><img  src="drdo.png"  class="img-circle">&nbsp;&nbsp;&nbsp;&nbsp;<b>LASER SCIENCE AND TECHNOLOGY CENTER</b></big></h1>
<br>
<div class="box">
<h2 ><b><center>COMPLAINT REGISTRATION FORM</center></b></h2>

<hr style="background-color:DodgerBlue;"">
<div class="table1"><center>
<h3><center><B>USER DETAILS</CENTER></B></H3>
<BR>
<?php

session_start();
  global $username;
  
  if(isset($_SESSION['uname']))
{
	//global $username;
	$username=$_SESSION['uname'];
	
	}
	
	$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"login");

$sql="select * FROM users2 WHERE username='$username'";

	$userquery=mysqli_query($conn,$sql);
	if(mysqli_num_rows($userquery) !=1)
	{
		die("that username could not be found");
	}//$row=array();
	$designation="des";

	while($row=mysqli_fetch_array($userquery, MYSQLI_ASSOC)){
		
		$name=$row['name'];
		$designation=$row['designation'];
		$groupname=$row['groupname'];
		$extensionno=$row['extentionno'];
		$image1=$row['image'];
	}
	

?>
 <SCRIPT LANGUAGE="JAVASCRIPT">
  function drchange()
  {


 if (document.all.drname.value == 1)
 	document.all.fwd.value="9012";
	else		
	document.all.fwd.value="9013";
		
}

function imagechange()
{
document.all.empsign.src="<?=$image1?>";	
document.all.sign_flag.value="1";	
 
		
		var x = document.getElementById('sign');
	//	x.style.display="block";
		document.getElementById('submit').disabled= false; 
	
    //get_sign()



//function get_sign(){
//document.all.img.value="<?=$image1?>"

//}

}
function validate(){
if (document.all.sign_flag.value != "1")
	{
		if(confirm("Error: You  forgot to enter your signature by pressing signature button. Press OK to rectify this error OR press Cancel to abort this leave application."))  
		{
				
				return false;
				window.history.back();
		}
	} 
		else
		{
			
			return true;
		}
}
</script>
 <!-- <SCRIPT LANGUAGE="VBSCRIPT">
//sub initiator_sign_onclick


//if not isdate(document.all.lv_from_date.value) then
//msgbox "Date format for 'Leave from' is incorrect. Use dd/mm/yyyy",16,"Date format"
//document.all.lv_from_date.focus 
//else if not isdate(document.all.lv_to_date.value) then
//msgbox "Date format for 'Leave to' is incorrect. Use dd/mm/yyyy",16,"Date format" 
//document.all.lv_to_date.focus
//else
   // document.all.sign_flag.value="1"
   // document.all.empsign.src="<%=image1%>"		
   // get_sign()

//end sub

//sub get_sign()
//document.all.signature.value="<%=image1%>"
//end sub

 //</script>-->
 
 <form action="insert.php"  method="POST"> 
<table class="table table-bordered">

<div class="row1">
<tr>
<center><td>NAME</td></center>
<td>
<?php  echo $name; ?>
</td>
</tr>
</div>
<div class="row2">
<tr>
<td>DESIGNATION</td>
<td><?php  echo $designation; ?> 
</td>
</tr>
</div>
<tr>
<td>GROUP NAME</td>
<td><?php  echo $groupname; ?> </td>
</tr>
<tr>
<td>EXTENSION NUMBER</td>
<td><?php  echo $extensionno ; ?></td>
</tr>
</table></center>
</div

><br>





<br>
<center>
<h3><center><B>COMPLAINT DETAILS</CENTER></B></H3>
<br>

<table class="table table-bordered">
<div class="row1">
<tr>
<td>SUBJECT</td>
<td><textarea size="5" name="subject" method="post" required></textarea>
</tr></td>
</div>
<div class="row2">
<tr>
<td>DEPARTMENT</td>

<td><select name='drname' size="1" onChange='drchange()' id='selected' required>
  <option selected>-Select-</option>
  <option value="1" method="post">COMMUNICATION</option>
  <option value="2" method="post">IT AND IS</option>
</select></td>
</tr>
</div>
<tr>
<td>DESCRIPTION</td>
<td><textarea rows="5" method="post" name="desc" required></textarea></td>
</tr>
<tr>
<td>SUGGESTION</td>
<td><textarea rows="5" method="post" name="sugg" required></textarea ></td>
</tr>
</table>
</center>





<br>

<br>
<div class="table">
<center>

<div class="row1">
<tr>
<input type="button" class="btn btn-2" value="SIGNATURE" name="SIGN" id="sign"  onClick="return imagechange()">
<input type="hidden" name="sign_flag" id='sign_flag' value="0">
<img src="" name="empsign" width="150" height="50">



</td>
</tr>

<div class="row2">
<tr>
<td>FORWARD TO</td>
<td><input type="text" name="sub" id='fwd' required></textarea></td>
				
</tr>
</div>
<br>
<div class="row3">
<tr>
<td>
<br>
<input type="submit" class="btn btn-3" name="submit" id="submit" onClick="validate()" disabled>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="button" class="btn btn-3" value="Logout" name="logout btn"  onClick="parent.open('logout.php')"><br>
</td>
</tr>
<br>
</div>

</div>

</center></div>
</div>

</div>

<br>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
   
    <script src="js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>