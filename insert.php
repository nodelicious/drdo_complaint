<?php


$userid=$_POST['userid'];
$name=$_POST['name'];
$desig=$_POST['desig'];
//$sign=$_POST['empsign'];
$ext=$_POST['ext'];
$subject=$_POST['subject'];
$description=$_POST['desc'];
$suggestion=$_POST['sugg'];
$forwd=$_POST['sub'];
 date_default_timezone_set('Asia/Kolkata');
	   $date = date('d-m-Y H:i:s');
	  // $time= date('H:i:s');
$connection='DRIVER={SQL SERVER};SERVER=lasteclab;dsn=mis;database=mis';
$user='mis';
$pass='mis';
$conn=odbc_connect($connection, $user, $pass);
$sql="select * from logins where Login_id='$userid';";

	$userquery=odbc_exec($conn,$sql);

	while(odbc_fetch_row($userquery)){
		
		$sign=odbc_result($userquery, 'signature');}
$sql =  "SELECT MAX(reqno) AS max FROM user_complaint;" ;
$userquery=odbc_exec($conn, $sql);
while(odbc_fetch_row($userquery))
{

$largestNumber = odbc_result($userquery, 'max');

$largestNumber=$largestNumber + 1 ;
}
$sql = "INSERT INTO  user_complaint (Login_id, reqno, subject, description, suggestion, fwd , user_date, ext_no, name, desig, user_sign, status) VALUES ('$userid','$largestNumber','$subject','$description','$suggestion','$forwd','$date', '$ext', '$name', '$desig', '$sign','NEW') ;";
$result=odbc_exec($conn, $sql);
header('location:complaintsuccess.php');
?>