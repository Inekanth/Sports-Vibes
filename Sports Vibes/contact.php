<?php
include_once("config.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$query=mysqli_query($con,"insert into data(name,email,message) values('$name','$email','$message')");
	if($query)
	{
	echo "<script>alert('Data submitted successfully');</script>";
	}
	else
	{
		echo "<script>alert('Data not inserted');</script>";
	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/boodstrap/bootstrap.css" rel="stylesheet">
    <link href="style/boodstrap/bootstrap.min.css" rel="stylesheet">
    <link href="style/men.css" rel="stylesheet">
    <script src="js/form.js"></script>
		<title>contact</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
	<div class="nav">
        <ul class="navList">
        <li><a href="index.php">Home</a></li>
			<li ><a href="about us.php">About us</a></li>
			
<li ><a href="contact.php">Contact</a></li>
<li><a class="active" href="available sports.php">Available sports and Information</a></li>
         <li ><a href="coach.php">Coaches Information</a></li>
         <li><a href="signup/signin.php"target="_blank">admin</a></li>
        </ul>
    </div>


<div class="container-fluid">

  <div class="col-sm-6">
    <div class="row">
      <div class="col-xs-12">
        <h3>contact us </h3>
		<hr >
		<form name="insert" action="" method="post">
     <table width="100%"  border="0">
    <tr>
    <th height="62" scope="row">Name </th>
    <td width="71%"><input type="text" name="name" id="name" value=""  class="form-control" required /></td>
  </tr>  
  <tr>
    <th height="62" scope="row">Email id </th>
    <td width="71%"><input type="email" name="email" id="email" value=""  class="form-control" required /></td>
  </tr>
  
   <tr>
    <th height="62" scope="row">message</th>
    <td width="71%"><textarea name="message" class="form-control"  required></textarea> </td>
  </tr>
 <tr>
    <th height="62" scope="row"></th>
    <td width="71%"><input type="submit" name="submit" value="Submit" class="btn-group-sm" /> </td>
  </tr>
</table>
 </form>

      </div>
    </div>
    <hr>
        
   
  </div><!--/center-->

 
<!--/right-->
  <hr>
</div><!--/container-fluid-->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>