<?php

$dbhost = 'localhost'; //host
$dbuser = 'root'; //your username created
$dbpass = ''; //the password 4 that user
$dbname = 'cdcol';

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

//mysqli_select_db($dbname);//your database.

if(mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$gtid=$_POST[gtid];
$skill=$_POST[profileskill];
$rank = $_POST[rank];

$sql="insert into skills(gtid, skill, rank) values ('$gtid', '$skill','$rank')";
if(!mysqli_query($conn, $sql))
{
	die('Error:' . mysqli_error($conn));
}
echo "1 record added";
mysqli_close($conn);
?>


