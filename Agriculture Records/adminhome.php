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



</head>
<body>

<?php


include'admin_css.php'



	?>

<div class="content">
	
<h1>Admin Dashboard</h1>

<p>
	The future belongs to the few of us still willing to get our hands dirty.
</p>


</div>


</body>
</html>