<!DOCTYPE html>
<html>
<head>
  <title>HTML5...CSS...PHP...</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="description" content="HTML5...CSS...PHP...">
    <meta name="keywords" content="HTML5, CSS, PHP">
    <meta name="author" content="©Linux Andy / Germany">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.ico">
    <body style="background-color:lightcoral;">
    <div class="topnav">
    <a class="active" href="index.php">Reload</a>
    <a href="https://linuxhost.epizy.com/formular/" target="_blank">Kontaktformular</a>
    <a href="https://www.w3schools.com/" target="_blank">w3schools</a>
    <a href="https://github.com/linuxhtml/html/" target="_blank">github</a>
    <a href="https://linuxhost.epizy.com/up/" target="_blank">Datei-Upload</a>
</div>

<style> 

/* Add a black background color to the top navigation */
.topnav {
  background-color: grey;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: grey;
  color: white;
}

#body {
#background: -webkit-linear-gradient(left, #F5F6CE 0%, #F6CECE 100%);
#}

div.ex1 {
  margin: 10px;
  border: 2px solid black;
  outline: 5px dashed red;
  text-align: left;
  background-color: lightyellow;
  margin-left: auto;
  margin-right: auto;
  width: 800px;
} 

h1 {text-align: center;}
h2 {text-align: center;}
h4 {text-align: center;}
p {text-align: left;}
div {text-align: center;}
img {text-align: center;}
audio {text-align: center;}
video {text-align: center;}
div.gallery {text-align: center;}
div.gallery img {text-align: center;}
div.centerplayer div.mejs-container {
margin-right: auto;
margin-left: auto;
text-align: center;
}

h1 { 
  color: black; 
  font: 150% cursive;
  text-align: center;
  background-color: lightblue;
  border-radius: .5em; 
  border: thin solid red;
}

h3, h5, h6 { 
  background-color: black;
  font: 150% cursive;
  text-align: center;
  border-radius: .5em; 
  border: thin solid red;
  color: white;
}

.img1 {
  float: left;
}

.img2 {
  float: right;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 7%;
   background-color: grey;
   color: white;
   text-align: center;
}

</style>
</head>
<body>

<div class="clearfix">
  <img class="img1" src="logo.png" alt="html5" width="80" height="80">
  <img class="img2" src="css.png" alt="html5" width="80" height="80">
  <h2>HTML5 & CSS / Herzlich Willkommen...</h2>
</div>

    
<hr>


<h3>Lerne Deine Webseite selbst zu coden.</h3>


<div class="ex1">
    HTML5, CSS, PHP, Java anschaulich dargestellt.
<br>Einfaches Codebeispiel zum einfügen per Drag and Drop.
<br>Tricks und Kniffe / CSS im Zusammenspiel mit HTML5.
<br>Einfach das Codebeispiel zum testen im Editor beliebig z.B. als index.htm benennen.
</div>

<hr>

<h3>Problemlösung: Grafiken mit CSS zentriert...</h3>

<div class="ex1">
<xmp> 

<!DOCTYPE html>
<html>
<head>
    <title>HTML5...CSS...PHP...</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="description" content="HTML5...CSS...PHP...">
    <meta name="keywords" content="HTML5, CSS, PHP">
    <meta name="author" content="©Linux / Germany">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.ico">
    <body style="background-color:lightsalmon;">

<style> 

h1, h2 { 
  color: black; 
  font: 200% cursive;
  text-align: center;
  background-color: lightblue;
  border-radius: .5em; 
  border: thin solid red;
}

h1 {text-align: center;}
h2 {text-align: center;}
p {text-align: left;}
div {text-align: center;}
img {text-align: center;}
audio {text-align: center;}
video {text-align: center;}
div.gallery {text-align: center;}
div.gallery img {text-align: center;}
div.centerplayer div.mejs-container {
margin-right: auto;
margin-left: auto;
text-align: center;
}

img {
  text-align: center;
  width: 25%
}

</style>
</head>
<body>

<h1>Grafiken mit CSS zentriert anordnen...</h1>


<div class="img">
  <a target="_blank" href="html5.png">
  <img src="html5.png" alt="logo"></a>
  <a target="_blank" href="css.png">
  <img src="css.png" alt="logo"></a>
  <a target="_blank" href="java.png">
  <img src="java.png" alt="logo"></a>
  
</div>

<hr>

<br>
<br>

</div>
</body>
</html>
  
</xmp>
</div>

<hr>

<div style="text-align: center;">
<a target="_blank" href="center.png">
<img src="center.png" width="800px" height="640px" alt="elli"></a>
</div>

<hr>

<div class="centerplayer"> <audio controls="controls" autoplay="autoplay" preload="preload"
loop="loop" src="audio.mp3" type="audio/mp3"></audio>
</div>
    
<hr>

<h4><?php
include("counter.php");
echo $zahl;0001
?><br>
<br>
<br>
<br>
<br>
<footer>    
<div class="footer">
<h4>Autor: ©Linux Andy / August 2021 / Erfurt / Germany<br><a 
href="https://linuxhost.epizy.com/index/">Startseite</a> | <a 
href="https://linuxhost.epizy.com/formular/"target="_blank">Kontaktformular</a> | <a 
href="https://linuxhost.epizy.com/forum/"target="_blank">Linuxforum</a><br>
</div>
</footer>
</body>
</html>