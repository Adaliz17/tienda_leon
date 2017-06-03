<?php
session_start();
if (@!$_SESSION['usuario']) {
	header("Location:index.php");
}
 echo "hola -.- ".$_SESSION['usuario'];
?>