<?php

session_start();
error_reporting(0);
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

$sql="SELECT * FROM user WHERE usertype='farmer'";

$result=mysqli_query($data,$sql);



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
	
	<title>Admin Dashboard</title>


<body>

<?php

include'admin_css.php'
	?>
	<style type="text/css">
		
.table_th
{
	padding: 20px;
	font-size: 20px;
}
.table_td
{
	padding: 20px;
	background-color: rgba(255, 255, 128, .5);
}

	</style>
	</head>

<div class="content">
	<center>
<h1>Farmer Data</h1>

<?php
if($_SESSION['message'])

{
	echo $_SESSION['message'];
}
unset($_SESSION['message']);

?>


<br><br>
<table border="1px">
	<tr>
		<th class="table_th">UserName</th>
		<th class="table_th">Email</th>
		<th class="table_th">Phone</th>
		<th class="table_th">Password</th>
		<th class="table_th">Delete</th>
		<th class="table_th">Update</th>
	</tr>

<?php

while($info=$result->fetch_assoc())




{

?>

<tr>
	<td class="table_td">
		<?php echo"{$info['username']}"; ?>
	</td>
	<td class="table_td">
		<?php echo"{$info['email']}"; ?>
		
	</td>
	<td class="table_td">
		<?php echo"{$info['phone']}"; ?>
		
	</td>
	<td class="table_td">
		<?php echo"{$info['password']}"; ?>
	</td>

<td class="table_td"> 
	<?php echo"<a onCLICK=\"javascript:return confirm('Are Your Sure to Delete this ')\"
	class='btn btn-danger' href='delete.php?farmer_id={$info['id']}'>Delete</a>"; 
	?>
		
	</td>

<td class="table_td">
		<?php echo "<a class='btn btn-primary' 
		href='update_farmer.php?farmer_id={$info['id']}'> Update </a>"; 
		?>
	</td>


</tr>

<?php
}
?>

</table>
</table>

</center>

</div>


</body>
</html>