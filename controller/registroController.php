<?php

  $name   = $_POST['name'];
  $apellido = $_POST['apellido'];
  $ciudad = $_POST['ciudad'];
  $telefono = $_POST['telefono'];
  $email  = $_POST['email'];
  $clave  = $_POST['clave'];
  $clave2 = $_POST['clave2'];
  $identificacion = $_POST['identificacion'];
  $cargo = $_POST['cargo'];

  if(empty($email) || empty($clave) || empty($clave2))
  {

    echo 'Por favor ingrese todos los campos'; // Un campo esta vacio y es obligatorio

  }else{

    if($clave == $clave2){

      if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

        # Incluimos la clase usuario
        require_once('../model/usuario.php');

        # Creamos un objeto de la clase usuario
        $usuario = new Usuario();

        # Llamamos al metodo login para validar los datos en la base de datos
        $usuario -> registroUsuario($name, $apellido, $ciudad, $telefono, $email, $clave, $identificacion, $cargo);


      }else{
        echo 'error_4';
      }


    }else{
      echo 'Por favor ingrese un email valido';
    }

  }

?>
