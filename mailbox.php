<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="c.jpg">
    <title>DRDO</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/bootstrap-theme.min.css" rel="stylesheet">
     <link href="theme.css" rel="stylesheet">
    <link href="css/hello.css" rel="stylesheet">
     <link rel="icon" href="c.jpg" type="image/gif" sizes="15*15">
     <style type="text/css">
    
     
 
     h1{
      background-color: black;
      color: white;
      opacity: 0.9;

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

body {
  
    background: blue; 
    background: linear-gradient(to right, lightblue , white); 
}
table, th,tr,td{
    border: 3px solid black;

	
    margin-left: auto;
    margin-right: auto;
}

     </style>
     </head>
<h1><big><img  src="drdo.png"  class="img-circle">&nbsp;&nbsp;&nbsp;&nbsp;<b>LASER SCIENCE AND TECHNOLOGY CENTER</b></big></h1>
<br>

<h2><b><center>MAILBOX</center></b></h2>
<div class="container">
<table align="center" class="table table-hover">
<thead>
<tr>
<th size="18"align="center">S.no</th>
<th align="center">Complaint no</th>
<th align="center">Name</th>
<th align="center">Department</th> 
<th align="center">Designation</th> 
<th align="center">Date of complaint</th>
<th align="center">Subject</th>
<th align="center">Description</th>
<th align="center">Status</th>
<th align="center">View</th>
</tr>
</thead>
<tbody>
<tr class="success">
<?php
session_start();
  global $username;
  
  if(isset($_SESSION['uname']))
{
	//global $username;
	$username=$_SESSION['uname'];
	
	}
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn, "login");
if(!empty($_POST['status'])){
$status=$_POST['status'];
$reqno=$_POST['reqno'];
$remark=$_POST['remark'];
$sql="update users2 set status='$status',remark='$remark' where users2.reqno='$reqno';";
$result=mysqli_query($conn, $sql);}
$sql="select * from users2, users where users.id=users2.fwd and users.username='$username';";
$result=mysqli_query($conn, $sql);
$sno=0;
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
  
    $id=$row['reqno'];
$sno=$sno+1;
if($row['status']!="ACCEPTED" && $row['status']!="REJECTED"){
	
	 echo "<tr>";
echo "<td>".$sno."</td>";
	 echo "<td>".$row['reqno']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['department']."</td>";
echo "<td>".$row['designation']."</td>";
echo "<td>".$row['date']."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td>".$row['description']."</td>";
echo "<td>".$row['status']."</td>";	
echo "<td>";	
//echo "</tr>";
	?>
	<form method="POST" action="view.php">			
				<p align="center">
				<button type="submit" name="view" class="btn btn-success btn-md"/> 
				<span class="glyphicon glyphicon-eye-open"></span>View MAIL</button></p>
				<INPUT TYPE="HIDDEN" NAME="req" VALUE="<?=$id?>" >
				</p>
				</form>
				
	<?php
		echo "</td>";

	//$_SESSION['uid']=$_POST['submit $id'];
	echo "</tr>";
	 }
}
?> </form>
	 
	 
	 
	 
	 
	 
	 
	 





</table>
</div>
<center>
<input type="button" name="Back" value="Back" onClick="parent.open('page2.php')" class="btn btn-3">
<input type="button" name="Exit" value="logout" onClick="parent.open('logout.php')" class="btn btn-3">
</center>


           <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
   
    <script src="js/ie10-viewport-bug-workaround.js"></script>
   
   
 
 </body>
 </html>