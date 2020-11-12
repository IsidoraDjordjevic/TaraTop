<!DOCTYPE HTML>

<head>
<link rel="stylesheet" href="css/smestaj.css">
<title>Tara top</title>
<link rel="icon" href="img/tara-top.png" /> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="header">
<img src="img/taratop.png" alt=""></img></div>
<style type="text/css">
    .flip-box{
    background-color:transparent;
    height: 400px;
    width:400px;
    border:1px solid #f1f1f1;
    perspective: 1000px;
}
.flip-box-inner{
    width:100%;
    height:100%;
    text-align:center;
    transform-style: preserve-3d;
    transition: transform 0.8s;
    background: rgb(46, 60, 47, .6);
}
.flip-box:hover .flip-box-inner{
transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back{
    position: absolute;
    width: 100%;
    height:100%;
    backface-visibility: hidden;
}
.flip-box-front{
    background-color: #bbb;
    color:black;
}
.flip-box-back{
    color:white;
    transform: rotateY(180deg);
}
.flip-box-back h1{
    color: #CC6600;
    font-family:"Apple Chancery";
  font-weight:bold;
   
}

</style>


</head>

<html>



 <body >
 
<div class= "navibar">
  <li><a href="index.php" class="cool-link">Ponuda</a></li>
  <li><a href="ponude.php" class="cool-link">Kamp/Smeštaj</a></li>
  <li><a href="restoran.php" class="cool-link">Restoran</a></li>
  <li><a href="galerija.php" class="cool-link">Galerija</a></li>
  <li><a href="kontakt.php" class="cool-link">Kontakt</a></li>
</div>


<div class="zaglavlje">
<h2>Kamp/Smeštaj</h2>
</div>

<div class="container">
<div class="flip-box">
    <div class="flip-box-inner">
        <div class="flip-box-front">
            <img src="img/72.jpeg" alt="img" style="width:400px; height:400px"> 
        </div>
        <div class="flip-box-back">
            <h1>Apartmani: Tip 1</h1>
            <p>Četvorokrevetna soba, sa dva ležaja u prizemlju (krevet na sprat i klasični ležaj), i duplim ležajem na galeriji. Soba ima kupatilo. <br>
</p>
        </div>
    </div>
</div>
<div class="flip-box">
    <div class="flip-box-inner">
        <div class="flip-box-front">
            <img src="img/67.jpeg" alt="img" style="width:400px; height:400px"> 
        </div>
        <div class="flip-box-back">
            <h1>Apartmani: Tip 2</h1>
            <p>Dvokrevetna soba, sa dva dupla ležaja, u prizemlju i na galeriji. Soba ima kupatilo.</p>
        </div>
    </div>
</div>
<div class="flip-box">
    <div class="flip-box-inner">
        <div class="flip-box-front">
            <img src="img/4.jpg" alt="img" style="width:400px; height:400px"> 
        </div>
        <div class="flip-box-back">
            <h1>Bungalovi</h1>
            <p>Gostima su na raspolaganju bungalovi sa dva odvojena kreveta, sa zajedničkim kupatilom, ukupno pet takvih jedinica. Bungalovi su u napravljeni od drveta i pružaju optimalan komfor za vaš odmor u prirodi.</p>
        </div>
    </div>
</div>

</div>
 </body>
 
 

	
</html>