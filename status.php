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
	  background-color:#33CCFF;
      color: white;
      opacity: 1;
		padding-bottom:20px;
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
align:center;}
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
}
.status{
margin-left:420px;
margin-right:420px;
background-color:#FFCC33;
border:solid;
border-color:#000000;
}
     </style>
</head>
<h1><big><div class="logo"><img  src="logo.png"  class="img-circle"><center>&nbsp;&nbsp;&nbsp;&nbsp;&#2354;&#2375;&#2395;&#2352; &#2357;&#2367;&#2332;&#2381;&#2334;&#2366;&#2344; &#2324;&#2352;&#2346;&#2381;&#2352;&#2380;&#2342;&#2381;&#2351;&#2379;&#2327;&#2367;&#2325;&#2368;  &#2325;&#2375;&#2306;&#2344;&#2381;&#2342;&#2381;&#2352;&nbsp;&nbsp;&nbsp;<br>
<b>GRIEVANCE REDRESSAL SYSTEM</b></b></big></div></h1>
<br>
<b><center><div class="status"><h2>
          &#2341;&#2340;&#2367;<br>
   <b> STATUS</b>
</center></b></h2></h2></div><br>
<div class="container">
<br>
<table align="center" class="table table-hover">
<thead>
<tr>
<th size="18"align="center">S.no</td>
<th align="center">Complaint no</th>
<th align="center">&#2344;&#2366;&#2350;<br>
  Name</th>

<th align="center">&#2346;&#2342;<br>
  Designation</th> 
<th align="center">&#2358;&#2367;&#2325;&#2366;&#2351;&#2340; &#2325;&#2367; &#2340;&#2366;&#2352;&#2368;&#2325; <br>
  Date of complaint</th>
<th align="center"><br>
  Subject</th>
<th align="center">Status</th>

<th align="center">No Of Days</th>
<th align="center">View</th>
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
$sql="select * from user_complaint where user_complaint.Login_id='$userid' or user_complaint.fwd='$userid' order by reqno desc;";
$result=odbc_exec($conn, $sql);
$sno=0;
while(odbc_fetch_row($result))
{
  
    $id=odbc_result($result,'reqno');
$sno=$sno+1;
$date=odbc_result($result,'user_date');

	
	 $currdate=date('d/m/Y');
	 
	 $diff=abs(strtotime($currdate)-strtotime($date));
	
	 echo "<tr>";
echo "<td>".$sno."</td>";
	 echo "<td>".odbc_result($result,'reqno')."</td>";
echo "<td>".odbc_result($result,'name')."</td>";

echo "<td>".odbc_result($result,'desig')."</td>";
echo "<td>".odbc_result($result,'user_date')."</td>";
echo "<td>".odbc_result($result,'subject')."</td>";

echo "<td>".odbc_result($result,'status')."</td>";
echo "<td>";
	if ($diff >=10)
	
     {
	echo "pass to head";
	}
	else 
	{
	 echo "in process";
	}
	echo "</td>";
	


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

	//$_SESSION['uid']=$_POST['submit $id'];
	echo "</tr>";
	 }

?> 
	 
	
				
	
	 

	 
	 
	 
	 
	 
	 
	 





</table>


<center>
<form method="POST" action="page2.php">
  <input type="submit" name="Back" value="Back"  class="btn btn-3">
  <INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?=$userid?>" ><INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $userpass?>" >
</form>
 <input type="submit" name="logout" value="LOGOUT"  class="btn btn-3" onClick="logout.php">
</center>
  </div>       
   </p>
   
 
 </body>
  <center><footer style="color:red;"><h4>Prepared by IT & IS group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php date_default_timezone_set("Asia/Kolkata");echo date('d/m/Y'); ?> &nbsp;<?php echo date('h:i:sa');?></h4></footer></center>
 </html>