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

<script>
/*function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
    
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
   // alert(data);
   var n=document.getElementById(data).cloneNode(true);
   
    n.id="0";
    ev.target.appendChild(n);
    document.getElementById(n.id).style.width="50%";
    document.getElementById(n.id).style.height="400px";
    document.getElementById(n.id).style.position="relative";
    document.getElementById(n.id).style.left="160px";
}
*/

</script>
<script type="text/javascript">
	function mydesign(n){
	
	
    document.getElementById("0").src=n.src;
    document.getElementById("0").style.display="block";
    document.getElementById("0").style.width="50%";
    document.getElementById("0").style.height="400px";
    document.getElementById("0").style.position="absolute";
    document.getElementById("0").style.left="160px";
    document.getElementById("0").style.display="block";
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
top:180px;
left:300px;
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
	<img id="5" src="images/60.jpg" onclick="mydesign(this)">
	<img id="6" src="images/61.jpg" onclick="mydesign(this)">
	<img id="7" src="images/62.jpg" onclick="mydesign(this)">
	<img id="8" src="images/63.jpg" onclick="mydesign(this)">
	<img id="9" src="images/64.jpg" onclick="mydesign(this)">
	</div>

	<div id="design" class="c1">
		<img id="0">
        <img id="newimg" alt="Your Uploaded Image Will Appear Here" src="<?php session_start(); if($_SESSION["count"]==1) echo 'uploads/'.$_SESSION["fname"]; $_SESSION["count"]=0; ?>">
	</div>

    <div id="upload" class="c1 bord">
    <p align="center" class="huge"> <b>CUSTOMIZE</b> </p><hr>
    <form action="preview3.php" method="post" enctype="multipart/form-data">
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
	<li><img id="55" class="pre " src="images/8.jpg" onclick="mydesign(this)"></li>
	<li><img id="66" class="pre " src="images/9.jpg" onclick="mydesign(this)"></li>
	<li><img id="77" class="pre " src="images/10.jpg" onclick="mydesign(this)"></li>
	<li><img id="88" class="pre " src="images/65.jpg" onclick="mydesign(this)"></li>
    <li><img id="99" class="pre " src="images/66.jpg" onclick="mydesign(this)"></li>
    <li><img id="12" class="pre " src="images/67.jpg" onclick="mydesign(this)"></li>
    <li><img id="22" class="pre " src="images/68.jpg" onclick="mydesign(this)"></li>
    <li><img id="33" class="pre " src="images/69.jpg" onclick="mydesign(this)"></li>
    <li><img id="44" class="pre " src="images/70.jpg" onclick="mydesign(this)"></li>
    <li><img id="45" class="pre" src="images/71.jpg" onclick="mydesign(this)"></li>
    </ul>
  
</div>

</div>
<br>
<br>
</body>

</html>