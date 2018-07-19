<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/css" charset="UTF-8">
<meta http-equiv="Content-Language" content="en-us">
<meta name="viewport" content="width=device-width ,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=10">
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <script src="js/jquery-1.11.3.min.js"></script>
 <script src="main.js" type="text/javascript"></script>
  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="jquery1.css">
  <script src="jquery2.js"></script>
  <script src="jquery3.js"></script>
<style>
body{

 background: linear-gradient(to bottom,green,lightblue,green);
}
.logo img{
  display: block;
  height: 100px;
  width: 100px;
  float: left;
 
}

 h1{
      background-color: black;
      color: white;
	  padding-top:20px;
	  pading-bottom:10px;
    

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
	margin-right:120px;
	border-width:5px;
	padding-left:5px;
	

}
.container{
background-image: url("tile.jpeg");
opacity:0.9;
border-style:solid;
	border-color:black;
	border-width:4px;
}
.box{
	background-color:lavender;
	border-style:solid;
	border-color:black;
	border-width:8px;
	margin-left:120px;
	margin-right:120px;
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
  padding-left: 40px;
   padding-right: 40px;
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

.table1 {
	margin-left:10px;
	margin-right:10px;
	border-width:5px;
}
.text{
background-color:#00CC99;
border:solid;
border-color:#000000;


}
h3{
color:#CC0000;
}
.content{
color:#0066FF;
}
 h4{
      background-color: black;
      color: white;
      opacity: 1;
		padding-top:20px;
		padding-bottom:20px;
     }
.btn1 {  flex: 1 1 auto;
  margin: 20px;
  padding-left: 40px;
   padding-right: 40px;
  text-align: center;
  text-transform: uppercase;
  transition: 0.5s;
  background-size: 200% auto;
  color: white;
 /* text-shadow: 0px 0px 10px rgba(0,0,0,0.2);*/
  box-shadow: 0 0 20px #eee;
  border-radius: 20px;
}
.left {color: blue;}
.btn2 {  flex: 1 1 auto;
  margin: 20px;
  padding-left: 30px;
   padding-right: 30px;
  text-align: center;
  text-transform: uppercase;
  transition: 0.5s;
  background-size: 200% auto;
  color: black;
 /* text-shadow: 0px 0px 10px rgba(0,0,0,0.2);*/
  box-shadow: 0 0 20px #eee;
  border-radius: 20px;
}
</style>
</head>
<body>

<h1><big><div class="logo"><img  src="logo.png"  class="img-circle"></div>
<center>&nbsp;<big><big><b>आई.टी एवं आई.एस शिकायत निवारण प्रणाली </b></big></big><b></b><br>
IT &amp; IS GRIEVANCE REDRESSAL SYSTEM</big></h1>
</center>
<br>
<div class= "container"><br>
<div class="box"><br>
<div class="text"><h2 ><center><br>
<b>शिकायत पंजीकरण फॉर्म </b><br>
    COMPLAINT REGISTRATION FORM<br>
</center></h2></div>
<br>
<br>
<div class="table1"><center>
<h3><center>
   <B> उपयोगकर्ता विवरण</B><br>
USER DETAILS
</CENTER></h3>

<?php
 $userid=$_POST['userid'];
  $userpass=$_POST['userpass'];
$connection='DRIVER={SQL SERVER};SERVER=lasteclab;dsn=mis;database=mis';
$user='mis';
$pass='mis';
$conn=odbc_connect($connection, $user, $pass);
$sql="select * from logins where Login_id='$userid';";

	$userquery=odbc_exec($conn,$sql);

	while(odbc_fetch_row($userquery)){
		
		$name=odbc_result($userquery, 'name');
		$designation=odbc_result($userquery, 'desig');
		$groupname=odbc_result($userquery, 'group_name');
		
		$image1=odbc_result($userquery, 'signature');
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

		document.getElementById('submit').disabled= false; 
	
    //get_sign()



//function get_sign(){
//document.all.img.value="<?=$image1?>"  

//}

}

</script>

<form action="insert.php"  method="POST"> 
<INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?= $userid;?>" >
<table class="table table-bordered">
  <div class="row1">
    <tr>
      <div class="content">
	  <td class="left"><b>नाम</b> <br>NAME</td>
		</div>
      <td><?php  echo $name; ?>
          <input type="hidden" name="name" value="<?php  echo $name; ?>">
      </td>
  </div>
  <div class="row2">
     <div class="content"> <td class="left"><b>पद</b><br>DESIGNATION</td>
     </div>
      <td><?php  echo $designation; ?>
          <input type="hidden" name="desig" value="<?php  echo $designation; ?>">
      </td>
    </tr>
  </div>
  <tr>
   <div class="content"> 
   <td class="left"><b>विभाग का नाम</b> <br>GROUP NAME</td>
	  </div>   
	   <td><?php  echo $groupname; ?>
    </td>
   <div class="content"> <td class="left"><b>विस्तार संख्या </b><br> EXTENSION NUMBER</td>
   </div>
    <td><input name="ext" type="text" method="post" required>
    </td>
  </tr>
</table>
</div>
<center>
<h3><center>
 <b>शिकायत विवरण</B><br>
COMPLAINT DETAILS</CENTER></h3>
<br>

<table class="table table-bordered">
<div class="row1">
<tr>
<div class="content">
  <td class="left"><b>विषय</b> / SUBJECT</td>
</div>
<td><textarea size="5"name="subject" method="post" required></textarea>
</tr></td>
</div>
<div class="row2">
<tr>
<div class="content">
  <td class="left"><b>विभाग</b>/ / DEPARTMENT</td>
</div>

<td><select name='drname' size="1" onChange='drchange()' id='selected' required>
  <option selected>-Select-</option>
  <option value="1" method="post">COMMUNICATION<br></option>
  <option value="2" method="post">IT AND IS</option>
</select></td>
</tr>
</div>
<tr>
<div class="content">
  <td class="left"><b>विवरण</b> / DESCRIPTION</td>
</div>
<td><textarea rows="5" method="post" name="desc" required></textarea></td>
</tr>
<tr>
<div class="content">
  <td class="left"><strong><b>टिप्पणी</b>  / </strong>REMARK</td>
</div>
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
<td><div class="click"><input type="button" class="btn btn-2" value="हस्ताक्षर  /  SIGNATURE" name="SIGN" id="sign" onClick="imagechange()" >
    <span class="sign"><img src="<?=$image1;?>" name="empsign" id="empsign" height=50px width=100px></span></div></td>
<input type="hidden" name="sign_flag" id='sign_flag' value="0">
<input type="hidden" name="sign" value="<?=$image1;?>">
<td><div class="sign"></div></td>
  



</tr>

<div class="row2">
<tr>
<div class="content"><b>आगे प्रेषित</b> / 
  FORWARD TO&nbsp;&nbsp;
<input type="text" name="sub" id='fwd' required>
	</div>			
</tr>
</div>
<div class="row3">
<tr>
<td>
<input type="submit" class="btn btn-3" value="जमा करें  /  submit" name="submit" id="submit" disabled>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
<br>
</div>

</div>

</center></div>



</form>

<form method="POST" action="page2.php">
<center><input type="submit" name="Back" value="वापस  /  Back"  class="btn btn-3"></center>
  <INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?=$userid?>" ><INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $userpass?>" >
</form>
<br>
</div></div><br>
</div>
</body>
<center><footer style="color:red;"><h4>Designed and Developed by IT & IS group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php date_default_timezone_set("Asia/Kolkata");echo date('d/m/Y'); ?> &nbsp;</h4></footer></center>
</html>