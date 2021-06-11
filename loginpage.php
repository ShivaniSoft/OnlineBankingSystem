<?php

$con=mysqli_connect('localhost','root','','company');
?>
<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Simple Banking System</title>
    <style>
    .reg{
		background-color:rgb(0,0,0,0.8);
		width:500px;
		height:800px;
		border-radius:20px;
		margin:auto;
		box-sizing:500px;
		padding:10px;
		color:#fff;
		margin-top:100px;
		margin-bottom:10px;
	
	}
	i
	{
	float:right;
	text-align:center;
	padding:10px;
	}	
	.email
	{
		width:445px;
		margin-left:15px;
		border:none;
		border-bottom:2px solid #fff;
		background:transparent;
		outline:none;
		height:30px;
		color:#fff;
		font-size:16px;
		border-radius:5px;
	}
    body
    {
    background-image:url("123.png");
    background-size:cover;
    margin:0;
    }
    ul 
	 {
 	 position:fixed;
  	 width:100%;
 	 top:0;
  	list-style-type: none;
  	overflow: hidden;
  	background-color: #333;
  	margin:0;
  	padding:0;
	}
	li {
 	 float: left;
	}

	li a {
 	 display: block;
 	 color: white;
 	 text-align: center;
  	padding: 14px 16px;
  	text-decoration: none;
  	font-weight:bold;
	}

	li a:hover:not(.active) {
  	background-color: #111;
	}	

	.active {
  	background-color: #4CAF50;
	}
	.button
	{
	background-color:violet;
	color:white;
	font-size:20px;
	padding:10px;
	text-align:center;
	width:350px;
	margin-top:50px;
	margin-left:80px;
	font-family:times new roman;
	font-weight:bold;
	border-radius:20px;
	}
	.button2
	{
	background-color:dodgerblue;
	color:white;
	font-size:20px;
	padding:10px;
	text-align:center;
	width:350px;
	margin-top:30px;
	margin-left:80px;
	font-family:times new roman;
	font-weight:bold;
	border-radius:20px;
	}
	h4
	{
	margin-left:20px;}
    	input[type = radio]
    	{
    	margin-left:30px;}
    	a
    	{
    	color:red;
    	text-decoration:none;
    	}
    </style>
</head>
<body>
	<ul>
  	<li><a href = "index.php">Home</a></li>
  	<li><a  href = "about.php">About Us</a></li>
  	<li><a  href = "#Contact Us">Contact Us</a></li>
  	<li><a href = "signin.php">Login</a></li>
  	<li><a class = "active" href = "loginpage.php">Register</a></li>
  	<li><a href = "logout.php">Logout</a></li>
  	<i class="fas fa-compress-arrows-alt" style= "font-size:20px; color: white;" onclick="closeFullscreen();"></i>
  	<i class="fas fa-external-link-alt" style = "font-size:20px; color: white;" onclick="openFullscreen();"></i>
  	</ul>
  	<script>
var elem = document.documentElement;
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
}

function closeFullscreen() {
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.webkitExitFullscreen) { /* Safari */
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) { /* IE11 */
    document.msExitFullscreen();
  }
}
</script>
<div class = "reg">
<center><h1>ADMIN REGISTER</h1>
<h2><a href = "">REGISTER / </a><a href = "signin.php">LOGIN</a></center></h2>
<form action="" method="POST">
<h4>First Name</h4>
<input class = "email" type = "text" name = "firstname">
<br>
<h4>Last Name</h4>
<input class = "email" type = "text" name = "lastname">
<br>
<h4>Email-Id</h4>
<input class = "email" type = "text" name = "email_id">
<br>
<h4>Password</h4>
<input class = "email" type = "password" name = "password">
<br><br>
 <h4> Gender
<input type = "radio" name = "gender" value = "male">Male
<input type = "radio" name = "gender" value = "Female">Female
</h4>
<h4>Phone-No</h4>
<input class = "email" type = "text" name = "phone_no">
<br>
<input class = "button" type = "reset" value = "RESET">
<br>
<input class = "button2" type = "submit" value = "REGISTER" name = "submit" >
</div>
</form>

<?php
if(isset($_POST["submit"]))
{
if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email_id']) && !empty($_POST['password']) && !empty($_POST['gender']) && !empty($_POST['phone_no']))

{
	$firstName=$_POST['firstname'];
	$lastName=$_POST['lastname'];
	$emailId=$_POST['email_id'];
	$password1=$_POST['password'];
	$gender=$_POST['gender'];
	$phoneNo=$_POST['phone_no'];

	$query=mysqli_query($con,"SELECT * FROM logintable WHERE email_id='".$emailId."'");
	$numrows=mysqli_num_rows($query);
	if($numrows==0)
	{
		$sql="INSERT INTO `logintable`(`firstname`,`lastname`,`email_id`,`password`,`gender`,`phone_no`)
		VALUES('$firstName','$lastName','$emailId','$password1','$gender','$phoneNo')";
	
		$result=mysqli_query($con,$sql);
		if($result)
	 	 {
			$message = "Account Successfully Created";
			echo"<script type='text/javascript'>alert('$message');
   			</script>";
      	  	 }
		else 
	 	 {
			$message= "Failure!";
			echo"<script type='text/javascript'>alert('$message');
   			</script>";
	 	 }
	 }
	 else 
	 {
		$message =  "That username already exists! Please try again with another.";
		echo"<script type='text/javascript'>alert('$message');
   		</script>";
	 }

}
else
 {
	$message =  "All fields are required!";
	echo"<script type='text/javascript'>alert('$message');
   	</script>";
 }
}
?>

</body>
</html>


