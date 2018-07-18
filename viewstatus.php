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
	  background-color:#33CCFF;
      color: white;
      opacity: 1;
		padding-bottom:20px;
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
	   $reqno=$_POST['req'];
	    $userpass=$_POST['userpass'];

$connection='DRIVER={SQL SERVER};SERVER=lasteclab;dsn=mis;database=mis';
$user='mis';
$pass='mis';
$conn=odbc_connect($connection, $user, $pass);


	   $sql="select * from user_complaint where user_complaint.reqno='$reqno'; ";

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
	  }
	

?>
<center><h1><big><div class="logo"><img  src="logo.png"  class="img-circle"></div>&nbsp;&nbsp;&nbsp;लेज़र विज्ञान और प्रोद्योगिकी केंद्र&nbsp;&nbsp;<br>
&nbsp;<b>GRIEVANCE REDRESSAL SYSTEM</b></big></h1></center>
<br>
<br>
<div class= "container">
<br>
<div class="box">
<h2><b><center>
   <div class="text">   <h2 ><b>
        <center>
          शिकायत पंजीकरण फॉर्म<br>
      COMPLAINT REGISTRATION FORM
</center>
      </b></h2></div>
      </center>
</b></h2>

<center>
<h3><center>
    <h3>
      <center>
        उपयोगकर्ता विवरण<br>
        <B>USER DETAILS
      </CENTER>
    </H3>
    </CENTER>
</B></H3>
<BR>

 
 
 <form action="status.php" method="POST"> 
<table class="table table-bordered">
<div class="row1">
<tr>
<div class="text"><td><b>नाम<br>
  NAME</b></td></div>
<td>
<?php  echo $name; ?>
</td>
</tr>
</div>
<div class="row2">
<tr>
<td><b>पद<br>
  DESIGNATION</b></td>
<td><?php  echo $designation; ?>
</td>
</tr>
</div>

<tr>
<td><b>विस्तार संख्या <br>
  EXTENSION NUMBER</b></td>
<td> <?php  echo $extensionno ; ?></td>
</tr>
</table></center>
<br>
<center>
<h3>शिकायत विवरण<br>
   COMPLAINT DETAILS
  </B></H3>
<br>

<table class="table table-bordered">
<div class="row1">
<tr>
<td><b>विषय<br>
  SUBJECT</b></td>
<td><?php  echo $sub ; ?></td>
</tr>
</div>

<tr>
<td><b>विवरण<br>
  DESCRIPTION</b></td>
<td><?php  echo $description ; ?></td>
</tr>

</table>
</center>
<br>
<center><img src="<?=$user_sign;?>" height="50px" width="50px"   ></center>
<br>
<div class="table3"><center>
<table class="table table-bordered">
<div class="row1">
<tr>

</tr>
<tr>
 <td><b>ACTION TAKEN</b></td>
 <td><?php  echo $status ; ?>
</td>

</tr>
<tr>
<td><b>REMARKS</b></td>
<td>
<?php  echo $remark ; ?></td>
</tr>






</table>
</center><INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?=$userid?>" ><INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $userpass?>" >
<center><input type="submit" class="btn btn-3" name="SUBMIT" value="Back" ></center><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


</form>
</div></center>
<br>
</div>
</br>
</div>
</body>
 <center><footer style="color:red;"><h4>Prepared by IT & IS group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php date_default_timezone_set("Asia/Kolkata");echo date('d/m/Y'); ?> &nbsp;<?php echo date('h:i:sa');?></h4></footer></center>
</html>