<html>
<head>
    <title>Simple Banking System</title>
    <style>
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
	body
	{
	background-color:dimgray;
	margin:0;
	}
	.reg{
		background-color:black;
		width:100%;
		height:200px;
		margin-top:300px;
		margin-bottom:0;
	}
	input[type=text] {
	margin-top:100px;
 	 width: 100%;
  	padding: 12px 20px;
 	 margin: 8px 0;
 	 display: inline-block;
 	 border: 1px solid #ccc;
 	 border-radius: 4px;
 	 box-sizing: border-box;
	}
	textarea {
  width: 100%;
  height: 120px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  resize: none;
}
input[type = submit]
{
width:300px;
margin-top:40px;
margin-left:400px;
text-align:center;
background-color:dodgerblue;
color:white;
font-size:30px;
font-family:bold;
border-radius:10px;
}
.main
{


margin:auto;
margin-top:80px;
background-color:rgb(0,0,0,0.2);
width:90%;
height:360px;
border-radius:20px;
padding:15px;
}
h2
{
color:yellow;
text-align:center;
}
h1{margin-top:80px;
text-align:center;
color:yellow;
font-size:40px;
}
p
{
color:white;
font-size:20px;
font-family:times new roman;
}
img
{
width:50px;
height:50px;
margin-top:20px;
margin-left:10px;
}
h4
{
color:white;
}
    </style>
</head>
<body>
	<ul>
  	<li><a href = "index.php">Home</a></li>
  	<li><a  href = "about.php">About Us</a></li>
  	<li><a  class = "active" href = "contact.php">Contact Us</a></li>
  	<li><a href = "signin.php">Login</a></li>
  	<li><a href = "loginpage.php">Register</a></li>
  	<li><a href = "logout.php">Logout</a></li>
  	</ul>
<h1>CONTACT US</h1>
<p> Hello Friends, This is my first project of web development and technology . Feel free to get in touch with me. I am always available to discussing new projects , creative ideas or opportunities to be part of your visions. Any feedback you provide , any suggestions you have and any new idea you like to share - please don't hesitate , write to me immediately. This helps me to improve my website and also to add new interactive functionalities to my website.</p>
<div class = "main">
<form action="" method="POST">

<input class = "name" type = "text" name = "username" placeholder = "Enter your Name">
<br>
<input class = "name" type = "text" name = "email_id" placeholder = "Enter your valid Email-Id">
<br>
<input class = "name" type = "text" name = "contact" placeholder = "Enter your contact-no">
<br>
<textarea  name = "feedback", row = "50", cols = "50" placeholder = "Enter your message"></textarea>
<br>
<input type = "submit" name = "submit" value = "SUBMIT">
</div>
<div class = "reg"><h2>Follow Us</h2>
<h4>
<img src = "mail.png" >shivanitiwari730@gmail.com</img>
<img src = "phone.png">9718799587</img>
<img src = "youtube.png">https://www.youtube.com/watch?v=cbNh4xJ-t6k</img>
<img src = "link.jpg">https://www.linkedin.com/in/shivani-kumari-6155a2201/</img>
</h4>
</div>
</form>
</body>
</html>
<?php

$con=mysqli_connect('localhost','root','','company');

if(isset($_POST["submit"]))
{
if(!empty($_POST['username']) && !empty($_POST['email_id'])	&& !empty($_POST['contact']) && !empty($_POST['feedback']))
{
	$UserName=$_POST['username'];
	$emailId=$_POST['email_id'];
	$Contact=$_POST['contact'];
	$Feedback=$_POST['feedback'];
	
	$query=mysqli_query($con,"SELECT * FROM feedbacktable WHERE email_id='".$emailId."'");
	$numrows=mysqli_num_rows($query);
	if($numrows==0)
	{
		$sql="INSERT INTO `feedbacktable`(`username`,`email_id`,`contact`,`feedback`)
		VALUES('$UserName','$emailId','$Contact','$Feedback')";
	
		$result=mysqli_query($con,$sql);
		if($result)
		{
   			$message="Message Recevied successfully";
   			echo"<script type='text/javascript'>alert('$message');
   			</script>";
   		}
    		else 
		{
			$message="Failure";
   			echo"<script type='text/javascript'>alert('$message');
   			</script>";
		}
	}
	else 
	{
		$message = "That username already exists! Please try again with another";
		echo"<script type='text/javascript'>alert('$message');
   		</script>";
	}

}
else
 {
	$message = "All fields are required!";
	echo"<script type='text/javascript'>alert('$message');
   	</script>";
   	
 }
}
?>

