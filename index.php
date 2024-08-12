
<?php require_once "./parte_superior.php" ?>

<!--

<div class="titulo">
    <p>Disfrutar de unas vacaciones en Puerto Viejo es una excelente decisión. ¿Por qué no complementar tu experiencia con un alojamiento de calidad?</p>

</div>

<body>
    <div class="main-img">
        <img src="./images/playa.jpg" alt="">
    </div>

    <div class="main-accordion-container"></div>
    <div class="mid-info">
        <p class="mid-info-title">Bungalows</p>
        <p class="mid-info-desc">Elige la habitación ideal para tus vacaciones y disfruta de una experiencia fuera de lo común.</p>
    </div>
    <div class="card-list">

    </div>
</body>
-->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}





* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}

.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}


.row {
  display: flex; 
  justify-content: center; /* Centra las columnas horizontalmente */
  flex-wrap: wrap; /* Permite que las columnas se envuelvan si hay muchas */
  gap: 20px; /* Añade un espacio entre las columnas */
  padding: 20px; /* Espacio alrededor de las columnas */
}


.column {
  flex: 1 1 300px; /* Las columnas tomarán el mismo ancho, mínimo 300px */
  max-width: 300px; /* Limita el ancho máximo */
}


.card {
  position: relative;
  width: 100%; /* Ajusta el tamaño del contenedor de la tarjeta */
  max-width: 300px; /* Ancho máximo de la tarjeta */
  border-radius: 8px;
  overflow: hidden; /* Asegura que la imagen no se salga de los bordes redondeados */
}

.card-img {
  width: 100%; /* La imagen ocupará todo el ancho del contenedor */
  height: auto; /* Mantiene la proporción de la imagen */
  display: block; /* Evita espacios debajo de la imagen */
  object-fit: cover; /* Cubre completamente el contenedor sin distorsionar */
}



</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="./images/playa.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="./images/atardecer.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="./images/Puerto-Viejo-Costa-Rica.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
    <div class="mid-info">
        <p class="mid-info-title">Bungalows</p>
        <p class="mid-info-desc">Elige la habitación ideal para tus vacaciones y disfruta de una experiencia fuera de lo común.</p>
    </div>



 <div class="row"  >
 
  <div class="column" >
  <div class="card">
    <img src="./images/cuarto_individual.jpg" class="card-img">
</div>

  </div>

  <div class="column">
    <div class="card" >
      <h3>Card 2</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card" >
      <h3>Card 3</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div>

</div>






<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>

<?php require_once "./parte_inferior.php" ?>
