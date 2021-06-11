<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Simple Banking System</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=shadow-multiple">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
  .about
{
width:100%;
height:100%;
position:absolute;
background-image:url("bank.jpeg");
opacity:0.8;
background-size:100% 100%;
animation: slider 9s infinite linear;
}
@keyframes slider{
0%{background-image:url("bank.jpeg");}
50%{background-image:url("rav.jpeg");}
100%{background-image:url("13.jpg");}

}

header
{
padding:20px;
background-color:lightblue;
font-size:40px;
height:80px;
font-family:times new roman;
color:teal;
font-weight:bold;
}
  ul {
  position:absolute;
  width:100%;
  margin-top:0px;
  list-style-type: none;
  overflow: hidden;
  background-color: #333;
  background-size:cover;
  
  padding:0;
}
li{
float:left;}

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
   
    h1
    {
    	font-family: "Sofia", sans-serif;
   	 font-size: 30px;
	margin-top:90px;
	font-size:70px;
	color:green;
	text-shadow:2px 3px;
	
    }
    i
	{
	float:right;
	text-align:center;
	padding:10px;
	}
    
    h2
    {
				
	font-family:"Sofia", sans-serif;
	font-size:40px;
	text-align:center;
	color:white;
	margin-top:10px;
    }
    p{font-family:"Sofia", sans-serif;
	font-size:30px;
	color:white;
	}
	h3{
	font-family:times new roman;
	color:green;
	text-align:right;
	margin-top:0px;
	margin-right:20px;
	text-decoration:underline;
	font-size:20px;
	}
	.button
	{
		display:inline-block;
		padding: 8pxpx;
		text-align:center;
		font-size:40px;
		border-radius:15px;
		text-decoration:none;
		background-color:teal;
		color:white;
		box-shadow:0 9px #999;
		text-shadow:2px 2px skyblue;
		font-family:times new roman;
		
	}
	.button:hover
	{
		background-color:#3e8e41;
	}
	.button:active
	{
		background-color:teal;
		box-shadow: lightgray;
		transform: translatey(10px);
	}
	body
	{
	background-size:cover;
	margin:0;
	
	}
	
    </style>
</head>
<body>
<header>
<i class="fas fa-university" style="font-size:60px;color:white;"></i>
Sparks Bank

 <h3>CREATED BY:  SHIVANI KUMARI</h3>
</header>
<div class = "about">
<center>

	<ul>
  	<li><a class = "active" href = "#Home">Home</a></li>
  	<li><a  href = "about.php">About Us</a></li>
  	<li><a  href = "contact.php">Contact Us</a></li>
  	<li><a href = "signin.php">Login</a></li>
  	<li><a href = "loginpage.php">Register</a></li>
  	<li><a href = "logout.php">Logout</a></li>
  	<i class="fas fa-compress-arrows-alt" style= "font-size:20px; color: white;" onclick="closeFullscreen();"></i>
  	<i class="fas fa-external-link-alt" style = "font-size:20px; color: white;" onclick="openFullscreen();"></i>
  	
  	</ul>
      
      <marquee direction = left><h1 class="font-effect-shadow-multiple"> Sparks Foundation Internship Project </h1></marquee>
       
       <h2> Simple Banking System </h2>
       <p>Transfer Money Online Anytime, Anywhere<p>
       <a class = "button" href = "signin.php">Get Started</a>
      
 
      </center>
</div>  
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
