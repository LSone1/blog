<?php
//Start a session
session_start();

//Destory the session and redirect to the index.php
session_destroy();
header('Location: index.php');

 ?>
