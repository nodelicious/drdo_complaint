<!DOCTYPE html>
<html lang="en">
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
    
     <style>
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
     h1{
      background-color: black;
      color: white;
      opacity: 0.9;
	    padding-top:20px;
	  padding-bottom:20px;
    

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
  color: black;

  box-shadow: 0 0 20px #eee;
  border-radius: 20px;
 }

.btn:hover {
  background-position: right center; 
}

.btn-3 {
  background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);
}

body{

  background: linear-gradient(to bottom,green,lightblue,green);
}
table,tr,td{
    border: 3px solid black;

	
    margin-left: auto;
    margin-right: auto;
}
th{border: 3px solid black;
color:red;
text-align:center;}
     .btn1 {  flex: 1 1 auto;
  margin: 20px;
  padding-left: 30px;
   padding-right: 30px;
  text-align: center;
  text-transform: uppercase;
  transition: 0.5s;
  background-size: 200% auto;
  color: black;

  box-shadow: 0 0 20px #eee;
  border-radius: 20px;
}
     .btn2 {  flex: 1 1 auto;
  margin: 20px;
  padding-left: 30px;
   padding-right: 30px;
  text-align: center;
  text-transform: uppercase;
  transition: 0.5s;
  background-size: 200% auto;
  color: black;

  box-shadow: 0 0 20px #eee;
  border-radius: 20px;
}
     .btn3 {  flex: 1 1 auto;
  margin: 20px;
  padding-left: 30px;
   padding-right: 30px;
  text-align: center;
  text-transform: uppercase;
  transition: 0.5s;
  background-size: 200% auto;
  color: black;

  box-shadow: 0 0 20px #eee;
  border-radius: 20px;
}
.logo img{
  display: block;
  height: 100px;
  width: 100px;
  float: left;
 
}
.container{
background: linear-gradient(to right,lightblue,white,lightblue);
margin-left: auto;
    margin-right: auto;
	text-align:center;
}
.status{
margin-left:420px;
margin-right:420px;
background-color:#FFCC33;
border:solid;
border-color:#000000;
}
     .btn4 {  flex: 1 1 auto;
  margin: 20px;
  padding-left: 30px;
   padding-right: 30px;
  text-align: center;
  text-transform: uppercase;
  transition: 0.5s;
  background-size: 200% auto;
  color: black;

  box-shadow: 0 0 20px #eee;
  border-radius: 20px;
}
     .btn5 {  flex: 1 1 auto;
  margin: 20px;
  padding-left: 30px;
   padding-right: 30px;
  text-align: center;
  text-transform: uppercase;
  transition: 0.5s;
  background-size: 200% auto;
  color: black;

  box-shadow: 0 0 20px #eee;
  border-radius: 20px;
}
     </style>
</head>
<h1><big>
<div class="logo"><img  src="logo.png"  class="img-circle"><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<big><b>आई.टी एवं आई.एस </b><b>शिकायत निवारण प्रणाली </b></big><br>
IT &amp; IS GRIEVANCE REDRESSAL SYSTEM</big></div>
</h1>
<br>
<center><div class="status">
  <h2><br>
   <b> स्थिति</b><br>
    STATUS
</center></h2>
</div><br>
<div class="container">
<br>
<table align="center" class="table table-hover">
<thead>
<tr>
<th size="18" align="center">क्रमांक<br>
  S.no</td>
<th align="center">शिकायत संख्या<br>
  Complaint no</th>
<th align="center"><b>&#2344;&#2366;&#2350;</b><br>
  Name</th>

<th align="center"><b>&#2346;&#2342;</b><br>
  Designation</th> 
<th align="center"><b>शिकायत की तारीख़ </b>एवं समय<br>
  Date and Time of complaint</th>
 
<th align="center"><br>
  <b>विषय</b><br>
  Subject</th>
<th align="center"><b>स्थिति</b><br>
  Status</th>
<th align="center"><b>कार्यवाई की तारीख़ </b>एवं समय<br>
  Action taken on</th>

<th align="center"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;देखें</b><br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; View</th>
 <th align="center"><b></b>प्रिंट<br>
  Print</th>
</tr>
</thead>
<tr class="success">
<?php

 $userid=$_POST['userid'];
  $userpass=$_POST['userpass'];
$connection='DRIVER={SQL SERVER};SERVER=lasteclab;dsn=mis;database=mis';
$user='mis';
$pass='mis';
$conn=odbc_connect($connection, $user, $pass);
if($userid=='test'){
  $sql="select * from user_complaint order by reqno desc;";
}
else{
$sql="select * from user_complaint where Login_id='$userid' or fwd='$userid' order by reqno desc;";}
$result=odbc_exec($conn, $sql);
$sno=0;
while(odbc_fetch_row($result))
{
  $status=odbc_result($result,'status');
    $id=odbc_result($result,'reqno');
$sno=$sno+1;
$date=odbc_result($result,'user_date');

	
	
	 echo "<tr>";
echo "<td>".$sno."</td>";
	 echo "<td>".odbc_result($result,'reqno')."</td>";
echo "<td>".odbc_result($result,'name')."</td>";

echo "<td>".odbc_result($result,'desig')."</td>";
echo "<td>".odbc_result($result,'user_date')."</td>";

echo "<td>".odbc_result($result,'subject')."</td>";

echo "<td>".$status."</td>";
echo "<td>".odbc_result($result,'action_date')."</td>";


echo "<td>";
	?>
	<form method="POST" action="viewstatus.php">	
			<INPUT TYPE="HIDDEN" NAME="req" VALUE="<?=odbc_result($result,'reqno')?>" >	<INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?=$userid?>" ><INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $userpass?>" >
				<p align="center">
				<button type="submit" name="view" class="btn btn-success btn-md"/> 
				<span class="glyphicon glyphicon-eye-open"></span>View MAIL</button></p>
				
				
				</p>
	</form>
				<?php
		echo "</td>";
	echo "<td>";
  if($status!="NEW"){
?> 
<form method="post" action="temp.php">
<INPUT TYPE="HIDDEN" NAME="req" VALUE="<?=odbc_result($result,'reqno')?>" >	<INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?=$userid?>" ><INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $userpass?>" ><button type="submit" name="print" class="btn btn-success btn-md" /> 
				<span class="glyphicon "></span>PRINT</button></p></form>	 
	<?php } echo "</td>";
	echo "</tr>";
	}
	?>
				
	
	 

	 
	 
	 
	 
	 
	 
	 





</table>


<center>
<form method="POST" action="page2.php">
  <INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?=$userid?>" ><INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $userpass?>" >

  <input type="submit" name="back" value="वापस / BACK"  class="btn btn-3" >
  
   
  <input type="submit" name="logout2" value="लॉग आउट / LOGOUT"  class="btn btn-3" onClick="parent.open('logout.php')">
  <INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?=$userid?>" ><INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $userpass?>" >
</form>
 </center>
</div>       
   </p>
   
 
 </body>
  <center><div class="footer"><h4>Designed and Developed by IT & IS group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php date_default_timezone_set("Asia/Kolkata");echo date('d/m/Y'); ?> &nbsp;</h4></div></center>
</html>