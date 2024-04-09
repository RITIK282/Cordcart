<?php 
	session_start();
	unset($_SESSION['userName']);
	unset($_SESSION['userId']);
	unset($_SESSION['userRole']);
	session_destroy();
	header('Location: ../index.html');
?>