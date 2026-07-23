<?php 


if(isset($_POST['btn-logout']))
    {
      session_destroy();
      header("location:register.php");
    }
?>