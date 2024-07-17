<?php 
  function message($status,$message){
      session_start();
      $_SESSION[$status] = $status;
      $_SESSION['message'] = $message;
  }
?>