<?php
session_start();
$con=mysqli_connect('localhost','root','','company');
?>
<html>
<head>
    <title>Simple Banking System</title>
    <style>
    body
    {
    	background-image:url("1.jpg");
    	background-size:cover;
    }
    .reg{
		background-color:rgb(0,0,0,0.8);
		width:500px;
		height:460px;
		border-radius:20px;
		margin:auto;
		box-sizing:500px;
		padding:10px;
		color:#fff;
		margin-top:100px;
		margin-bottom:10px;
	
	}
	.email
	{
		width:445px;
		margin-left:15px;
		border:none;
		border-bottom:2px solid #fff;
		background:transparent;
		outline:none;
		height:20px;
		color:#fff;
		font-size:16px;
		border-radius:5px;
	}
	.button
	{
	background-color:red;
	color:white;
	font-size:20px;
	padding:10px;
	text-align:center;
	width:300px;
	margin-top:10px;
	margin-left:90px;
	font-family:times new roman;
	font-weight:bold;
	}
	
	.button2
	{
	margin-left:10px;
	background-color:green;
	color:white;
	font-weight:bold;
	text-align:center;
	padding:10px;
	width:100px;
	}
	h3
	{
	margin-left:20px;
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
	body
	{
	margin:0;
	}
	a
	{
	text-decoration:none;
	color:orange;
	}

    </style>
</head>
<body>
	<ul>
  	<li><a href = "index.php">Home</a></li>
  	<li><a  href = "about.php">About Us</a></li>
  	<li><a  href = "contact.php">Contact Us</a></li>
  	<li><a class = "active" href = "signin.php">Login</a></li>
  	<li><a href = "loginpage.php">Register</a></li>
  	<li><a href = "logout.php">Logout</a></li>
  	</ul>
      
<div class = "reg">
<center><h1>ADMIN LOGIN</h1>
<h2><a href = "loginpage.php">REGISTER /</a><a href = "signin.php">LOGIN</a></center></h2>
<form action=" " method="POST">
<h3>Email-Id</h3>
<input class = "email" type = "text" name = "email_id">
<br>
<h3>Password</h3>
<input class = "email" type = "password" name = "password">
<br><br><br>
<h3><a href = "loginpage.php">Not have a account REGISTER!</a>
<input class = "button2" type = "reset" value = "RESET"></h3>
<br>
<input class = "button" type = "submit" value = "LOGIN" name = "submit">
</div>
</form>
<?php
 if (isset($_POST["submit"])) 
{
        if (!empty($_POST['email_id']) && !empty($_POST['password'])) {
            $emailId=$_POST['email_id'];
	    $password1=$_POST['password'];

           

            //connect to the server select database
            
            $query = mysqli_query($con,"SELECT * FROM logintable WHERE email_id='" . $emailId . "' AND password='" . $password1 . "'");
            $numrows = mysqli_num_rows($query);
            if ($numrows != 0) 
            {
            
            	if ($email_id == $email_id && $password == $password) 
            	{
                	 session_start();
                 	 $_SESSION['sess_email_id'] = $email_id;
                 	header("Location:home.php");
                 	 
           	 }
           }
            else 
            {
                echo "Invalid email or password!";
            }
        } 
        else 
        {
            echo "All fields are required!";
        }
}
    ?>
</body>
<html>

