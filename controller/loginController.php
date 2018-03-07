<?php


  /*echo "hello world";*/

  # Leemos las variables enviadas mediante Ajax
  $user = $_POST['user'];
  $clave = $_POST['clave'];

  # Verificamos que los campos no esten vacios, el chiste de este if es que si almenos una variable (o campo) esta vacio mostrara error_1
  if(empty($user) || empty($clave)){

    # mostramos la respuesta de php (echo)
    echo 'los campos estan vacios';

  }else{

    /*
       Si tu usuario require de una validacion de email,
       es decir que contenga @ y .com, .es etc.
       habilita las lineas 21, 32, 33 y 34
    */

    if(filter_var($user, FILTER_VALIDATE_EMAIL)){

    # Incluimos la clase usuario
    require_once('../model/usuario.php');

    # Creamos un objeto de la clase usuario
    $usuario = new Usuario();

    # Llamamos al metodo login para validar los datos en la base de datos
    $usuario -> login($user, $clave);

    }else{
      echo 'el usuario y la contraseña son incorrectos';
    }

  }


?>
