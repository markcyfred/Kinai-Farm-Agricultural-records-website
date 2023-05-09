<?php

session_start();


$host="localhost";
$user="root";
$password="";
$db="agricultureproject";

$data=mysqli_connect($host,$user,$password,$db);


if($_GET['farmer_id'])

{
$user_id=$_GET['farmer_id'];

$sql="DELETE FROM user WHERE id='$user_id'";

$result=mysqli_query($data,$sql);

if($result)
{
	$_SESSION['message']='Delete Farmer is Successful';
	header("location:view_farmer.php");
}

}
?>