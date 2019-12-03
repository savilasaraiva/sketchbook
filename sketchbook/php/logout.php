<?php session_destroy();

  if(isset($_SESSION['usuario'])){
    
  }else {
    header("Location: login.php");
  }
?>