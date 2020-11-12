<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="css/taratop.css">
<meta charset="UTF-8">
<title>Tara top</title>
<link rel="icon" href="img/tara-top.png" /> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="header">
<img src="img/taratop.png" alt=""></img></div>


</head>


<body >
 
<div class= "navibar">
  <li><a href="index.php" class="cool-link">Ponuda</a></li>
 <li><a href="ponude.php" class="cool-link">Kamp/Smeštaj</a></li>
  <li><a href="restoran.php" class="cool-link">Restoran</a></li>
  <li><a href="galerija.php" class="cool-link">Galerija</a></li>
  <li><a href="kontakt.php" class="cool-link">Kontakt</a></li>
</div>

<style>
.button1 {
        background-color: #1c87c9;
        -webkit-border-radius: 60px;
        border-radius: 60px;
        border: none;
        color: #eeeeee;
        cursor: pointer;
        display: block;
        font-family: sans-serif;
        font-size: 30px;
        padding: 10px 10px;
        text-align: center;
        text-decoration: none;
      }
      @keyframes glowing {
        0% {
          background-color: #ffb366;
          box-shadow: 0 0 5px #ffb366;
        }
        50% {
          background-color: #CC6600;
          box-shadow: 0 0 20px #CC6600;
        }
        100% {
          background-color: #ffb366;
          box-shadow: 0 0 5px #ffb366;
        }
      }
      .button1 {
        animation: glowing 1300ms infinite;
      }

</style>



<div class="container">
<div class = "box">
<div class = "icon">Rafting Tarom</div>
<div class="content">
<h3>Jednodnevni</h3>
<img src="img/47.jpeg" alt="Avatar"  >
<button onclick="window.location.href='jednodnevni.php'" class="button">Saznaj više</button>

</div>
</div> 
<div class = "box">
<div class = "icon">Rafting Tarom</div>
<div class="content">
<h3>Dvodnevni</h3>
<img src="img/48.jpeg" alt="Avatar">
<button onclick="window.location.href='dvodnevni.php'" class="button">Saznaj više</button>

</div>
</div>
<div class = "box">
<div class = "icon">Rafting Tarom</div>
<div class="content">
<h3>Trodnevni</h3>
<img src="img/44.jpeg" alt="Avatar" >
<button onclick="window.location.href='trodnevni.php'" class="button">Saznaj više</button>

</div>
</div>

</div>

<!-- <a class="button1" onclick="window.location.href='specijalneponude.php'">SPECIJALNA PONUDA!!!</a-->

 </body>
 

</html>