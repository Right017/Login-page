<style>
    body{
    background-image: url("download.jpg");
}

.h1, h1 {
    font-size: 2.5rem;
    font-family: initial;
}
</style>
<?php
  session_start();

  session_unset();
  session_destroy();

  header("location:login.php");
  exit;
?>