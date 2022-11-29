<?php
session_start();

//TERMINAR O CERRAR LA SESION//

session_destroy();


header("Location: index.php");

?>