<html>
<head>
<title>Untitled Document</title>
<style>

body {
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
	line-height:1.5em;
	color:#90C;
}
#container {
	height: 150px;
	width: 1024px;
	margin-right: auto;
	margin-left: auto;
}
#bottomnav a:hover {
	border-bottom-width: 2px;
	border-bottom-style: solid;
	border-bottom-color: #f5a06e;
}
header {
	color:#FFF;
	background-color: #FFF;
	height: 190px;
	width: 989px;
	padding-top: 35px;
	padding-left: 00px;
}
#main #content2 {
	height: 448px;
	width: 440px;
	float: right;
	padding-top: 72px;
}

footer {
	height: 100px;
	width: 1024px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 11px;
	color:#f5a06e;
	font-style: oblique;
	font-weight: bold;
	text-transform: uppercase;
}
#titleBar {
	height: 35px;
	width: 1024px;
	background-color: #FFCC00;
	text-align: center;
	padding-top: 15px;
	padding-right: 0px;
	padding-bottom: 0px;
	padding-left: 0px;
}
#topnav {
	height: 60px;
	width: 1024px;
	padding-top: 10px;
	padding-left: 15px;
}
#topnav a:hover {
	border-bottom-width: 2px;
	border-bottom-style: solid;
	border-bottom-color:#90C;
}
#topnav li:hover {
	border-bottom-width: 2px;
	border-bottom-style: solid;
	border-bottom-color: #90C;
}

#topnav a ul:hover {
	border-bottom-width: 0px;
	border-bottom-style: solid;
	border-bottom-color: #90C;
}

#main {
	
	height: 410%;
	width: 100%;
}
#main #content1 {
	height: 376px;
	width: 512px;
	float: left;
	padding-top: 72px;
	padding-left: 72px;
}
#main #content01 {
	height: 376px;
	width: 512px;
	float: left;
	padding-top: 72px;
	padding-left: 72px;
}
#main #content001 {
	height: 376px;
	width: 512px;
	float: left;
	padding-top: 72px;
	padding-left: 72px;
}
#main #content02 {
	height: 376px;
	width: 512px;
	float: left;
	padding-top: 72px;
	padding-left: 72px;
}
#main #content03 {
	height: 376px;
	width: 512px;
	float: left;
	padding-top: 72px;
	padding-left: 72px;
}
#main #content04 {
	height: 376px;
	width: 512px;
	float: left;
	padding-top: 72px;
	padding-left: 72px;
}
#main #content05 {
	height: 376px;
	width: 512px;
	float: left;
	padding-top: 72px;
	padding-left: 72px;
}
#innerMain {
	background-color:#96F;
	height: 100%;
	width: 100%;
	
}
#topnav a {
	font-weight: bold;
	text-transform: uppercase;
	color:#000;
	text-decoration: none;
	display: inline-block;
	padding: 0px;
	margin-right: 40px;
	float:left;
	
}

#topnav #pro
{
	margin-top:-18px;
}

footer #bottomnav {
	height: 40;
	width: 1024px;
	text-decoration: none;
	text-align: center;
	display: block;
	padding-top: 10px;
}
#bottomnav a {
	font-weight: bold;
	text-transform: uppercase;
	color: #f5a06e;
	text-decoration: none;
	margin-right: 15px;
}
h1 {
	font-family: Algerian;
	margin:0px;
	font-size: 4.5em;
}
h2 {
	margin: 0px;
	font-size: 1.75em;
}

img {
	padding-top: 10px;
	margin-right: 5px;
	margin-left: 5px;
}

#topnav ul 
{
	list-style: none;
}

#topnav ul li
{
	
	width:120px;
	height: 30px;
	line-height:30px;
	text-align:left;
	float:right;
	color:#000;
	font-size:15px;
	position:relative;
}

#topnav ul li:hover
{
	background-color:transparent;
}
#topnav ul ul 
{
	display:none;
}
#topnav ul li:hover > ul
{
	display:block;
}

#slideshow {
  margin: -50px auto;
  position: relative;
  width: 100%;
  height: 190px;
  padding: 10px;
  box-shadow: 0 0 0px rgba(0, 0, 0, 0.4);
}

#slideshow > div {
  position: absolute;
  top: 40px;
  left: -10px;
  right: 30px;
  bottom: 40px;
}

</style>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="/js/my.js"></script>

<script>

$("#slideshow > div:gt(90)").hide();

setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(10000)
    .next()
    .fadeIn(10000)
    .end()
    .appendTo('#slideshow');
}, 3000);

</script>

</head>
</head>

<body> 
<div id="container">
<header>

<div id="slideshow">
   <div>
     <img src="image/IMG-20170903-WA0001.jpg" style="" height="190px" width="1029px">
   </div>
   <div>
     <img src="image/thumb-1920-519203.jpg"  height="190px" width="1029px">
   </div>
   <div>
   	<img src="image/alienware-logo-background-870.jpg" height="190px" width="1029px">
   </div>
   <div>
     
   </div>
</div>


</header>
<div >
  <h2></h2>
</div>
<!--end title bar-->
<nav id= "topnav">
<a href="discussion.php">Discussion</a> 
<a href="#" id="pro">
<ul>
<li>Programs
	<ul>
        <li>BSCS</li>
        <li>BSSE</li>
    </ul>
</li>
</ul></a>  
<a href="#" id="pro">
<ul>
	<li>Teachers
    <ul>
    	<li>Ali</li>
        <li>Ahsan</li>
    </ul>
    </li>
</ul>

</a>
<a href="#">Achievements</a>   
<a href="email.php" style="padding-left:25px;">Contact Us</a>
</nav><!--end topnav-->
<div id="main">
  <div id="innerMain">
  <div id="content1"></div>
  <!--end content1-->
  
  <div id="content2">
    <h2>
  </div><!--end content2-->
   
  </div><!--end innerMAin-->
</div>
<!--end main-->
<footer>
<nav id="bottomnav">
<a href="#">Terms Of Service</a> 
<a href="#">Privacy Policy</a> 
<a href="#">Home</a></nav>
Teaching the world how to code???Then subscribe us  <a href="https://twitter.com/" target="new"> <img src="file:///C|/Users/abdul/Pictures/download.png" width="40" height="56" border="0"/></a>
<a href="https://www.facebook.com/" target="new"><img src="file:///C|/Users/abdul/Pictures/images.png" width="55" height="56" border="0"/></a>
<a href="https://www.linkedin.com/feed/" target="_parent"><img src="file:///C|/Users/abdul/Pictures/download (2).png"width="50" height="56" border="0" title="HELOOOOOOOOO"/></a>
<a href="https://mail.google.com/mail/u/0/#inbox" target="new"><img src="file:///C|/Users/abdul/Pictures/download (1).png" width="40" height="56" border="0"/></a>Copyrights Falcon © 2017
     
</footer></div>
 <!--end container-->
</body>
</html>
