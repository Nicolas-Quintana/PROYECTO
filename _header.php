<?php 
    // Requerimos los archivos necesarios.
    require_once 'help.php';
    
    // Redirigimos en el caso de que estemos logueados para evitar el acceso a esta página.
    if (check()) {
        redirect('_profile.php');
    }

    
    if ($_POST && !($_FILES)) {
        // Verificamos si el usuario ya existe en nuestra base de datos, y de ser así, que la contraseña sea la correcta.
        $verifica = Validator::validarLogin($db, $_POST['emailLog'], $_POST['passwordLog']);
        
        // Si efectivamente verificamos, guardamos en $_SESSION el usuario que se logueó y redirigimos a la página de bienvenidos.
        if ($verifica) {
            $usuario = $db->traerUsuario($_POST['emailLog']);
            
            $session->crearSesion($usuario);

            redirect('_profile.php');
        } else {
            // De no ser así, guardamos un error en el array de errores
            $errores['emailLog'] = "Usuario o contraseña incorrecto";
        }
    }
    
?>

<?php
// Si hay errores, los mostramos.
if(isset($errores) && count($errores) > 0): ?>
<div>
    <ul>
        <?php foreach ($errores as $value): ?>
            <li><?= $value ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BROADCASTt</title>
    <link rel="stylesheet" href="CSS/style.css"  />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous"> 
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Signika|Varela+Round" rel="stylesheet">
</head>

<body>
  <div class="container">
    <header>
      <a href="index.php"> <img class="img_header" src="img/Broad_tex_edi.png" alt="logo"/></a> <!--logo que estará en la barra navegadora fija-->
      <section class="menu">
        <nav> <!--barra de navegacion-->
          <ul class= "cintillo">
            <li><a href="#faq">FAQ</a></li> 
            <li><a href="#registro">REGISTRO</a></li>
          </ul>
        </nav>
        <!--esta seccion será para el login-->
        <form  class= "login" action="" method="post">
          <fieldset class="datoslog">
            <input class= "formu" type="email" name="emailLog" placeholder=" E-Mail">
            <input class= "formu" type="password" name="passwordLog" placeholder=" Password" >
            <button class= "entrar" type="submit" name="Login" value="Login">Login</button>
          </fieldset>
          <input type="checkbox" name="recordar">
          <label for="">Recordar E-Mail</label>
        </form>
      </section>
    </header>