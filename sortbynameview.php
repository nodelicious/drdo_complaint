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

<style>
.container{
background-image: url("tile.jpeg");
opacity:0.9;

}

body{
 background: linear-gradient(to bottom,green,lightblue,green);
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
	margin-left:90px;
	margin-right:90px;
	padding-left: 100px;
	padding-right: 100px;
	
}
h2{

       background: -webkit-linear-gradient(#e96443, #904e95);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-size: 32px;


     }
	 .logo img{
  display: block;
  height: 100px;
  width: 100px;
  float: left;
  margin-left:20px;
  margin-top:10px;
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
.text{
background-color:#00CC99;
border:solid;
border-color:#000000;


}
h3{
color:#CC0000;
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
.btn1 {  flex: 1 1 auto;
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
.comp{

font-weight:bold;
font-size:150%;
color: Blue;
}
.left {
color: Blue;
}

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
    $namentered=$_POST['name'];
	   $reqno=$_POST['req'];
	    $userpass=$_POST['userpass'];

$connection='DRIVER={SQL SERVER};SERVER=lasteclab;dsn=mis;database=mis';
$user='mis';
$pass='mis';
$conn=odbc_connect($connection, $user, $pass);


	   $sql="select * from user_complaint where reqno='$reqno'; ";

	$userquery=odbc_exec($conn,$sql);
	

	while(odbc_fetch_row($userquery)){
		$user_sign=odbc_result($userquery,'user_sign');
		$name=odbc_result($userquery,'name');
		$designation=odbc_result($userquery, 'desig');
		$extensionno=odbc_result($userquery, 'ext_no');
		$sub=odbc_result($userquery, 'subject');
		$status=odbc_result($userquery, 'status');
		$remark=odbc_result($userquery, 'remark');
		$description=odbc_result($userquery, 'description');
		$actiondate=odbc_result($userquery, 'action_date');
			$date=odbc_result($userquery, 'user_date');
	  }
	  $sql="select * from user_complaint where reqno='$reqno';";
	  $result=odbc_exec($conn,$sql);
	  while(odbc_fetch_row($result)){
	    $action_sign=odbc_result($result,'action_sign');
	  }
	  
	

?>
<center><h1><big><div class="logo"><big><big><big><big><img  src="logo.png" width="155"  class="img-circle"></big></big></big></big></div>
      <span class="logo"><big><b>आई.टी एवं आई.एस </b><b>शिकायत निवारण प्रणाली </b></big>&nbsp;&nbsp;&nbsp;</span><br>
      &nbsp;IT &amp; IS GRIEVANCE REDRESSAL SYSTEM</big></h1>
</center>
<br>
<br>
<div class= "container">
<br>
<div class="box">
<h2><b><center>
   <div class="text">   <h2 ><b>
        <center>
          <br>
         <b> शिकायत स्थिति </b><br>
      COMPLAINT STATUS
</center>
      </b></h2></div>
      </center>
</b></h2>

<center>
<div class="comp">
  <p>स्थिति / STATUS : <?php echo $status ; ?> </p>
  <p>शिकायत संख्या / COMPLAINT NO. : <?php echo  $reqno; ?></p>
  </div>

<h3><center>
    <h3>
      <center>
      <b> उपयोगकर्ता विवरण</b><br>
        USER DETAILS
      </CENTER>
    </H3>
    </CENTER>
</H3>
<BR>

 
 
 <form action="sortbyname2.php" method="POST"> 
<table class="table table-bordered">
<div class="row1">
<tr>
<div class="text"><td class="left"><b>नाम</b><br>
  NAME</td>
<td>
<?php  echo $name; ?>
</td>
</tr>
</div>
<div class="row2">
<tr>
<td class="left"><b>पद</b><br>
  DESIGNATION</td>
<td><?php  echo $designation; ?>
</td>
</tr>
</div>

<tr>
<td class="left"><b>विस्तार संख्या </b><br>
  EXTENSION NUMBER</td>
<td> <?php  echo $extensionno ; ?></td>
</tr>
</table></center>
<br>
<center>
<h3><b>शिकायत विवरण</b><br>
   COMPLAINT DETAILS
  </H3>
<br>

<table class="table table-bordered">
<div class="row1">
<tr>
<td class="left"><b>विषय</b><br>
  SUBJECT</td>
<td><?php  echo $sub ; ?></td>
</tr>
</div>

<tr>
<td class="left"><b>विवरण</b><br>
  DESCRIPTION</td>
<td><?php  echo $description ; ?></td>
</tr>
<tr>
<td class="left"><b> शिकायत कर्ता </b><br>
  COMPLAINT BY</td>
<td><img src="<?=$user_sign;?>" height="50px" width="50px"   ></td>
</tr>
<tr>
<td class="left"><strong>शिकायत की तारीख एवं समय</strong><br>
  DATE AND TIME OF COMPLAINT</td>
<td><?php  echo $date; ?></td>
</tr>
<tr>
</table>
</center>
<div class="table3"><center>
<table class="table table-bordered">
<div class="row1">
<tr>

</tr>
<?php
if($actiondate!=NULL){ ?>
<tr>
 <td class="left"><strong>की जाने वाली कार्यवाई</strong><br>
   ACTION TAKEN</td>
 <td><?php  echo $status ; ?>
</td>

</tr>
<tr>
 <td class="left"><b>कार्रवाई की तारीख</b><br>
   ACTION TAKEN ON</td>
 <td><?php  echo $actiondate ; ?>
</td>

</tr>
<tr>
<td class="left"><strong>टिप्पणी</strong><br>
  REMARKS</td>
<td>
<?php  echo $remark ; ?></td>
</tr>
<tr>
<td class="left"><b>कार्रवाईकर्ता </b><br>
  ACTION TAKEN BY</td>
<td>
<img src="<?=$action_sign?>" height="50px" width="100px"></td>
</tr>

<?php } ?>



</table>
</center><INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?=$userid?>" ><INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $userpass?>" ><INPUT TYPE="HIDDEN" NAME="name" VALUE="<?= $namentered?>" >
<center>
  <input type="submit" class="btn btn-3" name="SUBMIT" value="वापस  /  Back" > <input type="submit" name="logout" value="लॉग आउट  /  LOGOUT"  class="btn btn-3" onClick="parent.open('logout.php')">
</center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


</form>
</div></center>
<br>
</div>
</br>
</div>
</body>
 <center><div class="footer"><h4>Designed and Developed by IT & IS group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php date_default_timezone_set("Asia/Kolkata");echo date('d/m/Y'); ?> &nbsp;</h4></div></center>
</html>
