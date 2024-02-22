<?php
session_start();

if(isset($_SESSION['adminLogin']) && isset($_SESSION['admin']))
{
unset($_SESSION['adminLogin']);
unset($_SESSION['admin']);
$_SESSION['msg']="Logged in successfully...";
}

header('Location: ..\index.php')
?>