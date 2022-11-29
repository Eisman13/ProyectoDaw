<?php
session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
  
<head>
    <title>Proyecto Final DAW</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
        <nav>

        

        <a class="logo" title="" href="index.php"><img src="https://www.confeafa.org/wp-content/uploads/2022/06/mapa-andalucia.png"/></a>

        
        <a class="botonmenu" type="text" href="index.php" data-id="1">
            Portada
        </a>

        <a class="botonmenu" type="text" href="ayuda.php" data-i="3">
            Ayuda 
        </a>
<?php if(!isset($_SESSION['username'])) : ?>
        <a class="botonmenu" type="text" href="login.php"><span class="fa fa-sign-in"></span>Entrar</a>
<?php else : ?>
        <a class="botonmenu" type="text" href="crearanuncio.php" data-i="2">
            Añadir Anuncio
        </a>

        <a class="botonmenu" type="text" href="cerrarsesion.php"><span class="fa fa-sign-out"></span>Cerrar Sesión</a>
        
        <a class="botonmenu" type="text" ><?php echo $_SESSION['username'];?></a>

<?php endif ?>

    </nav>