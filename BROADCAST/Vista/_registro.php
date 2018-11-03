<?php 
require_once 'Controlador/validationCont.php';
require_once 'help.php';
require_once 'Controlador/registroCont.php';
require_once 'Controlador/fileCont.php';

if ($_POST){

  $usuarioViejo = traerUsuario($_POST['email']);

  if($usuarioViejo=== null){

    $usuario = crearUsuario($_POST['nombre'],$_POST['apellido'], $_POST['email'], $_POST['password'],$_POST['sexo'],$_FILES['fotoPerfil']);

    $errores = validarRegister($usuario);

    if ($errores){
      echo "<script>alert(error al registar)</script>";
    }else{
      if (count($errores) === 0) {
            $usuario['password'] = password_hash($usuario['password'], PASSWORD_DEFAULT);
            guardarUsuario($usuario);
            //$_SESSION['usuario'] = $usuario;
            redirect('Vista/_perfil.php');
      }else{

      }
    }
  }else{
    // De haberse encontrado el usuario, devolvemos un error.
    $errores['email'] = 'El email ya está usado.';
  }
}
?>
<section id="registro">
      <article class="registre">
      
          <p>Registro</p>
          <form  action=""  method="post" enctype="multipart/form-data">
          <fieldset class= "datos">
            <label for="nombre">Nombre:</label>  
            <input type="text"  name="nombre" value="<?= (isset($errores['nombre'])) ? '' : old('nombre') ?>">

            <label for="apellido">Apellido:</label>
            <input type="text"  name="apellido" value="<?= (isset($errores['apellido'])) ? '' : old('apellido') ?>">
          
            <label>E-mail:</label>
            <input type="email" name="email"  value="<?= (isset($errores['email'])) ? '' : old('email') ?>">

            <label>Password:</label>
            <input type="password" name="password" >
            
            <label for="file">Foto de Perfil</label>
            <input type="file" name="fotoPerfil">
            
            </fieldset>
            <fieldset class= "sexo">
            <label>Masculino</label> <input name="sexo" type="radio" value="M" checked>
            <label>Femenino</label> <input name="sexo" type="radio" value="F"> <br><br>
            </fieldset>

          <input class="regi" type="submit" name="registra" value="Resgistrar">
          </form>
        </article>
</section>