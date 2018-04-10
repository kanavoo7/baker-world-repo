<?php
$servername="localhost";
$user="root";
$pwd="";
$db="bakery_system";
$conn=new mysqli($servername,$user,$pwd,$db);
if($conn->connect_error)
{
	echo ("Connection Failed:". $conn->connect_error);
}
$cname=4_POST['cust_name'];
echo $cname;
?>