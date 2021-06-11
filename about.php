<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>

<title>Simple banking system</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=shadow-multiple">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>

header
{
padding:20px;
background-color:blue;
text-align:center;
color:white;
font-size:30px;
text-decoration:underline;
font-style:italic;
margin-left:0px;
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
	.about
	{
	box-sizing:500px;
	border:none;
	width:900px;
	text-align:justify;
	}
	img {
  width: 250px;
  margin-right:50px;
}
	i
	{
	float:right;
	text-align:center;
	padding:10px;
	}	
.textwrap
{
float :right;
margin:10px;
margin-right:150px;
margin-top:10px;
}	
p
{
margin-top:50px;
font-size:20px;
margin-left:40px;
font-weight:bold;
font-family:"sofia", sans-serif;
}
h2{margin-left:50px;
color:teal;
font-size:30px;}
body
{
background-color:orange;
margin:0;
}


</style>

</head>
<body>
	<ul>
  	<li><a href = "index.php">Home</a></li>
  	<li><a  class = "active" href = "about.php">About Us</a></li>
  	<li><a  href = "contact.php">Contact Us</a></li>
  	<li><a href = "signin.php">Login</a></li>
  	<li><a href = "loginpage.php">Register</a></li>
  	<li><a href = "logout.php">Logout</a></li>

  	<i class="fas fa-compress-arrows-alt" style= "font-size:20px; color: white;" onclick="closeFullscreen();"></i>
  	<i class="fas fa-external-link-alt" style = "font-size:20px; color: white;" onclick="openFullscreen();"></i>
  	
</ul>
<header>

<h1> Online Banking System</h1>
</header>
<h2>About Me</h2>
 <img class = "textwrap" src = "person.png">
<div class = "about"><p>"Hello Everyone" Myself Shivani Kumari . This is my first website of Online Banking System where, i am tried to perform some functionality of Banking System. At that time , i am persuing in Diploma at Kasturba Institute Of Technology in Computer Science. This is my final year project and , i tried my best to make this website attractive and useful for the Customer or user. This website is only for Bank authorities peoples or we can say that admin , where he/she can login into the system and use all the functions available in this website.
</p></div>

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
</body>
</html>
