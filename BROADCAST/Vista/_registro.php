<?php 
require_once 'Controlador/validationCont.php';
require_once 'help.php';
require_once 'Controlador/registroCont.php';
require_once 'Controlador/fileCont.php';


if ($_POST){
  $usuario = crearUsuario($_POST['nombre'],$_POST['apellido'], $_POST['email'], $_POST['password'],$_POST['sexo'],$_FILES['fotoPerfil']);

  $errores = validarRegister($usuario);

  if (count($errores) === 0) {
    $usuario['password'] = password_hash($usuario['password'], PASSWORD_DEFAULT);
    guardarUsuario($usuario);
    $_SESSION['usuario'] = $usuario;
    //redirect('Vista/_perfil.php');
}

}
?>
<section id="registro">
      <article class="registre">

          <p>Registro</p>
          <form  action=""  method="post" enctype="multipart/form-data">
          <fieldset class= "datos">
            <label for="nombre">Nombre:</label>  
            <input type="text"  name="nombre" value="<?php old('nombre'); ?>">

            <label for="apellido">Apellido:</label>
            <input type="text"  name="apellido" value="<?php old('apellido'); ?>">
          
            <label>E-mail:</label>
            <input type="email" name="email"  value="<?php old('email'); ?>">

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