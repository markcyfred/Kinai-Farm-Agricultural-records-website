<?php

session_start();

if(!isset($_SESSION['username']))
{
header("location:login.php");

}

elseif($_SESSION['usertype']=='admin')
{

header("location:login.php");	
}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Farmer Dashboard</title>


<?php

include 'farmer_css.php'
 
?>


	
</head>
<body>


<?php

include 'farmer_sidebar.php'
 
?>


<div class="content">
	

<p>
	<h4> The farmer is the only man in our economy who buys everything at retail sells everything at wholesale and pays the freight both ways.</h4> 

</p>


</div>
</body>
</html>