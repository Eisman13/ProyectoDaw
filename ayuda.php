<?php require_once('templates/header.php'); ?>


    <!--SLIDER IMG-->

    
<div class="container">
  <h1>Preguntas Frecuentes</h1>
<p>Si tiene alguna duda sobre la publicación o modificación de su anuncio, seguro que aquí encontrará la solución. En esta página hemos dado respuestas a las preguntas más frecuentes de nuestros usuarios.
Al final de está, encontrará un formulario por sí aún le han quedado dudas sin responder. <br>
<strong>IMPORTANTE para tener acceso al formulario debe usted registarse y loguearse.</strong></p>


<h2>Problemas con su Perfil:</h2>
<p>Puede ponerse en contacto con nuestro equipo en el formulario, que se encuentra al final de esta página, e indicarnos su motivo. Para que podamos atenderle lo mejor posible.</p>

<h2>Problema al añadir Anuncios:</h2>
<p>Es posible, a veces pasa, que al poner el email de contacto en el formulario de publicación de su anuncio se haya equivocado en alguna letra, y al ser este un email erróneo no podrá recibir respuesta. En este caso, lo mejor que puede hacer es volver a poner el anuncio con el email correcto.
Y ponerse en contacto con nosotros lo antes posible para que eliminemos el anuncio erroneo o se proceda a la modificación de su correo.</p>

<h2>Modificar Datos de Contacto: </h2>
<p>Esto se llevará acabo dentro de nuestro servicio técnico el cual modificará bajo su responsabilidad los datos de su usuario así como su email,etc.
En proximas actualizaciones será usted mismo quien pueda modificar los datos desde un sub-apartado una vez inicie sesión.</p>

<h2>Renovar Anuncios: </h2>
<p>Actualmente estamos trabajando para implementar algunas pestañas de edición o modificación de anuncios para poder brindar a los usuarios nuevas herramientas de mejora. Sí usted acaba de llegar y aún no están implementadas dichas mejoras. Pongase en contacto con nuestro equipo en el formulario de abajo e intentaremos ayudarle en la medida de lo posible.</p>

<h2>Anuncios de Pago: </h2>
<p>Está página está libre de pagos y por consiguiente de ese tipo de anuncios. Todos los anuncios son gratis y no se percibe remuneración alguna por este servicio.</p>

<h2>Contacto: </h2>
<p>Si no encontró la respuesta a sus dudas, por favor póngase en contacto con nosotros: En el formulario de más abajo.
Le responderemos lo antes posible.</p>

<?php 

if(isset($_SESSION['username']) && !empty($_SESSION['username']))
{


//else cuando tiene la sesion iniciada

  $succes = false;
  $alreadyExist = false;

  $loggeduserid = $_SESSION['id'];
  
  
  if (isset($_POST['name'], $_POST['email'], $_POST['query']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['query'])){
    require_once('src/Help/HelpRepository.php');
    $helpRepository = new HelpRepository();

    if (!$alreadyExist){
    $helpRepository->createConsultas($_POST['name'], $_POST['email'], $_POST['query'], $loggeduserid);

    echo "La consulta se ha enviado" . "<br>";
    }
  }


?>
  
  <h1>¿Tienes un problema, sugerencia o consulta?</h1><br>
    
  <div class="register-form">
    <form action="" method="POST">
      <input type="text" name="name" placeholder="Nombre">
      <input type="email" name="email" placeholder="Email">
      <input type="text" name="query" placeholder="Consulta">
      <button type="submit" name="accion" value="ayuda.php">Enviar consulta</button>
    </form>
  </div>
</div>

<?php 
}
require_once('templates/footer.php'); 

?>
