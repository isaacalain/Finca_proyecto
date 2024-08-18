
<?php require_once "./parte_superior.php" ?>
<div class="intro-text">
    <p>Disfrutar de unas vacaciones en Puerto Viejo es una excelente decisión. ¿Por qué no complementar tu experiencia con un alojamiento de calidad?</p>
</div>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}
.carousel-img {
    width: 100%; 
    height: 500px; /* Ajusta esta altura según lo que necesites */
    object-fit: cover; 
}

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
  gap: 50px; /* Añade un espacio entre las columnas */
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
  border-bottom: 1px solid #ddd; /* Añade una línea debajo de la imagen para separación */
}


.card-content {
  display: none; /* Oculta el contenido por defecto */
  padding: 10px; /* Añade un poco de padding para mejor visualización */
  background-color: #f9f9f9; /* Color de fondo del contenido desplegado */
}

/* Opcional: Puedes añadir estilos cuando el card esté activo */
.card.active .card-content {
  display: block; /* Muestra el contenido cuando el card tiene la clase 'active' */
}


.intro-text {
    text-align: center;
    margin: 20px auto;
    font-weight: bold;
    padding: 10px;
    font-size: 24px;
    color: #292929;
    max-width: 1000px; 
}

.mid-info-title {
    font-size: 30pt;
    font-weight: 500;
    text-transform: uppercase;
    padding-top: 30px;
    font-family: "Roboto", sans-serif;
    margin-bottom: 20px; /* Añade espacio entre el título y la descripción */
}

.mid-info-desc {
    font-size: 26px;
    font-weight: 700;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 600px;
    font-family: "Roboto", sans-serif;
    text-align: center;
}
@media screen and (max-width: 1025px) {
    .slideshow-container {
        max-width: 100%; /* Asegura que el contenedor del slideshow ocupe todo el ancho disponible */
    }

    .carousel-img {
        height: auto; /* Ajusta la altura de las imágenes del carrusel automáticamente */
    }

    .column {
        width: 100%; /* Las columnas ocuparán todo el ancho disponible */
        margin-bottom: 20px; /* Añade un poco de espacio debajo de cada columna */
    }

    .card {
        max-width: 100%; /* Asegura que las tarjetas ocupen todo el ancho disponible */
    }

    .intro-text, .mid-info-title, .mid-info-desc {
        font-size: 18px; /* Ajusta el tamaño de fuente para pantallas pequeñas */
        padding: 10px; /* Ajusta el padding para que no se vean muy grandes en pantallas pequeñas */
        text-align: center; /* Centra el texto */
    }

    .mid-info-title {
        font-size: 24px; /* Reduce un poco el tamaño del título */
    }

    .mid-info-desc {
        font-size: 20px; /* Reduce un poco el tamaño de la descripción */
        width: 100%; /* Asegura que el texto ocupe todo el ancho disponible */
    }
}
/* General Styles */
body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}

.menu-izquierda img.logo {
    height: 150px; /* Tamaño del logo en pantallas grandes */
    width: auto; /* Mantiene la proporción */
    padding-left: 300px;
}

.menu-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
}

.menu-derecha {
    display: flex;
    gap: 10px;
}


/* Estilos para el ícono de hamburger */
.hamburger-icon {
    display: none;
    font-size: 30px;
    cursor: pointer;
}

/* Estilos responsivos */
/* Estilos responsivos */
@media screen and (max-width: 1025px) {
    .menu-container {
        flex-direction: row; /* Alinea los elementos en una fila */
        padding: 0 20px; /* Agrega espacio a los lados */
    }

    .menu-izquierda {
        flex: 1;
        padding-left: 0; /* Elimina el padding a la izquierda */
    }
  .menu-izquierda img.logo {
    
    padding-left: 30px;
  }

    .menu-derecha {
        display: none; /* Oculta los enlaces en pantallas más pequeñas */
    }

    .hamburger-icon {
        display: block; /* Muestra el icono en pantallas más pequeñas */
        padding-right: 30px;
    }
}
footer {
    background-color: #f8f8f8;
    color: #333;
    padding: 20px;
    box-sizing: border-box; /* Asegura que el padding se incluya en el ancho total */
}

.footer-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px; /* Espacio entre columnas */
}

.footer-column {
    flex: 1;
    min-width: 200px; /* Evita que las columnas sean demasiado pequeñas */
    margin: 10px;
}

.footer-column h3 {
    margin-top: 0;
}

.footer-column a {
    color: #2d6a4f; /* Verde */
    text-decoration: none;
}

.footer-column a:hover {
    text-decoration: underline;
}

.footer-right {
    text-align: right;
    display: flex;
    flex-direction: column;
    align-items: flex-end; /* Alinea el texto al final */
}

.footer-right h3, .footer-right p {
    margin: 0;
}

@media screen and (max-width: 1024px) {
    .footer-container {
        flex-direction: column;
        align-items: center;
    }

    .footer-column {
        width: 100%;
        text-align: center;
        margin: 10px 0; /* Espacio vertical entre columnas */
    }

    .footer-right {
        text-align: center;
    }
}




</style>
</head>
<body>

<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="./images/playa.jpg" class="carousel-img">
       
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="./images/atardecer.jpg" class="carousel-img">
        
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="./images/Puerto-Viejo-Costa-Rica.jpg" class="carousel-img">
        
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

    
</div>


<div class="row">
  <div class="column">
    <div class="card" onclick="toggleCard(this)">
      <h3>Habitación individual</h3>
      <img src="./images/cuarto-1.jpg" class="card-img">
      <div class="card-content">
        <p>"Disfruta de una escapada tranquila en nuestra habitación individual en un acogedor bungalow. Perfecta para un huésped, esta habitación ofrece un ambiente sereno con una cama cómoda, decoración elegante y todas las comodidades modernas que necesitas para una estancia relajante. Ideal para aquellos que buscan privacidad y confort en un entorno natural."</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card" onclick="toggleCard(this)">
      <h3>Habitación estandar</h3>
      <img src="./images/cuarto-2.jpg" class="card-img">
      <div class="card-content">
        <p>"Vive una experiencia inolvidable en nuestra habitación doble en un encantador bungalow. Diseñada para parejas, esta habitación combina confort y estilo, ofreciendo una cama king-size, un ambiente cálido y acogedor, y todas las comodidades necesarias para una estancia relajante. Perfecta para una escapada romántica o para disfrutar de un tiempo de calidad juntos en un entorno natural."</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card" onclick="toggleCard(this)">
      <h3>Habitación Familiar</h3>
      <img src="./images/cuarto-3.jpg" class="card-img">
      <div class="card-content">
        <p>"Perfecta para familias, nuestra habitación familiar en el bungalow ofrece espacio y confort para todos. Equipada con camas cómodas y un área de estar, proporciona el ambiente ideal para disfrutar de una estancia relajante y compartir momentos especiales en un entorno natural."</p>
      </div>
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

// Función para alternar el despliegue de contenido en las tarjetas
function toggleCard(card) {
  card.classList.toggle('active');
}
function toggleMenu() {
    const menuDerecha = document.querySelector('.menu-derecha');
    if (menuDerecha.style.display === 'flex') {
        menuDerecha.style.display = 'none';
    } else {
        menuDerecha.style.display = 'flex';
    }
}


</script>


</body>

<?php require_once "./parte_inferior.php" ?>
