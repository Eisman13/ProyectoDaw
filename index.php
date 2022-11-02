<?php
session_start();
var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<head>
    <title>Proyecto Final DAW</title>
    <link rel="stylesheet" href="scss/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!--Barra de navegación-->

    <nav>

        <div class="logo" >

            <a title="" href="index.php"><img src="proyecto/notas.jpg" style="width:76%;"/></a>

        </div>
        <a class="botonmenu" data-id="1">
            <p>Mi Cuenta</p>
        </a>
        <a class="botonmenu" data-i="2">
            <p>Anuncios</p>
        </a>
        <a class="botonmenu" data-i="4">
            <p>Contacto</p>
        </a>

        <a class="botonmenu" href="formulario.php"><span class="fa fa-sign-in"></span> Login</a>


    </nav>
    <!--SLIDER IMG-->

    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 4</div>
            <img src="media/imagenes/img1.png" style="width:100%">

        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 4</div>
            <img src="media/imagenes/img2.png" style="width:100%">

        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 4</div>
            <img src="media/imagenes/img3.png" style="width:100%">

        </div>
        <div class="mySlides fade">
            <div class="numbertext">4 / 4</div>
            <img src="media/imagenes/img4.png" style="width:100%">

        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>

    <!--contenido-->
    <div class="nombres" data-id="1">
        <h2>Mis Anuncios</h2>

        <div class="contenedorcartas">


            <div class="card">
                <img src="media/imagenes/juego1.png" alt="Anuncios" style="width:100%">
                <h1>Motor</h1>
                <p>Honda shadow</p>
                <p><button>Comprar</button></p>
            </div>

            <div class="card">
                <img src="media/imagenes/juego2.png" alt="Anuncios" style="width:100%">
                <h1>Informatica</h1>
                <p>Impresora 3D</p>
                <p><button>Comprar</button></p>
            </div>

            <div class="card">
                <img src="media/imagenes/juego3.png" alt="Anuncios" style="width:87%">
                <h1>Telefonia</h1>
                <p>Smatphone</p>
                <p><button>Comprar</button></p>
            </div>

        </div>
    </div>

    <div class="nombres">
        <h2>Anuncios más visitados</h2>
        <div class="contenedorcartas">


            <div class="card">
                <img src="media/imagenes/juego5.png" alt="Anuncios" style="width:74%">
                <h1>Alquiler</h1>
                <p>Pisos y habitaciones</p>
                <p><button>Comprar</button></p>
            </div>

            <div class="card">
                <img src="media/imagenes/juego6.png" alt="Anuncios" style="width:89%">
                <h1>Viajes</h1>
                <p>Cruceros</p>
                <p><button>Comprar</button></p>
            </div>

            <div class="card">
                <img src="media/imagenes/juego7.png" alt="Anuncios" style="width:100%">
                <h1>Videojuegos</h1>
                <p>Fifa23</p>
                <p><button>Comprar</button></p>
            </div>

        </div>
    </div>


    <!--FOOTER FINAL-->

    <footer>
      
        <div class="contenedor">
            <div class="copy">
                <a>Copyright&copy; 2022 - creado por Juan Eisman Cañero - Todos los derechos reservados</a>
            </div>
        </div>

    </footer>
    <!--JS DEL SLIDER-->
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 10000); // Change image every 2 seconds
        }



    </script>

</body>

</html>
Footer
© 2022 GitHub, Inc.
Footer navigation

    Terms
    Privacy
    Security
    Status
    Docs
    Contact GitHub
    Pricing
    API
    Training
    Blog
    About

