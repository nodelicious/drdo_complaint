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
     <style type="text/css">
    
     
 
     h1{
      background-color: black;
      color: white;
      opacity: 0.9;
padding-bottom:20px;
padding-top:10px;
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
table, th,tr,td{
    border: 3px solid black;

	
    margin-left: auto;
    margin-right: auto;
}
.mailbox{
margin-left:400px;
margin-right:400px;
background-color:#FFCC33;
border:solid;
border-color:#000000;}
.container{
background: linear-gradient(to right,lightblue,white,lightblue);
margin-left: auto;
    margin-right: auto;
	text-align: center;
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
	 .logo img{
  display: block;
  height: 100px;
  width: 100px;
  float: left;
  margin-left:20px;
  margin-top:10px;
  margin-bottom:10px;
}
th{border: 3px solid black;
color:red;
text-align: center;}
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
     </style>
</head>
<center><h1><big><div class="logo"><img  src="logo.png"  class="img-circle"></div>
      <big><b>आई.टी एवं आई.एस शिकायत निवारण प्रणाली  </b></big><b></b><br>
IT &amp; IS GRIEVANCE REDRESSAL SYSTEM</big></h1>
</center>
<br>
<div class="mailbox">
<h2><b><center>
    
      <b> <br>
    मेल बॉक्स</b>      <br>
    MAILBOX
</center></h2> </div>
<div class="container"><br>
<table align="center" class="table table-hover">
<thead>
<tr>
<th size="18"align="center">क्रमांक<br>
  S.no</th>
<th align="center"><b>&#2358;&#2367;&#2325;&#2366;&#2351;&#2366;&#2340; संख्या</b> <br>
  Complaint no</th>
<th align="center"><strong>नाम</strong><br>
  Name</th> 

<th align="center"><b>&#2346;&#2342;</b><br>
  Designation</th> 
<th align="center"><b>शिकायत की तारीख एवं समय<br>
  Date and Time of Complaint</th>
  
<th align="center">&#2357;&#2367;&#2359;&#2351;<br>
  Subject</th>

<th align="center">स्थिति<br>
  Status</th>
<th align="center">देखें<br>
  View</th>
</tr>
</thead>
<tbody>
<tr class="success">
<?php
$userid=$_POST['userid'];
  $userpass=$_POST['userpass'];
$connection='DRIVER={SQL SERVER};SERVER=lasteclab;dsn=mis;database=mis';
$user='mis';
$pass='mis';
$conn=odbc_connect($connection, $user, $pass);
if(!empty($_POST['status'])){
$status=$_POST['status'];
$reqno=$_POST['reqno'];
$remark=$_POST['remark'];
$date = date('d-m-Y H:i:s');
$sql="update user_complaint set status='$status',remark='$remark',action_date='$date' where reqno='$reqno';";
$result=odbc_exec($conn, $sql);
}
$sql="select * from user_complaint where fwd='$userid' order by reqno desc;";
$result=odbc_exec($conn, $sql);
$sno=0;
while(odbc_fetch_row($result))
{
  
    $id=odbc_result($result, 'reqno');
    $ch=odbc_result($result, 'status');
if($ch!='ACCEPTED' && $ch!='REJECTED'){
	$sno=$sno+1;
	 echo "<tr>";
echo "<td>".$sno."</td>";
	 echo "<td>".odbc_result($result,'reqno')."</td>";
echo "<td>".odbc_result($result,'name')."</td>";
echo "<td>".odbc_result($result,'desig')."</td>";
echo "<td>".odbc_result($result,'user_date')."</td>";

echo "<td>".odbc_result($result,'subject')."</td>";

echo "<td>".odbc_result($result,'status')."</td>";	
echo "<td>";	
//echo "</tr>";
	?>
	<form method="post" action="view.php">			
				<p align="center">
				<INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?= $userid;?>" >
				<INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $userpass?>" >
				<INPUT TYPE="HIDDEN" NAME="req" VALUE="<?=$id?>" >
				<button type="submit" name="view" class="btn btn-success btn-md"/> 
				<span class="glyphicon glyphicon-eye-open"></span>View MAIL</button></p>
				<INPUT TYPE="HIDDEN" NAME="req" VALUE="<?=$id?>" >
				</p>
		</form>
				
	<?php
		echo "</td>";

	//$_SESSION['uid']=$_POST['submit $id'];=
	echo "</tr>";
	 }
}
?> </form>
	 
	 
	 
	 
	 
	 
	 
	 





</table>
</div>
<center>
<form method="POST" action="page2.php">
  <input type="submit" name="Back" value="वापस / Back"  class="btn btn-3">
  <input type="submit" name="logout" value="लॉग आउट / LOGOUT"  class="btn btn-3" onClick="parent.open('logout.php')">
  <INPUT TYPE="HIDDEN" NAME="userid" VALUE="<?=$userid?>" ><INPUT TYPE="HIDDEN" NAME="userpass" VALUE="<?= $userpass?>" >
</form>
</center>

           
  
 
 </body><center><div class="footer"><h4>Designed and developed by IT & IS group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php date_default_timezone_set("Asia/Kolkata");echo date('d/m/Y'); ?> &nbsp;</h4></div></center>
</html>