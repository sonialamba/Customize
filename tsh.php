<!DOCTYPE html>
<html>
<head>
<title>
	E-shopping
</title>
<link rel="stylesheet" type="text/css" href="owl_carousel/owl-carousel/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="owl_carousel/owl-carousel/owl.theme.css">
<link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="owl_carousel/owl-carousel/owl.carousel.js"></script>
<script src="js/1.js"></script>
<link rel="stylesheet" type="text/css" href="css/main.css">

<script type="text/javascript">
	function mydesign(n){
	
    document.getElementById("0").src=n.src;
    document.getElementById("0").style.display="block";
    document.getElementById("0").style.width="350px";
    document.getElementById("0").style.height="400px";
    document.getElementById("0").style.position="absolute";
    document.getElementById("0").style.left="140px";
}

function myfun(){
	alert("Your Order has been placed");
	window.location='index.html';

}
</script>
<style>
    #newimg{
display:block;
width:120px;
height:180px;
position:absolute;
top:120px;
left:255px;
    }

</style>
</head>
<body>


<div id="inner">
	<nav>
		<ul class="innerul">
		<li><a href="index.html">Home</a></li>
		<li><a href="tsh.php">T Shirts</a></li>
		<li><a href="mob.php">Mobile Cases</a></li>
		<li><a href="cush.php">Cushions</a></li>
		<li><a href="bags.php">Bags</a></li>
		</ul>
	</nav>
<div id="main">
	<div id="color" class="c1 bord">
    <p align="center" class="huge"> <b>SELECT COLOR</b> </p><hr>
	<img id="5" src="images/17.jpg" onclick="mydesign(this)">
	<img id="6" src="images/18.jpg" onclick="mydesign(this)">
	<img id="7" src="images/19.jpg" onclick="mydesign(this)">
	<img id="8" src="images/20.jpg" onclick="mydesign(this)">
	<img id="9" src="images/21.jpg" onclick="mydesign(this)">
	<img id="10" src="images/22.jpg" onclick="mydesign(this)">
	<img id="11" src="images/23.jpg" onclick="mydesign(this)">  
	</div>
	<div id="design" class="c1">
		<img id="0" name="0">
        <img id="newimg" alt="Your Uploaded Image Will Appear Here" src="<?php session_start(); if($_SESSION["count"]==1) echo 'uploads/'.$_SESSION["fname"]; $_SESSION["count"]=0; ?>">
	</div>

    <div id="upload" class="c1 bord">
    <p align="center" class="huge"> <b>CUSTOMIZE</b> </p><hr>
    <form action="preview.php" method="post" enctype="multipart/form-data">
    	<p class=""><i>Upload Image Here</i></p>
    	<input type="file" name="fileToUpload" id="fileToUpload">

    
    <p class="pr"> Image Can be of Only jpg, png, Jpeg type</p>
    
    <br><br><br><br>	
	<input type="Submit" value="Upload Image" class="pr" name="preview"></input><br><br><br><br>
    <input type="button" value="Cancel" onclick="document.location.href='index.html'"></input>
    <input type="button" value="Proceed To CheckOut" onclick="myfun()"></input>
    </form>
    </div>

	</div>
<br>
<br>
<div id="predef" class="bord">
<p align="center" class="huge"> <b>SOME PRE DESIGNED PRODUCTS FOR YOU</b> </p><hr>
<ul>
	<li><img id="55" class="pre " src="images/5.jpg" onclick="mydesign(this)"></li>
	<li><img id="66" class="pre " src="images/6.jpg" onclick="mydesign(this)"></li>
	<li><img id="77" class="pre " src="images/7.jpg" onclick="mydesign(this)"></li>
	<li><img id="88" class="pre " src="images/24.jpg" onclick="mydesign(this)"></li>
    <li><img id="99" class="pre " src="images/25.jpg" onclick="mydesign(this)"></li>
    <li><img id="12" class="pre " src="images/26.jpg" onclick="mydesign(this)"></li>
    <li><img id="22" class="pre " src="images/27.jpg" onclick="mydesign(this)"></li>
    <li><img id="33" class="pre " src="images/28.jpg" onclick="mydesign(this)"></li>
    <li><img id="44" class="pre " src="images/29.jpg" onclick="mydesign(this)"></li>
    <li><img id="45" class="pre" src="images/30.jpg" onclick="mydesign(this)"></li>
    </ul>
  
</div>

</div>
<br>
<br>
</body>

</html>