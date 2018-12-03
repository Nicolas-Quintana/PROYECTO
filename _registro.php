<?php 
require_once 'help.php';
// Redirigimos en el caso de que estemos logueados para evitar el acceso a esta página.
if (check()) {
    redirect('_muro.php');
}
// En el caso de que recibamos datos por POST y un archivo, registramos al usuario.
if ($_POST && $_FILES) {

    // Primero nos fijamos que el usuario no exista en la base de datos, de no existir, nos devuelve null.
    $usuarioViejo = $db->traerUsuario($_POST['email']);

        // Si el usuario efectivamente no se encontró, se procede a crear el usuario.
    if ($usuarioViejo === null) {

        // Creamos el usuario con los datos de $_POST
        $usuario = new User($_POST['nombre'],$_POST['apellido'], $_POST['email'], $_POST['password']);
        $usuario->setFotoPerfil($db->guardarFoto($_FILES['fotoPerfil']));
        
        // Validamos los datos del usuario que creamos anteriormente
        $errores = Validator::validarRegister($usuario);
        
        echo($errores);
        // Si en la validación no hubo errores, hasheamos la contraseña del usuario, lo guardamos en base de datos (json), iniciamos la sesión del mismo y redirigimos hacia la páginas de bienvenido.
        if (count($errores) === 0) {
            $usuario->setPassword(password_hash($usuario->getPassword(), PASSWORD_DEFAULT));
            $db->guardarUsuario($usuario);
            $_SESSION['usuario'] = $usuario;
            redirect('_muro.php');
        }
    } else {
        // De haberse encontrado el usuario, devolvemos un error.
        $errores['email'] = 'El email ya está usado.';
    }
}
?>
<?php 
// Mostramos los errores
if(isset($errores) && count($errores) > 0): ?>
<div>
    <ul>
        <?php foreach ($errores as $value): ?>
            <li><?= $value ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<section id="registro">
      <article class="registre">
      
          <p>Registro</p>
          <form  action=""  method="Post" enctype="multipart/form-data">
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