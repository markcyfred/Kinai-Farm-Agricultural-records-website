<?php

session_start();

if(!isset($_SESSION['username']))
{
header("location:login.php");

}
elseif($_SESSION['usertype']=='farmer')
{

header("location:login.php");	
}



$host="localhost";
$user="root";
$password="";
$db="agricultureproject";

$data=mysqli_connect($host,$user,$password,$db);

$id=$_GET['farmer_id'];

$sql="SELECT * FROM user WHERE id='$id'";

$result=mysqli_query($data,$sql);

$info=$result->fetch_assoc();
if (isset($_GET['update']))
	{
$name=$_POST['name'];
$Email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
	
$query="UPDATE user SET username='$name',email='$email',phone='$phone',password='$password' WHERE id='$id'";

$result2=mysqli_query($data,$query);

if($result2)
{
	header("location:view_farmer.php");
	
}

	}

?>

<?php
include'admin_css.php'
	?>
</head>
<body>

<?php

include'admin_sidebar.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Upadte Farmer</title>


<?php

include'admin_css.php'
?>
<style type="text/css">
	label
	{
	display: inline-block;
	width: 100px;
	text-align: right;
	padding-top: 10px;
	padding-bottom: 10px;	
	}
	.div_deg
	{
		background-color: blanchedalmond;
		width: 400px;
		padding-bottom: 70px;

		padding-top: 70px;
	}
</style>


</head>
<body>


<div class="content">
	
	<center>
<h1>Update Farmer</h1>

  

<div class="div_deg">

<form action="#" method="POST">
	<div>
<label>Username</label>
<input type="text" name="name"
value="<?php echo "{$info['username']}"; ?>">
	</div>
	<div>
<label>Email</label>
<input type="email" name="email"
value="<?php echo "{$info['email']}"; ?>">
	</div>
	<div>
<label>Phone</label>
<input type="number" name="phone"
value="<?php echo "{$info['phone']}"; ?>">
	</div>
	<div>
<label>password</label>
<input type="text" name="password"
value="<?php echo "{$info['password']}"; ?>">
	</div>
	<div>

<input class="btn btn-success" type="submit" 
name="update" value="Update">
	</div>
</form>	
</div>


</div>
</center>

</body>
</html>