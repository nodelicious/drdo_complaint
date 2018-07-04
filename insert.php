<?php
session_start();
  global $username;
  
  if(isset($_SESSION['uname']))
{
	//global $username;
	$username=$_SESSION['uname'];
	
	}

if(isset($_POST['submit'])){
$subject=$_POST['subject'];
$description=$_POST['desc'];
$suggestion=$_POST['sugg'];
$forwd=$_POST['sub'];
 date_default_timezone_set('Asia/Kolkata');
	   $date = date('d/m/Y');
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn, "login");



$sql =  "SELECT MAX(reqno) AS max FROM `users2`;" ;
$userquery=mysqli_query($conn, $sql);
$row = mysqli_fetch_array( $userquery,MYSQLI_ASSOC);
$largestNumber = $row['max'];

$largestNumber=$largestNumber + 1 ;




$sql = "update `users2` set `subject`='$subject', `description`='$description', `suggestion`='$suggestion', `fwd`='$forwd',`date`='$date' ,`reqno`='$largestNumber'
 WHERE  users2.username='$username'; ";
if($conn->query($sql)===TRUE){
	header('location: complaintsuccess.php');
}
else{
	echo "failed";
}
//mysqli_free_result($result);
//mysqli_close($conn);
	

}

?>