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

if (isset($_POST['add_product'])) {
	
$t_name=$_POST['name'];

$t_description=$_POST['description'];

$file=$_FILES['image']['name'];

$dst=".image/".$file;

$dst_db="image/".$file;

move_uploaded_file($_FILES['image']['name'], $dst );

$sql="INSERT INTO product (name,description,image)
VALUES ('$t_name',$'t_description','$dst_db')";


$result=mysqli_query($data,$sql);


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
	


	<title>Add Product</title>

<style type="text/css">

	.div_deg
{
background-color: blanchedalmond;
padding-top: 70px;
padding-bottom: 70px;
width: 500px;
}
</style>

</head>
<body>

<?php
include'admin_css.php'
	?>

<div >
	<center>

		<h1>Add Product</h1> <br><br>
		<div class="div_deg">

			<form action="#" method="" enctype="multipart/form-data">
				<div>
					<label>Product Name :</label>
					<input type="text" name="name">
				</div>
                  <br>
				<div>
					<label>Description :</label>
                     <textarea name="description"></textarea>
				</div>
<br>
				<div>
					<label>Image :</label>
					<input type="file" name="image">
				</div>
<br>
				<div>
					
					<input type="submit" name="add_product" value="Add Product" class="btn btn-primary">
				</div>
			</form>
		</div>


</center>


</div>


</body>
</html>