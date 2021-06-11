<html>
<head>
<title>
Sparks Banking System</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=shadow-multiple">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<style>
.mySlides
 {
 display:none;
}
body
{
background-color:teal;
margin:0;
}
.slides
{
margin-top:50px;
margin-right:200px;
}
 ul {
  position:fixed;
  width:100%;
  top:0;
  list-style-type: none;
  overflow: hidden;
  background-color: #333;
  background-size:cover;
  margin:0;
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
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
*
{
box-sizing:border-box;
}
.row
{
display:flex;
}
.column
{
flex:33.33%;

}

.main
{
margin-top:50px;
border:1px solid black;
width:50%;
height:10%;
margin-left:50px;
}
h2
{
margin-left:50px;
border:2px solid black;
background-color:black;
padding:10px;
color:white;
width:50%;
height:5%;
margin-top:0px;
text-align:center;
} 

a
{
text-decoration:none;
color:white;
} 
img
{
margin-top:70px;
border:2px   solid white ;
width:600px;
height:300px;
margin-left:50px;
}
.box
{
border:5px solid black;
width:500px;
height:300px;
padding:40px;
text-align:center;
margin-top:70px;
margin-left:50px;
font-size:40px;
font-family:"sofia", sans-serif;
color:mediumseagreen;
background-color:lightgray;
}
</style>
</head>
<body>
<ul>
  	<li><a href = "index.php">Home</a></li>
  	<li><a class = "active" href = "main.php">Main Page</a></li>
  	<li><a href = "getdetail.php">View Users</a></li>
  	<li><a href = "selectuser.php">Transfer</a></li>
  	<li><a href = "transaction.php">Transaction Details</a></li>
  	<li><a href = "logout.php">Logout</a></li>
  	</ul>
<div class = "row">
<div class = "column">  
 <img class="mySlides"  src="web.jpg" style="width:600px; height:300px;"  >
  <img class="mySlides" src="12.jpg" style="width:600; height:300px;">
  <img class="mySlides" src="13.jpg" style="width:600; height:300px;">
  <img class="mySlides" src="1.jpg" style="width:600; height:300px;">
  </div>
  <div class = "column">
  <div class = "box">Welcome to Sparks Bank
  <i class="fas fa-university" style="font-size:100px;color:black;"></i>
  </div>
  </div>
  </div>
<div class = "row">
<div class = "column">
<img class = "main" src = "bp.jpg"> 
<h2><a href = "getdetail.php">View users</a></h2>
</div>
<div class = "column">
<img class = "main" src = "pay.jpg">
<h2><a href = "selectuser.php">Transfer Money</a></h2>
</div>
<div class = "column">
<img class = "main" src = "15.jpg">
<h2><a href = "transaction.php">Transaction History</a></h2>
</div>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2500);    
}
</script>

</body>
</html>


