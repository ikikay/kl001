<?php 
    session_start();
    if(!$_SESSION['Login'])
    {header('Location: index.php');}
?>