<?php

  session_start();

  if($_SESSION['cargo'] == 1){
    header("Location: ../index.php");
  }else if($_SESSION['cargo'] == 2){
    header("Location: ../index.php");

    session_destroy();
  }else{
  	header('location: ../index.php');
  }

 ?>
