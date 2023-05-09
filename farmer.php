
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

$sql="SELECT * from registration";

$result=mysqli_query($data,$sql);

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Admin Dashboard</title>



	<?php


include'admin_css.php'

?>
</head>
<body>

<?php

include'admin_sidebar.php';
?>
<div class="content">
	<center>


<h1>Applied Farmers</h1>


<br></br>

<table border="1px">
	<tr>
		<th style="padding: 20px; font-size: 15px">Farmer</th>
		<th style="padding: 20px; font-size: 15px">Email</th>
		<th style="padding: 20px; font-size: 15px">Phone</th>
		<th style="padding: 20px; font-size: 15px">Message</th>
	</tr>

<tr>
<?php
while ($info=$result->fetch_assoc()) 

{
  ?>
	<td style="padding: 20px">
		<?php echo "{$info['farmer']}"; ?>
	</td>
	<td style="padding: 20px"><?php echo "{$info['email']}"; ?></td>
	<td style="padding: 20px"><?php echo "{$info['phone']}"; ?></td>
	<td style="padding: 20px"><?php echo "{$info['message']}"; ?></td> 

</tr>




<?php

}

?>


</table>

</center>
</div>


</body>
</html>