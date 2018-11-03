<?php

    // Validamos todos los datos del usuario, recibimos un array usuario para analizar.
    function validarRegister ($usuario)
    {
        $errores = [];

        // Nos fijamos que la posición exista dentro de nuestro array.
        if (isset($usuario['nombre'])) {
            // En caso de existir, nos fijamos que no sea un string vacio.
            if (empty($usuario['nombre'])) {
                $errores['nombre'] = 'El nombre está vacío.';
            // Si no, nos fijamos que el largo sea menor a 4
            } elseif (strlen($usuario['nombre']) < 4) {
                $errores['nombre'] = 'El nombre debe tener 4 caracteres o más.';
            // Si no, nos fijamos que el largo sea mayor a 10
            } elseif (strlen($usuario['nombre']) > 10) {
                $errores['nombre'] = 'El nombre debe tener 10 caracteres o menos.';

            }
        }
        // Nos fijamos que la posición exista dentro de nuestro array.
        if (isset($usuario['apellido'])) {

            // En caso de existir, nos fijamos que no sea un string vacio.
            if (empty($usuario['apellido'])) {
                $errores['apellido'] = 'El apellido está vacío.';

            // Si no, nos fijamos que el largo sea menor a 4
            } elseif (strlen($usuario['apellido']) < 4) {
                $errores['apellido'] = 'El apellido debe tener 4 caracteres o más.';

            // Si no, nos fijamos que el largo sea mayor a 10
            } elseif (strlen($usuario['apellido']) > 10) {
                $errores['apellido'] = 'El apellido debe tener 10 caracteres o menos.';

            }
        }

        // Nos fijamos que la posición exista dentro de nuestro array.
        if (isset($usuario['email'])) {
            // En caso de existir, nos fijamos que no sea un string vacio.
            if (empty($usuario['email'])) {
                $errores['email'] = 'El email está vacío.';
            // Si no, nos fijamos que el correo tenga formato valido (algo@algo.algo)    
            } elseif (!filter_var($usuario['email'], FILTER_VALIDATE_EMAIL)) {
                $errores['email'] = 'El email no es correcto';

            }
        }

        // Nos fijamos que la posición exista dentro de nuestro array.
        if (isset($usuario['password'])) {
            // En caso de existir, nos fijamos que no sea un string vacio.
            if (empty($usuario['password'])) {
                $errores['password'] = 'El password está vacío.';
            // Si no, nos fijamos que el largo sea menor a 5    
            } elseif (strlen($usuario['password']) < 5) {
                $errores['password'] = 'El password debe tener 5 caracteres o más.';
            // Si no, nos fijamos que el largo sea mayor a 10
            } elseif (strlen($usuario['password']) >= 10) {
                var_dump(strlen($usuario['password']));exit;
                $errores['password'] = 'El password debe tener 10 caracteres o menos.';
            }
        }
        
        // Validamos la foto que recibimos, nos fijamos que se haya subido bien.
        if (!validarFoto($_FILES['fotoPerfil'])) {
            $errores['fotoPerfil'] = 'Hubo un error al subir la foto.';
        }

        return $errores;
    }


    // Nos fijamos que la foto no tenga errores.
    function validarFoto ($foto)
    {
        if ($foto["error"] !== UPLOAD_ERR_OK) {
            return false; 
        }
        return true;
    }


?>