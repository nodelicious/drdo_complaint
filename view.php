<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/css" charset="UTF-8">
<meta http-equiv="Content-Language" content="en-us">
<meta name="viewport" content="width=device-width ,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=10">
<link rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/bootstrap-theme.min.css" rel="stylesheet">
     <link href="theme.css" rel="stylesheet">
    <link href="css/hello.css" rel="stylesheet">
	<script src="js/jquery-1.11.3.min.js"></script>
 <script src="main.js" type="text/javascript"></script>

<style>


body{
background-color:white;
 background: linear-gradient(to right,lightblue,white);
}

 h1{
      background-color: black;
      color: white;
	  padding-bottom:20px;
	  padding-top:10px;
    

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
.container{
background-image: url("tile.jpeg");
opacity:0.9;

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
	border-color:black;
	border-width:8px;
	margin-left:140px;
	margin-right:140px;
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
.logo img{
  display: block;
  height: 100px;
  width: 100px;
  float: left;
  }
hr{
	width: 600px;
	border-width: 5px;
	border-color: red;
}
body{
 background: linear-gradient(to bottom,green,lightblue,green);
}
h3{
color:red;
}
.text{
background-color:#00CC99;
border:solid;
border-color:#000000;


}
.comp{
text-align:right;
font-weight:bold;
font-size:400%;
}
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

  h4{
      background-color: black;
      color: white;
      opacity: 1;
		padding-top:20px;
		padding-bottom:20px;
     }
	 .comp{
text-align:center;
font-weight:bold;
font-size:150%;
color:Blue;
}
.left {color: Blue;}	

</style>
 <SCRIPT LANGUAGE="JAVASCRIPT">
  //function drchange()
//  { var action;
//
// if (document.all.coder.value == 1)
// 	action="accepted";
//	else		
//	action="rejected";	
//}

  </script>
</head>
<body>
<?php
 $userid=$_POST['userid'];
 $userpass=$_POST['userpass'];

	   $reqno=$_POST['req'];
	$connection='DRIVER={SQL SERVER};SERVER=lasteclab;dsn=mis;database=mis';
$user='mis';
$pass='mis';
$conn=odbc_connect($connection, $user, $pass);


	   $sql="select * from user_complaint where reqno='$reqno' ";

	$result=odbc_exec($conn,$sql);
	while(odbc_fetch_row($result)){
		
		$name=odbc_result($result,'name');
		$designation=odbc_result($result, 'desig');
		$extensionno=odbc_result($result, 'ext_no');
		$sub=odbc_result($result, 'subject');
		$description=odbc_result($result, 'description');
		$user_sign=odbc_result($result, 'user_sign');
		$date=odbc_result($result, 'user_date');
	  }
	  $sql="select * from logins where Login_id='$userid';";
	  $result=odbc_exec($conn,$sql);
	  while(odbc_fetch_row($result)){
	    $action_sign=odbc_result($result,'signature');
	  }
	  $sql="update user_complaint set action_sign='$action_sign' where reqno='$reqno';";
	  $result=odbc_exec($conn,$sql);
	

?>
<h1><big><div class="logo"><img  src="logo.png"  class="img-circle"></div><center>
  &nbsp;<span class="logo">&nbsp;<big><b>आई.टी एवं आई.एस शिकायत निवारण प्रणाली </span></b></big><br>
&nbsp;IT &amp; IS GRIEVANCE REDRESSAL SYSTEM
</center></big></h1>

<br>
<div class= "container"><br>
<div class="box"><br>
<div class="text"><h2><b><center>
      <br>
      <b>शिकायत फॉर्म </b><br>
      COMPLAINT FORM
</center></b></h2></div>

<center>
<div class="comp">&nbsp;शिकायत संख्या / COMPLAINT NO. :<?php echo  $reqno; ?></div>

<h3><center>
  उपयोगकर्ता विवरण<B><B><br>
USER DETAILS </b></CENTER></B></H3>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<form action="mailbox.php" method="POST"> 
 <INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?= $userid;?>" >
<table class="table table-bordered">
<div class="row1">
<tr>
<td class="left"><b>नाम<br>
  NAME</b></td>
<td>
<?php  echo $name; ?>
</td>
</tr>
</div>
<div class="row2">
<tr>
<td class="left"><b>पद<br>
  DESIGNATION</b></td>
<td><?php  echo $designation; ?>
</td>
</tr>
</div>

<tr>
<td class="left"><p><b>विस्तार संख्या <br>
    EXTENSION NUMBER</b></p></td>
<td> <?php  echo $extensionno ; ?></td>
</tr>
</table></center>
<br>
<center>
<h3><center>
  शिकायत विवरण<B>    <br>
    <B>COMPLAINT DETAILS</CENTER></B></H3>
<br>

<table class="table table-bordered">
<div class="row1">
<tr>
<td class="left"><b>विषय<br>
  SUBJECT</b></td>
<td><?php  echo $sub ; ?></td>
</tr>
</div>
<div class="row2">

</div>
<tr>
<td class="left"><b>विवरण<br>
  DESCRIPTION</b></td>
<td><?php  echo $description ; ?></td>
</tr>
<tr>
<td class="left"><b><br>
    <br>
    <b>शिकायत</b> द्वारा<br>
    COMPLAINT BY</b></td>
<td><img src="<?=$user_sign;?>" height=50px width=100px></td>
</tr>
<tr>
<td class="left"><strong>शिकायत की तारीख एवं समय</strong><br>
  DATE AND TIME OF COMPLAINT</td>
<td><?php  echo $date; ?></td>
</tr>
<tr>
</table>
</center>
<br>

<br>
<div class="table3"><center>
<table class="table table-bordered">
<div class="row1">
<tr>
 <td class="left"><b>की जाने वाली कार्यवाई<br>
   ACTION TAKEN</b></td>
 <td><select  name="status" >
  <option selected>-Select-</option>
  <option value="ACCEPTED" method="post">ACCEPTED</option>
  <option value="REJECTED" method="post">REJECTED</option>
</select>
</td>
<input type ="hidden" name="reqno" value="<?php  echo $reqno ; ?>">
</tr>
<tr>
<td><b><br>
  <div class="click"><input type="button" class="btn btn-2" value="हस्ताक्षर /  SIGNATURE" name="SIGN" id="sign"></div></td>
<td><div class="sign"><img src="<?=$action_sign;?>" height=50px width=100px></div></b></td>
</tr>
<tr>
<td class="left"><b><strong> </strong><strong><b>टिप्पणी</b></strong><br>
  REMARKS</b></td>
<td>
<textarea rows="3" method="post" name="remark"></textarea></td>
</tr>





</table>
</center><INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?=$userid?>" ><INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $userpass?>" >
<center><input type="submit" class="btn btn-3" name="SUBMIT" value="जमा करे  /  SUBMIT" ></center>
</form>
</div>
<br>
</div><br>
</div>
</body><center><div class="footer"><h4>Designed and Developed by IT & IS group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php date_default_timezone_set("Asia/Kolkata");echo date('d/m/Y'); ?> &nbsp;</h4></div></center>
</html>