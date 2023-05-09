<?php

session_start();

$host="localhost";

$user="root";

$password="";

$db="agricultureproject";


$data=mysqli_connect($host,$user,$password,$db);
{
if  ($data===false)
	die("connection error");
}


if(isset($_POST['apply']))



{
$data_farmer=$_POST['farmer'];
$data_email=$_POST['email'];
$data_phone=$_POST['phone'];
$data_message=$_POST['message'];


$sql="INSERT INTO registration(farmer,email,phone,message) VALUES ('$data_farmer','$data_email','$data_phone','$data_message')";

$result=mysqli_query($data,$sql);

if($result)
{
	
$_SESSION['message']="your aplication sent successsful";

header("location:index.php");

}

else
{
	echo "Apply Failed";
}





}

?>