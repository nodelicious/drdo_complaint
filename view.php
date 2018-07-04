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
session_start();
 
	   $reqno=$_POST['req'];
	$conn =mysqli_connect ("localhost","root","");
mysqli_select_db($conn,"login");


	   $sql="select * from users2 where users2.reqno='$reqno' ";

	$userquery=mysqli_query($conn,$sql);
	if(mysqli_num_rows($userquery) !=1)
	{
		die("that username could not be found");
	}
	
	else{ 
	while($row=mysqli_fetch_array($userquery, MYSQLI_ASSOC)){
		
		$name=$row['name'];
		$designation=$row['designation'];
		$groupname=$row['groupname'];
		$extensionno=$row['extentionno'];
		$sub=$row['subject'];
		$department=$row['department'];
		$description=$row['description'];
	  }}
	

?>
<h1><big><img  src="drdo.png"  class="img-circle">&nbsp;&nbsp;&nbsp;&nbsp;<b>LASER SCIENCE AND TECHNOLOGY CENTER</b></big></h1>
<br>
<br>
<div class="box">
<h2><b><center>COMPLAINT REGISTRATION FORM</center></b></h2>

<hr>
<center>
<h3><center><B>USER DETAILS</CENTER></B></H3>
<BR>

 
 
 <form action="mailbox.php" method="POST"> 
<table class="table table-bordered">
<div class="row1">
<tr>
<td>NAME</td>
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
<td> <?php  echo $groupname; ?></td>
</tr>
<tr>
<td>EXTENSION NUMBER</td>
<td> <?php  echo $extensionno ; ?></td>
</tr>
</table></center>
<br>
<center>
<h3><center><B>COMPLAINT DETAILS</CENTER></B></H3>
<br>

<table class="table table-bordered">
<div class="row1">
<tr>
<td>SUBJECT</td>
<td><?php  echo $sub ; ?></td>
</tr>
</div>
<div class="row2">
<tr>
<td>DEPARTMENT</td>

<td><?php  echo $department ; ?></td>
</tr>
</div>
<tr>
<td>DESCRIPTION</td>
<td><?php  echo $description ; ?></td>
</tr>

</table>
</center>
<br>

<br>
<div class="table3"><center>
<table class="table table-bordered">
<div class="row1">
<tr>
 <td>ACTION TAKEN</td>
 <td><select  name="status" >
  <option selected>-Select-</option>
  <option value="ACCEPTED" method="post">ACCEPTED</option>
  <option value="REJECTED" method="post">REJECTED</option>
</select>
</td>
<input type ="hidden" name="reqno" value="<?php  echo $reqno ; ?>">
</tr>
<tr>
<td>REMARKS</td>
<td>
<textarea rows="3" method="post" name="remark"></textarea></td>
</tr>

</form>




</table>
</center></form>
<center><td><input type="submit" class="btn btn-3" name="Back" value="Back" onClick="parent.open('mailbox.php')"></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><input type="button" class="btn btn-3" name="Exit" value="Exit"></td></center>
</div>
<br>
</div>

</body>
</html>